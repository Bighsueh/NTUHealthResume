<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietLog extends Model
{
    protected $table = 'diet_log';
    protected $fillable =
        ['id','patient_id','task_id','meal_name','quantity','img_src','remark','created_at','updated_at'];
}
