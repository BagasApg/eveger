<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Attendee;

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

        $events = 
        [
            [
            'name' => "Rapat 1",
            'topic' => "rapat 1",
            'leader' => "Bagas",
            'start_date' => Carbon::tomorrow()
            ],
            [
            'name' => "Rapat 2",
            'topic' => "rapat 2",
            'leader' => "Jul",
            'start_date' => Carbon::yesterday()
            ],
            [
            'name' => "Rapat 1",
            'topic' => "rapat 1",
            'leader' => "Bagas",
            'start_date' => Carbon::tomorrow()
            ],
            [
            'name' => "Rapat 2",
            'topic' => "rapat 2",
            'leader' => "Jul",
            'start_date' => Carbon::yesterday()
            ]
        ];

        $attendees = 
        [
            [
                'event_id' => 1,
                'name' => "Faiz",
                'role' => "Ketua"
            ],
            [
                'event_id' => 1,
                'name' => "Samid",
                'role' => "Wakil"
            ],
            [
                'event_id' => 1,
                'name' => "Kin",
                'role' => "Sekre"
            ],
            [
                'event_id' => 2,
                'name' => "Samid",
                'role' => "Ketua"
            ],
            [
                'event_id' => 2,
                'name' => "Faiz",
                'role' => "Wakil"
            ],
            [
                'event_id' => 2,
                'name' => "Kin",
                'role' => "Bendahara"
            ]
        ];
        foreach ($events as $key => $value) {
            Event::create($value);
        }
        foreach ($attendees as $key => $value){
            Attendee::create($value);
        }
    }
}
