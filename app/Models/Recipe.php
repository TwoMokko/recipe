<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use HasFactory;
    use SoftDeletes;

    const STATE_ERROR               = 0;
    const STATE_DRAFT               = 1;
    const STATE_ACTIVE              = 2;
    const STATE_ARCHIVE             = 3;
    const STATE_DELETE              = 100;

    protected $table = 'recipes';
//    protected $guarded = [];
    protected $guarded = false;
}
