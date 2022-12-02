<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meeting extends Model
{
    protected $table      = 'meeting';
    public    $timestamps = true;
    protected $guarded = [ 'id' ];
    use SoftDeletes;

    public function attendies()
    {
        return $this->hasMany(Attendies::class, 'meeting_id', 'id');
    }
}
