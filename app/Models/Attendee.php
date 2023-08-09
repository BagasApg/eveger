<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendee extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'timestamps'
    ];

    public function event() {
        return $this->belongsTo(Event::class);
    }
}
