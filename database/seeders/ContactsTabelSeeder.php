<?php

use App\Contact;
namespace Database\Seeders;

use App\Models\Contact;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class ContactsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contact::class, 10)->create();
    }
}
