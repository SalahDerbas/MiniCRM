<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{ 
    protected $fillable=['name' , 'email' ,'logo' , 'website' ];
    protected $table = 'companies';
    public $timestamps = true;
}
