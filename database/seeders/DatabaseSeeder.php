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

        $users = [
            [
                'username' => 'myadmin',
                'password' => 'asdasdasd'
            ], 
            [
                'username' => 'bagasapg',
                'password' => 'asdasdasd'
            ]
        ];

        $events =
            [
                
            [
                'user_id' => 1,
                'name' => "Rapat 1",
                'slug' => "rapat-1",
                'topic' => "Pembahasan mengenai rapat 1 dengan bahasan rapat 1",
                'creator' => "Bagas Arianto",
                'start_date' => Carbon::yesterday()
            ],
            [
                'user_id' => 1,
                'name' => "Rapat 2",
                'slug' => "rapat-2",
                'topic' => "Pembahasan mengenai rapat 2 dengan bahasan rapat 2",
                'creator' => "Erlangga Arya",
                'start_date' => Carbon::tomorrow()
            ],
            [
                'user_id' => 1,
                'name' => "Rapat 3",
                'slug' => "rapat-3",
                'topic' => "Pembahasan mengenai rapat 3 dengan bahasan rapat 3",
                'creator' => "Hafiz Achmad",
                'start_date' => Carbon::now()
            ]
            ];

        $attendees =
            [
                [
                    'event_id' => 1,
                    'name' => "Faiz",
                    'role' => "Ketua",
                    'email' => "faizagit@eveger.com",
                    
                ],
                [
                    'event_id' => 1,
                    'name' => "Samid",
                    'role' => "Wakil",
                    'email' =>
                    "dimastri@eveger.com",
                    

                ],
                [
                    'event_id' => 1,
                    'name' => "Kinnaras",
                    'role' => "Sekre",
                    'email' =>
                    "kinnaras@eveger.com",
                    

                ],
                [
                    'event_id' => 2,
                    'name' => "Samid",
                    'role' => "Ketua",
                    'email' =>
                    "dimastri@eveger.com",
                    

                ],
                [
                    'event_id' => 2,
                    'name' => "Faiz",
                    'role' => "Wakil",
                    'email' =>
                    "faizagit@eveger.com",
                    

                ],
                [
                    'event_id' => 2,
                    'name' => "Kinnaras",
                    'role' => "Bendahara",
                    'email' =>
                    "kinnaras@eveger.com",
                    

                ]
            ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
        foreach ($events as $key => $value) {
            Event::create($value);
        }
        foreach ($attendees as $key => $value) {
            Attendee::create($value);
        }
    }
}
