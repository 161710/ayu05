<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brain extends Model
{
    protected $table = 'brains';
    protected $fillable = ['nama','email','judul','berita'];
    public $timestamps = true;

    public function Artikel()
    {
    	return $this->hasMany('App\Artikel','brain_id');
    }
}
