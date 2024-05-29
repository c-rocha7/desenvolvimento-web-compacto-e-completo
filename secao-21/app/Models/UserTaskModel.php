<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTaskModel extends Model
{
    use HasFactory;

    protected $table = 'users_tasks';
}
