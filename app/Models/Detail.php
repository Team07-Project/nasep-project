<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPictdenahAttribute()
    {
        return asset('storage/'. $this->denah);
    }
    public function getPictsejarahAttribute()
    {
        return asset('storage/'. $this->sejarah);
    }
    public function getPictmaklumatAttribute()
    {
        return asset('storage/'. $this->maklumat);
    }
}
