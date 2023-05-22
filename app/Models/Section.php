<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Section extends Model
{
    use HasFactory;
    protected $appends = ['desc','title','header_title'];
   
    public function getDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->desc_en;
        } else if (App::isLocale('ar')) {
            return $this->desc_ar;
        }
    }
    
   
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }

    
    public function getHeaderTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->header_title_en;
        } else if (App::isLocale('ar')) {
            return $this->header_title_ar;
        }
    }
}
