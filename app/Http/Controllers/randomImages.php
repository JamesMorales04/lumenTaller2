<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ImageStorage;

class randomImages extends Controller
{
    public function index()
    {
        $randomNumber = (rand(1,(15)));
        $randomImage = Controller::$images[0].$randomNumber.".jpg";
        return view("images/image")->with("data", $randomImage);;
    }

}
