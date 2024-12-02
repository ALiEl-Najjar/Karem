<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    use HasFactory;

    protected $fillable = ['title', 'mobile_phone', 'summary']; // الحقول التي يمكن تعبئتها
}
