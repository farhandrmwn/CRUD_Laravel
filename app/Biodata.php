<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = ['nis','namaSiswa','rombelSiswa','jkSiswa', 'alamatSiswa'];
}
