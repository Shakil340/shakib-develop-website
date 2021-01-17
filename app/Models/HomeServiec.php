<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeServiec extends Model
{
    use HasFactory;
    protected $fillable=['main_title','main_sub_title','title','content','thumbnail'];
}
