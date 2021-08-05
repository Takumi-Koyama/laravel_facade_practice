<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassA;
use App\Facades\FacadeClassA;

class ClassAController
{
    public function main()
    {
        // $classA = new ClassA();
        // return $classA->methodA();
        return FacadeClassA::methodA();
    }
}