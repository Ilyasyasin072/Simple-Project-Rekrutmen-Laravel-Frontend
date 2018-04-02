<?php

use Illuminate\Database\Seeder;
use Database\CommentTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Eloquent::unguard();
      $this->call('CommentTableSeeder');
    }
}
