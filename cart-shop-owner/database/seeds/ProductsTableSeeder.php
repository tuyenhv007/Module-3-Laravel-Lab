<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'Iphone X';
        $product->desc = 'Phien ban 512GB Red';
        $product->slug = \Illuminate\Support\Str::slug('Iphone X');
        $product->price = '22000000';
        $product->image = 'storage/images/iphoneX.jpg';
        $product->content = 'Chip A11 Bionic, man hinh retina';
        $product->total = '35';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Iphone XS';
        $product->desc = 'Phien ban 512GB White';
        $product->slug = \Illuminate\Support\Str::slug('Iphone XS');
        $product->price = '27000000';
        $product->image = 'storage/images/iphoneXS.jpg';
        $product->content = 'Chip A12 Bionic, man hinh retina';
        $product->total = '22';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Iphone 11 ProMax';
        $product->desc = 'Phien ban 512GB Black';
        $product->slug = \Illuminate\Support\Str::slug('Iphone 11 ProMax');
        $product->price = '34000000';
        $product->image = 'storage/images/iphone11ProMax.jpg';
        $product->content = 'Chip A13 Bionic, man hinh retina';
        $product->total = '16';
        $product->save();
    }
}
