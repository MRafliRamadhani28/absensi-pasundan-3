<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $guarded = ['id'];

    public function getGender() 
    {
        $gender = '';
        if ($this->jenis_kelamin == 'l') {
            $gender = 'Laki-laki';
        } elseif ($this->jenis_kelamin == 'p') {
            $gender = 'Perempuan';
        } else {
            $gender = '-';
        }

        return [
            "jenis_kelamin" => $gender,
        ];
    }
}
