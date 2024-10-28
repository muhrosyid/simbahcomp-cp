<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 


class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'meeting_at',
        'budget',
        'brief',
        'product_id',
    ];

    protected $cast = [
        'meeting_at' => 'date',
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
