<?php

namespace Database\Seeders;

use App\Models\CategoryDocument;
use App\Models\Documents;
use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      //   User::factory(1)->create();
      $categories = [
         [
            'name' => 'Peraturan',
            'slug' => 'peraturan'
         ],
         [
            'name' => 'Umum',
            'slug' => 'umum'
         ]
      ];

      foreach ($categories as $category) {
         CategoryDocument::create($category);
      }
      Documents::factory(100)->create();
      Event::factory(10)->create();
   }
}
