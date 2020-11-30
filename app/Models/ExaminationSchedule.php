<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class ExaminationSchedule extends Model
{
    use HasFactory;
    use softDeletes;
    public function doctor(){
        return $this->belongsTo('App\Models\Doctor');
    }
    public function clinic(){
        return $this->belongsTo('App\Models\Clinic');
    }
}
