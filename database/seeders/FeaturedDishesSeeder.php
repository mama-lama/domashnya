<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class FeaturedDishesSeeder extends Seeder
{
    public function run(): void
    {
        $featuredNames = [
            'Борщ',
            'Лапша домашняя',
            'Шурпа',
            'Солянка',
            'Котлеты домашние',
            'Котлета куриная',
            'Мясо отбивное (свинина)',
            'Салат из капусты',
            'Оливье',
            'Свекла с чесноком',
            'Винегрет',
            'Картофельное пюре',
            'Макароны',
            'Чай черный (с сахаром)',
            'Кофе (с сахаром)',
            'Компот',
        ];

        MenuItem::whereIn('name', $featuredNames)->update(['is_featured' => true]);
        MenuItem::whereNotIn('name', $featuredNames)->update(['is_featured' => false]);
    }
}
