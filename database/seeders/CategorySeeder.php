<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Web Programing',
                'slug' => 'web-programing',
            ],
            [
                'name' => 'Personal',
                'slug' => 'personal',
            ],
            [
                'name' => 'News',
                'slug' => 'news',
            ],
            [
                'name' => 'Sport',
                'slug' => 'sport',
            ],
        ];

        foreach ($datas as $data) {
            Category::create([
                'name' => $data['name'],
                'slug' => $data['slug'],
            ]);
        }
    }
}
