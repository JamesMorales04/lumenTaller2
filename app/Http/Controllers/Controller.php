<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Storage;

class Controller extends BaseController
{
    public static $images = array(
        "https://taller2-software.s3.amazonaws.com/Imagenes/Imagen"
    );

    public function index()
    {
        $randomNumber = (rand(0,(14)));
        $randomImage = Controller::$images[0].$randomNumber.".jpg";
        return view("image/image");
    }
    
}
