<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    protected $name = 'sudipto';

    public function returnName()
    {
        echo $this->name;
    }
    public function index()
    {
        return[
            0 =>[
                'id' =>1,
                'name' =>'arif1'
            ],
            1 =>[
                'id' =>2,
                'name' =>'arif2'
            ],
            2 =>[
                'id' =>3,
                'name' =>'arif3'
            ],
            3 =>[
                'id' =>4,
                'name' =>'arif4'
            ],
        ];
    }
}
