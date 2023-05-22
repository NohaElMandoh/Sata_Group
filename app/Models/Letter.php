<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Letter extends Model
{
    use HasFactory;
    protected $appends = ['name','position','message'];
   
    public function getNameAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->name_en;
        } else if (App::isLocale('ar')) {
            return $this->name_ar;
        }
    }
    
   
    public function getPositionAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->position_en;
        } else if (App::isLocale('ar')) {
            return $this->position_ar;
        }
    }

    public function getMessageAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->message_en;
        } else if (App::isLocale('ar')) {
            return $this->message_ar;
        }
    }
}
