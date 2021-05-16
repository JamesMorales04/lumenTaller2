<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Storage;

class Controller extends BaseController
{
    public static $images = array(
        "https://taller2-software.s3.us-east-1.amazonaws.com/Imagenes/Imagen1.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEJv%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaCXVzLWVhc3QtMSJIMEYCIQCeVEDwfwDBTItb9qFOVl2lFloV4nTkYnjlDnXrxGGSkQIhAPGLTEdDydKuqh7Mc4Nnpd0GlwzZVVxG5a6Ob11mgFNyKocDCDQQABoMMzU4NDEyNzU5MTIwIgyt3m9R5N3Uk3TmB%2FAq5AIgDBhN5claT3iAQM%2Fhl%2FPYFrDWsGWbsG0%2BRUkdYjTRVsdzAKkoZp9jdVPIx%2BPj7D649wJjBCnQnDJ6u69LhFIGPAiCoEwm5TKB%2BWw12Vedjwa21lkY49URTD9pfccrSdLDUhq5Ia91POc9QF3OghQ1kpjRf7W3bGsBrwZmzqkVLOTMWZg4%2Fu%2FaH%2FSVTItNIKSC2%2BWChWwn77dlsl1hZrGBgxm4PASjjXACVBVTeszKMOIjNvBUisfS4Y9p6vU9xBYygj1MkN9nMmFC18SZKG%2BQ0vO1uM96689b2wHnZKlHymKGBhwdsj0GgfXw6EzMWQuQWb1lMmYTBkE1a7yV%2BJ3%2B4FZW877Zun%2Bpf%2FsyQycjRUwwJhHThTVSZQB4Xpuxfltbd%2F%2BOic%2F3yxifXfPeqv4ITjHn4YJ7BKbf5P8Kihej2zMey4Wg7W0IJs5OGlHZ3ODJJ6FBRo1eALF17p64FdC7LrlrOTCuw4WFBjqGAm244i4FqfFTHihBIbghsrmMBgGvjpVS4C5lmhd%2Fza7qzxFMEV61N9NYx2Gw0bWx0dX5JiNxsgXD1%2BP2uepslDyGKg9KyI8X1awz%2B7Ko8T99Sp8bvvSIXJS86RipuyraRNcWmTQE1lKyM63DHrKsTddDl08cy54EYwNOqcJKXHnbFT0uI%2B%2Fy00FW0h3UVBN7e%2FVEIqrb3vvhR2hqpG10iPMhKsUtUQxftBOWhbvV8AWbVxJkrgtcPIo5G4MMDB4cFOCvqFUeLyqAbN9e62VqJ%2FAv76Bs2QeBZLFmRIDo4x1vU7nuwcvF4cmkpsXtOv7E1OHJnRU3SMZLS6r1I%2BLpf9Xm%2FHD0xks%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20210516T185130Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAVG4YQWBIMFTZBXHC%2F20210516%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=05d340ead90ef43026f10813faea397304d6c0dc6dff9b3a2c3ace1a6b4c413e", 
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
        return Storage::disk('s3')->get($imagePath);
        if(Storage::exists($imagePath))
        {
            return Storage::disk('s3')->get($imagePath);
        }else
        {
            return 'No Image';
        }
    }
}
