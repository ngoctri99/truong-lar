<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected $table = 'tbl_category';
    protected $primaryKey = 'id';
    use HasFactory;
}
