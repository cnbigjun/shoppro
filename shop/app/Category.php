<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $primaryKey='cat_id';
    public $timestamps=false;

}
