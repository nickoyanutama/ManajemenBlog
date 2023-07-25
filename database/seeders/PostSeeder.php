<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $datas = [
        //     [
        //         'title' => 'Judul Pertama',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem Pertama',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi pariatur delectus laboriosam sunt odio maxime natus porro quia consequuntur perspiciatis iste distinctio officiis, optio provident doloribus eius cum nulla voluptate magnam quo error vel tempore! Enim sunt nam ipsum pariatur vero in obcaecati impedit laborum molestiae mollitia nisi aperiam fuga omnis dolor eveniet, iusto exercitationem sed, minima praesentium, quasi hic aut ut? Sunt iure obcaecati minus blanditiis possimus tenetur esse harum eum. Soluta ducimus recusandae voluptate voluptatum esse. Eligendi, eveniet dicta illum voluptas earum dolorem in, dolor cum amet consectetur deleniti quas, error ducimus enim pariatur odit at? Blanditiis, labore.',
        //         'category_id' => '1',
        //         'user_id' => '1',
        //     ],
        //     [
        //         'title' => 'Judul Ke Dua',
        //         'slug' => 'judul-ke-dua',
        //         'excerpt' => 'Lorem Ke Dua',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi pariatur delectus laboriosam sunt odio maxime natus porro quia consequuntur perspiciatis iste distinctio officiis, optio provident doloribus eius cum nulla voluptate magnam quo error vel tempore! Enim sunt nam ipsum pariatur vero in obcaecati impedit laborum molestiae mollitia nisi aperiam fuga omnis dolor eveniet, iusto exercitationem sed, minima praesentium, quasi hic aut ut? Sunt iure obcaecati minus blanditiis possimus tenetur esse harum eum. Soluta ducimus recusandae voluptate voluptatum esse. Eligendi, eveniet dicta illum voluptas earum dolorem in, dolor cum amet consectetur deleniti quas, error ducimus enim pariatur odit at? Blanditiis, labore.',
        //         'category_id' => '1',
        //         'user_id' => '1',
        //     ],
        //     [
        //         'title' => 'Judul Ke Tiga',
        //         'slug' => 'judul-ke-tiga',
        //         'excerpt' => 'Lorem Ke Tiga',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi pariatur delectus laboriosam sunt odio maxime natus porro quia consequuntur perspiciatis iste distinctio officiis, optio provident doloribus eius cum nulla voluptate magnam quo error vel tempore! Enim sunt nam ipsum pariatur vero in obcaecati impedit laborum molestiae mollitia nisi aperiam fuga omnis dolor eveniet, iusto exercitationem sed, minima praesentium, quasi hic aut ut? Sunt iure obcaecati minus blanditiis possimus tenetur esse harum eum. Soluta ducimus recusandae voluptate voluptatum esse. Eligendi, eveniet dicta illum voluptas earum dolorem in, dolor cum amet consectetur deleniti quas, error ducimus enim pariatur odit at? Blanditiis, labore.',
        //         'category_id' => '2',
        //         'user_id' => '1',
        //     ],
        // ];

        // foreach ($datas as $data) {
        //     Post::create([
        //         'title' => $data['title'],
        //         'slug' => $data['slug'],
        //         'excerpt' => $data['excerpt'],
        //         'body' => $data['body'],
        //         'category_id' => $data['category_id'],
        //         'user_id' => $data['user_id'],
        //     ]);
        // }
        Post::factory(20)->create();
    }
}
