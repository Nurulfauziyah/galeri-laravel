<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

     protected $table ='gallery';

    protected $fillable = [
          'user_id','nama','gambar'
    ];

     public function user()
    {
        return $this->belongsTo(User::class); // Change the relationship to belongsTo User
    }
}
