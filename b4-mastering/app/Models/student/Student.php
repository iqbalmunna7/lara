<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $name ='santa';
    public function printNmae()
    {
        return $this->name;
    }
    public static function index ()
    {
        
        return [
            0 => [
                'id' => 1,
                'name' => 'arif',
            ],
            1 => [
                'id' => 2,
                'name' => 'jenifer'
            ],
            2 => [
                'id' => 3,
                'name' => 'Santo'
            ],
            3 => [
                'id' => 4,
                'name' => 'Maruf'
            ],
        ];
    }
}
