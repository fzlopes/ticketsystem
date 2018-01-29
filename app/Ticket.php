<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Ticket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'status', 'problem', 'photo', 
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
