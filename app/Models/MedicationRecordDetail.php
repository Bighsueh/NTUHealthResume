<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicationRecordDetail extends Model
{
    protected $table = 'medication_record_detail';
    protected $fillable =
        [
            'detail_id',
            'indication',
            'category',
            'trade_name',
            'generic_name',
            'dose',
            'routes',
            'freq',
            'pres_day',
            'total_amount',
            'note',
            'created_at',
            'updated_at'
        ];
}
