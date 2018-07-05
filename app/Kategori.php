<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = array('news','infotainment','sport','politik','fashion','artikel_id');

    public $timestamps = true;

        public function Artikel()
    {
    	return $this->belongsTo('App\Artikel','artikel_id');
    }
}
