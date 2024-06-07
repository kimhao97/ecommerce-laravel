<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"Welcome to Our Shop! We are your one-stop destination for a diverse range of products designed to meet all your needs. Whether you're looking for the latest electronics, stylish fashion, home essentials, or unique gifts, our shop has something for everyone. Our commitment to quality and customer satisfaction ensures that you receive only the best products and services. With a user-friendly website and a knowledgeable team ready to assist you, shopping with us is a hassle-free and enjoyable experience. Explore our extensive collection today and discover why we are a favorite among savvy shoppers.",
            'short_des'=>"Discover our shop, your go-to place for quality products and exceptional service. From electronics to fashion, we have it all. Shop now and enjoy a seamless shopping experience.",
            'photo'=>"image.jpg",
            'logo'=>'logo.jpg',
            'address'=>"115 Test Street, Test Country",
            'email'=>"test.co@gmail.com",
            'phone'=>"1234567777",
        );
        DB::table('settings')->insert($data);
    }
}
