<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeServiceSubTitle extends Model
{
    use HasFactory;



    protected $fillable=['name','status','home_services_id'];
    public function shakil(){
        return  $this->belongsTo(HomeService::class,'home_services_id')->where('status',1);
    }
}
