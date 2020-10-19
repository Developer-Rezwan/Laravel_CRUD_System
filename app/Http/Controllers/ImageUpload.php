<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ImageUpload extends Controller
{

    public function upload(Request $file)
    {
       // $file->file('image')->getClientOriginalName();
       // return $file->file('image')->extension();

    	//$path = $file->file('image')->store('image'); //atake protected rakhar khetre use korte hobe. mane link diye access korte jeno na pare

    	$path = $file->file('image')->store('images','public'); //r public set korte ata te link diya access kora jabe
    	
        $img = Storage::url($path);
        echo "<img src='$img' >";

        return $path;

    }

    public function viewimage()
    {
    	$img = asset(Storage::url('images/hzBOdYsPrIiZZFmTBYsjZKohJlA4ls7ItXP6XJkV.png'));
    	echo "<img src='$img' >";

    }

    public function delete()
    {
        //Storage::delete("public/images/hzBOdYsPrIiZZFmTBYsjZKohJlA4ls7ItXP6XJkV.png");
        
        /**** Second way to a Image ****/

        Storage::disk('public')->delete('images/2IVrf3GeQXoObtJzvshXLEdkqZ0ox9wVbVd8cClJ.png');  // config.php er theke file system a gele dekha jabe je sekhane 3 ta disk ullekh kora ace...;
    }
}
