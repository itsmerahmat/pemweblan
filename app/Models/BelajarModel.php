<?php

namespace App\Models;

use CodeIgniter\Model;

class BelajarModel extends Model
{
    protected $table = 'belajar';
    protected $primaryKey = 'id';

    public function getSource()
    {
        return [
            [
                'name' => 'Paijo',
                'email' => 'paijo@gmail.com',
                'status' => 'Active',
                'regdate' => '2022-09-01'
            ],
            [
                'name' => 'Inem',
                'email' => 'inem@gmail.com',
                'status' => 'Active',
                'regdate' => '2022-08-01'
            ],
            [
                'name' => 'Budi',
                'email' => 'budi@gmail.com',
                'status' => 'Inactive',
                'regdate' => '2022-07-15'
            ],
            [
                'name' => 'Siti',
                'email' => 'siti@gmail.com',
                'status' => 'Active',
                'regdate' => '2022-06-20'
            ],
            [
                'name' => 'Joko',
                'email' => 'joko@gmail.com',
                'status' => 'Active',
                'regdate' => '2022-05-30'
            ],
            [
                'name' => 'Tini',
                'email' => 'tini@gmail.com',
                'status' => 'Inactive',
                'regdate' => '2022-04-25'
            ],
            [
                'name' => 'Udin',
                'email' => 'udin@gmail.com',
                'status' => 'Active',
                'regdate' => '2022-03-18'
            ],
            [
                'name' => 'Rina',
                'email' => 'rina@gmail.com',
                'status' => 'Active',
                'regdate' => '2022-02-10'
            ],
            [
                'name' => 'Bagas',
                'email' => 'bagas@gmail.com',
                'status' => 'Inactive',
                'regdate' => '2022-01-15'
            ],
            [
                'name' => 'Nina',
                'email' => 'nina@gmail.com',
                'status' => 'Active',
                'regdate' => '2021-12-22'
            ],
        ];
    }
}
