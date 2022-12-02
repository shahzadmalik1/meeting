<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendies extends Model
{
    protected $table      = 'attendies';
    public    $timestamps = true;
    protected $guarded = [ 'id' ];

    public function bank()
    {
        return $this->belongsTo(Meeting::class);
    }
}
