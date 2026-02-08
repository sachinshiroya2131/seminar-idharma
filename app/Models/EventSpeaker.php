<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventSpeaker extends Model
{
    //

    protected $guarded = ['id'];
    protected $fillable = [];

    public function speaker()
    {
        return $this->belongsTo(User::class, 'user_id')->where('role', 'speaker');
    }
}
