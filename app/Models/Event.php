<?php

namespace App\Models;

use App\Models\Attendee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'topic',
        'creator',
        'start_date'
    ];

    public function attendees(){
        return $this->hasMany(Attendee::class);
    }
}
