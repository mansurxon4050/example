<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory,softDeletes;

    protected $fillable = ['name', 'address', 'phone'];

//    protected $guarded = [];

//    protected $primaryKey = 'company_id';
    public $incrementing = false;
    public $timestamps = true;
}
