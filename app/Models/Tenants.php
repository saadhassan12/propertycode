<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    use HasFactory;
    protected $table = 'tenants';
    protected $primaryKey = 'id';
    protected $fillable = ['full_name', 'email','number','identity','image','address','occupation','place'];
}
