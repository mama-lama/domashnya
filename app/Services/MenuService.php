<?php

namespace App\Services;

use App\Models\MenuItem;
use Illuminate\Support\Collection;

class MenuService
{
    /**
     * Group menu items by name + categories, merging multiple portions
     * and attaching display price/weight fields.
     *
     * @param Collection<int, MenuItem> $items
     * @return Collection<int, object>
     */
    public function groupMenuItems(Collection $items): Collection
    {
        $grouped = [];

        foreach ($items as $item) {
            $key = $item->name . '_' . implode(',', $item->categorySlugs());
            if (!isset($grouped[$key])) {
                $grouped[$key] = [
                    'id' => $item->id,
                    'name' => $item->name,
                    'description' => $item->description,
                    'ingredients' => $item->ingredients,
                    'tag' => $item->tag,
                    'image_url' => $item->image_url,
                    'category_slugs' => $item->categorySlugs(),
                    'price' => $item->price,
                    'weight' => $item->weight,
                    'has_multiple_portions' => false,
                    'min_price' => $item->price,
                    'portions' => [
                        ['weight' => $item->weight, 'price' => $item->price],
                    ],
                ];
            } else {
                $grouped[$key]['has_multiple_portions'] = true;
                $grouped[$key]['portions'][] = [
                    'weight' => $item->weight,
                    'price' => $item->price,
                ];
                if ($item->price < $grouped[$key]['min_price']) {
                    $grouped[$key]['min_price'] = $item->price;
                }
            }
        }

        return collect(array_values($grouped))->map(function ($data) {
            $obj = new class {
                public $id;
                public $name;
                public $description;
                public $ingredients;
                public $tag;
                public $image_url;
                public $category_slugs;
                public $price;
                public $weight;
                public $has_multiple_portions;
                public $min_price;
                public $portions;
                public $display_price;
                public $display_weight;

                public function categorySlugs(): array
                {
                    return $this->category_slugs ?? [];
                }
            };

            foreach ($data as $key => $value) {
                $obj->$key = $value;
            }

            if ($data['has_multiple_portions']) {
                $obj->display_price = 'от ' . $data['min_price'] . ' ₽';
                $obj->display_weight = implode(' • ', array_map(
                    fn ($p) => $p['weight'] . ' (' . $p['price'] . ' ₽)',
                    $data['portions']
                ));
            } else {
                $obj->display_price = $data['price'] . ' ₽';
                $obj->display_weight = $data['weight'];
            }

            return $obj;
        });
    }
}
