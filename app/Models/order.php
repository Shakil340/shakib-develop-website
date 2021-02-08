<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['user_id','service_id','time','amount','description','status','thumbnail','deleted_at'];


    public function service(){
        return $this->belongsTo(service::class);
    }
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }

}
