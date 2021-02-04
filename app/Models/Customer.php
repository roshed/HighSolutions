<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Customer extends Model
{

    use Sortable;
    
    protected $table = 'customer';

    protected $fillable = [
        'name',
        'gender',
        'culture',
        'born',
        'died',
        'father',
        'mother'
    ];
    public $sortable = [
    'name',
    'culture',
    'born',
    'died',
    'father',
    'mother'
    ];

    public function titles()
    {
        return $this->hasMany(Titles::class,'id_customer','id');
    }

}
