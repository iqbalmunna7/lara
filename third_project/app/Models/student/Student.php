<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Student extends Model
{
    use HasFactory;
    public static $name ='Santo';
    public static $name1 ='Maruf';
    public static $name2 ='Nitu';
    public static $name3 ='Fariya';
    public static $name4 ='Mamun';

    public static  function index()
    {
        return[
            0 =>[
                'id'=>1,
                'name'=>self::$name,
                'phone'=>'018888',
                'image'=> asset('assets/img/1.jpg'),

            ],

            1 =>[
                'id'=>2,
                'name'=>self::$name1,
                'phone'=>'018888',
                'image'=> asset('assets/img/2.png'),

            ],

            2 =>[
                'id'=>3,
                'name'=>self::$name2,
                'phone'=>'018888',
                'image'=> asset('assets/img/3.jpg'),

            ],

            3 =>[
                'id'=>4,
                'name'=>self::$name3,
                'phone'=>'018888',
                'image'=> asset('assets/img/4.jpg'),

            ],

            4 =>[
                'id'=>4,
                'name'=>self::$name4,
                'phone'=>'018888',
                'image'=> asset('assets/img/11.jpg'),

            ],


        ];
    }
}


















//{
//    use HasFactory;
//
//    protected static $name = 'shanto';
//
//    public static function printName()
//    {
////        return self::name;
//        return 'self::name';
//    }
//
//
//    public static function index()
//    {
////        $this->
//
////        self::
//
//        return[
//            0 =>[
//                'id' =>1,
//                'name' =>'arif1'
//            ],
//            1 =>[
//                'id' =>2,
//                'name' =>'arif2'
//            ],
//            2 =>[
//                'id' =>3,
////                'name' =>'arif3'
//                'name' =>'arif4',
//            ],
//
//            3 =>[
//                'id' =>4,
//                'name' => Self::printName(),
//            ],
//        ];
//    }
//
//}
