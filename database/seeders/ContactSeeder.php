<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Contacts::factory(10)->create()->each(function ($contact) {
            $contact->invites()->saveMany(
                \App\Models\Invite::factory(3)->make()
            );
        });
    }
}
