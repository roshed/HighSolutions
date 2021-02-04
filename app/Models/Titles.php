<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Titles extends Model
{
    protected $table = 'titles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'id_customer',
    ];

}
