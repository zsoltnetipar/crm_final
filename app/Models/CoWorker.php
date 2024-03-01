<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoWorker extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function partners()
    {
        return $this->belongsToMany(Partner::class, 'co_workers_partners');
    }
}
