<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
         protected $table = 'artikels';
         protected $fillable = ['judul','gambar','berita','tanggal','brain_id'];
         public $timestamps = true;
    
        public function Brain()
        {
            return $this->belongsTo('App\Brain','brain_id');
        }
    
        public function Kategori()
        {
            return $this->hasOne('App\Kategori','kategori_id');
        }

        public function Komentar() 
        {
            return $this->belongsToMany('App\Komentar', 'artikomens', 'artikel_id', 'komentar_id');
        }
    }
