<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = 
        [
            [
                'title' => "Judul Post Pertama",
                'slug' => "judul-post-pertama",
                'author' => "Valentinus Moreno",
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quod quos beatae amet, vitae itaque ad eaque repudiandae delectus dicta error voluptas odio tempora maxime nulla omnis laborum dolor aut enim necessitatibus ratione adipisci! Blanditiis ratione itaque doloremque error nulla aperiam dolorem tenetur pariatur quae eveniet totam veniam, similique tempora nemo magnam esse laboriosam nihil vel saepe facere. Possimus illum laborum accusamus, debitis, aut quos soluta quia quo praesentium accusantium id nostrum esse. Eveniet deleniti totam atque tempore iure in.",
                "created_at"=> now()
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Gehena",
                "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam neque asperiores similique debitis, eveniet rerum id fugiat ut deserunt dolor atque sapiente aut earum labore illo aliquam, minus unde odit voluptatum ratione odio laborum. Non accusantium laborum a, deleniti quae aperiam praesentium, alias ut, placeat dolores ad eum. Repudiandae quasi, soluta molestias illum adipisci rerum quibusdam perspiciatis magni vel vitae animi totam numquam dolores? Blanditiis ab delectus repudiandae veritatis, laborum error omnis. Officiis modi laborum, sed similique ipsa voluptates. Neque deleniti, adipisci, maiores magnam cupiditate et, ut iusto modi nesciunt nihil eligendi perspiciatis in? Velit, sequi praesentium. Delectus, error ipsum.",
                "created_at" => now()
            ],
        ];

        DB::table('blogs')->insert($blogs);
    }
}
