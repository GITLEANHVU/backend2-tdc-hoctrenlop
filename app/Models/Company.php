<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $primaryKey = "company_id";
    protected $table = 'companies';

    protected $with = array('trainer');
    
    public function category() {
        return $this->belongsTo("App\Models\Category", "category_id");
        // return $this->morphTo();
    }

    public function search($value) {
        return self::where('category_id', "=", $value)->paginate(10);
    }

    public function trainer() {
        return $this->hasOne(Trainer::class, 'company_id', 'company_id');
    }
}
