<?php

// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

// $connection = DB::connection();

// class CreateTablesSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//       $connection = DB::connection();
//       $connection->statement("
//         CREATE TABLE products (
//            id INT AUTO_INCREMENT PRIMARY KEY,
//            name VARCHAR(255) NOT NULL,
//            price DECIMAL(10, 2) NOT NULL,
//            quantity INT NOT NULL,
//            short_description TEXT NULL
//         )
//      ");

//      $connection->statement("
//      CREATE TABLE categories (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         name VARCHAR(255) NOT NULL
//      )
//   ");
        
//   $connection->statement("
//   CREATE TABLE category_product (
//      category_id INT NOT NULL,
//      product_id INT NOT NULL,
//      PRIMARY KEY (category_id, product_id),
//      FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE,
//      FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
//   )
// ");

//     }
// }

// commented out as 'php artisan migrate' was initially throwing errors while trying to use MySQL. my apache server was also playing up so 
// decided to use sqlite instead which seems to have done the job