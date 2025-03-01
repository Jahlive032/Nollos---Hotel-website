<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $table = 'admins';
    protected $fillable = [
        "admin_name",
        "admin_password",
    ];
    use HasFactory;
}
