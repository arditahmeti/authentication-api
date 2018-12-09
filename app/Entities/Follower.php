<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender_id','receiver_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function follower()
    {
        return $this->belongsTo('App\Entities\User','sender_id');
    }

    public function followed()
    {
        return $this->belongsTo('App\Entities\User','receiver_id');
    }
}
