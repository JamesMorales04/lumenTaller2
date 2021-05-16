<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Storage;

class Controller extends BaseController
{
    public static $images = array(
        "Imagen1.png", 
        "Anyone who has never made a mistake has never tried anything new - Albert Einstein",
        "Never Stop Exploring - The North Face",
        "Be yourself; everyone else is already taken - Oscar Wilde",
        "So many books, so little time - Frank Zappa",
        "Be the change that you wish to see in the world - Mahatma Gandhi",
    );

    public function index()
    {
        $totalImages = (count(Controller::$images));
        $randomNumber = (rand(0,($totalImages-1)));
        $randomImage = Controller::$images[0];
        return response()->json(['quote' => Controller::getImage($randomImage)]);
    }
    
    public static function getImage ($imagePath)
    {
        return Storage::disk('s3')->response('Images/'.$imagePath);
    }
}
