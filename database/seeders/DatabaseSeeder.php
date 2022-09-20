<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Type;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([

            'name' => 'M.Dio Geovani',
            'username' => 'diogeovani',
            'email' => 'mdio.geovani22@gmail.com',
            'password' => bcrypt('password')

        ]);

        // User::create([

        //     'name' => 'fauzan kamal',
        //     'email' => 'fauzan@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        Post::factory(20)->create();
        User::factory(20)->create();


        Category::create([
            'name' => 'Pr Monitoring',
            'slug' => 'pr-monitoring'
        ]);

        Category::create([
            'name' => 'CC',
            'slug' => 'cc'
        ]);

        Category::create([
            'name' => 'SO',
            'slug' => 'so'
        ]);

        Category::create([
            'name' => 'PO/STO',
            'slug' => 'po/sto'
        ]);

        Category::create([
            'name' => 'Goods Return',
            'slug' => 'goods-return'
        ]);
        Category::create([
            'name' => 'Sales Return',
            'slug' => 'sales-return'
        ]);
        Category::create([
            'name' => 'Memo',
            'slug' => 'memo'
        ]);

        Category::create([
            'name' => 'Claimable',
            'slug' => 'claimable'
        ]);

        Category::create([
            'name' => 'Perjadin',
            'slug' => 'perjadin'
        ]);

        Category::create([
            'name' => 'Cash Advance',
            'slug' => 'cash-advance'
        ]);

        Category::create([
            'name' => 'Promotion and BB',
            'slug' => 'promotion-and-bb'
        ]);
        Category::create([
            'name' => 'RSP STP Creation',
            'slug' => 'rsp-stp-creation'
        ]);
        Category::create([
            'name' => 'B2B Pricing',
            'slug' => 'b2b-pricing'
        ]);
        Category::create([
            'name' => 'Stock Adjustment',
            'slug' => 'stock-adjustment'
        ]);
        Category::create([
            'name' => 'PIR',
            'slug' => 'pir'
        ]);

        Type::create([
            'name' => 'To Do',
            'slug' => 'to do'
        ]);

        Type::create([
            'name' => 'On Going',
            'slug' => 'on Going'
        ]);

        Type::create([
            'name' => 'Pending Requests',
            'slug' => 'pending requests'
        ]);
        Type::create([
            'name' => 'Done',
            'slug' => 'done'
        ]);




        // Category::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //         mollitia dolore enim nulla ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //         mollitia dolore enim nulla ad fugit vel! Recusandae quos tenetur incidunt ea doloribus, quasi, illo, officia delectus quaerat non maxime ut molestiae in iste dolor sed sunt rerum quas vitae alias. Dolore ea nemo temporibus expedita id quae, necessitatibus ipsum reiciendis cupiditate delectus sit maiores. Cum vero illo nisi animi voluptate cupiditate hic aliquid ut atque fugiat quae tenetur qui accusantium autem, porro perspiciatis rerum vel eos similique, maxime distinctio deleniti suscipit, illum harum? Commodi, quos quibusdam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ad fugit vel! Recusandae quos tenetur incidunt ea doloribus, quasi, illo, officia delectus quaerat non maxime ut molestiae in iste dolor sed sunt rerum quas vitae alias. Dolore ea nemo temporibus expedita id quae, necessitatibus ipsum reiciendis cupiditate delectus sit maiores. Cum vero illo nisi animi voluptate cupiditate hic aliquid ut atque fugiat quae tenetur qui accusantium autem, porro perspiciatis rerum vel eos similique, maxime distinctio deleniti suscipit, illum harum? Commodi, quos quibusdam!',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ad fugit vel! Recusandae quos tenetur incidunt ea doloribus, quasi, illo, officia delectus quaerat non maxime ut molestiae in iste dolor sed sunt rerum quas vitae alias. Dolore ea nemo temporibus expedita id quae, necessitatibus ipsum reiciendis cupiditate delectus sit maiores. Cum vero illo nisi animi voluptate cupiditate hic aliquid ut atque fugiat quae tenetur qui accusantium autem, porro perspiciatis rerum vel eos similique, maxime distinctio deleniti suscipit, illum harum? Commodi, quos quibusdam!',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ad fugit vel! Recusandae quos tenetur incidunt ea doloribus, quasi, illo, officia delectus quaerat non maxime ut molestiae in iste dolor sed sunt rerum quas vitae alias. Dolore ea nemo temporibus expedita id quae, necessitatibus ipsum reiciendis cupiditate delectus sit maiores. Cum vero illo nisi animi voluptate cupiditate hic aliquid ut atque fugiat quae tenetur qui accusantium autem, porro perspiciatis rerum vel eos similique, maxime distinctio deleniti suscipit, illum harum? Commodi, quos quibusdam!',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
