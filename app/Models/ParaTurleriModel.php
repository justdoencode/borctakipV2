<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParaTurleriModel extends Model
{
    use HasFactory;

    protected $primaryKey='para_turu_id';
    protected $table='ParaTuru';
    protected $fillable=['para_turu'];
}
