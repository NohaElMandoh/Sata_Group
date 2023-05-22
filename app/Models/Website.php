<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $appends = ['title','logo','footer_dec2','footer_dec1','footer_copyrights','address'];
   
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }
    public function getLogoAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->logo_en;
        } else if (App::isLocale('ar')) {
            return $this->logo_ar;
        }
    }
    public function getFooterDec2Attribute($value)
    {
        if (App::isLocale('en')) {
            return $this->footer_dec2_en;
        } else if (App::isLocale('ar')) {
            return $this->footer_dec2_ar;
        }
    }
    public function getFooterDec1Attribute($value)
    {
        if (App::isLocale('en')) {
            return $this->footer_dec1_en;
        } else if (App::isLocale('ar')) {
            return $this->footer_dec1_ar;
        }
    }
    
    public function getFooterCopyrightsAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->footer_copyrights_en;
        } else if (App::isLocale('ar')) {
            return $this->footer_copyrights_ar;
        }
    }

    public function getAddressAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->address_en;
        } else if (App::isLocale('ar')) {
            return $this->address_ar;
        }
    }
}
