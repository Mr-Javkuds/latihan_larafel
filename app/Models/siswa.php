<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa
{
    private static $siswa=[
        [
            "id"    =>1,
            "nis"   =>2346,
            "nama"  =>"Yasin",
            "alamat"=>"Kudus"
        ],
        [
            "id"    =>2,
            "nis"   =>2446,
            "nama"  =>"Ilham",
            "alamat"=>"Kudus"
        ],
        [
            "id"    =>3,
            "nis"   =>2546,
            "nama"  =>"Radit",
            "alamat"=>"Kudus"
        ],
        [
            "id"    =>4,
            "nis"   =>2646,
            "nama"  =>"Ibrahim",
            "alamat"=>"Kudus"
        ],
        [
            "id"    =>5,
            "nis"   =>2746,
            "nama"  =>"Sauka",
            "alamat"=>"Kudus"
        ],
        [
            "id"    =>6,
            "nis"   =>2846,
            "nama"  =>"Naufal",
            "alamat"=>"Semarang"
        ],
    ];
        public static function all(){
        return self::$siswa;
    }

}



