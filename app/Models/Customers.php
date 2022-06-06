<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'name', 'phone', 'email', 'address'];
}
