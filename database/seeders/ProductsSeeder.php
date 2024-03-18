<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'name' => 'Angular JS',
            'price' => 10.99,
            'description' => 'AngularJS comes as an extension to the HTML language that lets you define your own custom applications.',
        ]);

        Products::create([
            'name' => 'Node JS',
            'price' => 20.99,
            'description' => 'Node JS is omnipresent and helps with the quick migration of code across servers.',
        ]);

        Products::create([
            'name' => 'Laravel',
            'price' => 15.99,
            'description' => 'Sumanas Technologies assures visually-appealing online experience using the core competencies of the Laravel technology.',
        ]);

        Products::create([
            'name' => 'Django',
            'price' => 25.99,
            'description' => 'A high-end Python Framework that empowers smooth development and logical execution of design in a hassle-free environment.',
        ]);

        Products::create([
            'name' => 'MongoDB',
            'price' => 18.99,
            'description' => 'It is not only easy to set up and install but also comes with a ground advantage of being schema-free.',
        ]);
    }
}
