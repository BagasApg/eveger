<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $admin = [
            [
                'name' => "rapat 1",
                'topic' => "tentang rapat 1",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
            [
                'name' => "rapat 2",
                'topic' => "tentang rapat 2",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
            [
                'name' => "rapat 2",
                'topic' => "tentang rapat 2",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
            [
                'name' => "rapat 2",
                'topic' => "tentang rapat 2",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
            [
                'name' => "rapat 2",
                'topic' => "tentang rapat 2",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
            [
                'name' => "rapat 2",
                'topic' => "tentang rapat 2",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
            [
                'name' => "rapat 2",
                'topic' => "tentang rapat 2",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
            [
                'name' => "rapat 2",
                'topic' => "tentang rapat 2",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
            [
                'name' => "rapat 2",
                'topic' => "tentang rapat 2",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
            [
                'name' => "rapat 2",
                'topic' => "tentang rapat 2",
                'leader' => "julkipser",
                'start_date' => Carbon::now()
            ],
        ];

        foreach ($admin as $key => $value) {
            Event::create($value);
        }
    }
}
