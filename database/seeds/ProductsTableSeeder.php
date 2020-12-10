<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        Product::create([
            'name' => 'Laptop 1',
            'slug' => 'laptop',
            'details' => ' inch, TB SSD, 32GB RAM',
            'price' => rand(149999, 249999),
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!'
        ]);
        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop2',
            'details' => ' inch, TB SSD, 32GB RAM',
            'price' => rand(149999, 249999),
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!'
        ]);
        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop3',
            'details' => ' inch, TB SSD, 32GB RAM',
            'price' => rand(149999, 249999),
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!'
        ]);
        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop4',
            'details' => ' inch, TB SSD, 32GB RAM',
            'price' => rand(149999, 249999),
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!'
        ]);
        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'laptop5',
            'details' => ' inch, TB SSD, 32GB RAM',
            'price' => rand(149999, 249999),
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!'
        ]);
        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'laptop6',
            'details' => ' inch, TB SSD, 32GB RAM',
            'price' => rand(149999, 249999),
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!'
        ]);
    }
}
