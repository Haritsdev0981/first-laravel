<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $guarted = [];

    public function kelas(){
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}
