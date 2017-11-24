<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexData extends Model
{
    protected $fillable = ['keywords', 'ga_script', 'description', 'logo', 'site_name', 'title', 'subtitle'];
}
