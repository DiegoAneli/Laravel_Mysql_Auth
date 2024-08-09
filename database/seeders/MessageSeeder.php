<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    public function run()
    {
        Message::create(['content' => 'Benvenuto nel mio sito Laravel!']);
    }
}
