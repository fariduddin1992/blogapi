<?php

namespace App\Helpers;

use Image;
use Request;
use File;

class ImageUploadHelper
{

  /**
  * [upload description]
  * @param  [type] $image           [request for image or not]
  * @param  [type] $file            [image file]
  * @param  [type] $name            [file name]
  * @param  [type] $target_location [image location]
  * @return [type]                  [filename]
  */
  public static function upload($image, $file, $name, $target_location)
  {
    if (Request::hasFile($image)) {
      // $target_location = $target_location;
      $filename = $name . '.' . $file->getClientOriginalExtension();
      $location = ($target_location.'/'.$filename);

      if(strpos($target_location, 'teachers') || strpos($target_location, 'administrators') || strpos($target_location, 'employees')) {
        Image::make($file)->resize(500, 500)->save($location);
      }
      else{
        Image::make($file)->save($location);
      }
      return $filename;
    }
  }


  /**
  * [upload description]
  * @param  [type] $image           [request for image or not]
  * @param  [type] $file            [image file]
  * @param  [type] $name            [file name that will save in database]
  * @param  [type] $target_location [image location]
  * @return [type]                  [filename]
  */
  public static function updateImage($image, $file, $name, $target_location, $old_location){
    if(Request::hasFile($image)){
      $filename = $name. '.'.$file->getClientOriginalExtension();

      File::delete($target_location.'/'.$old_location);

      // $location = public_path($target_location.'/'.$filename);
      $location = ($target_location.'/'.$filename);
        Image::make($file)->save($location);
      return $filename;
    }
  }

  /**
  * [delete image]
  * @param  [type] $file            [filename]
  * @param  [type] $target_location [image name with location]
  * @return [type]                  [null]
  */
  public static function deleteImage($target_location)
  {
    if (File::exists($target_location)) {
      File::delete($target_location);
    }
  }


  public static function updateProfilePicture($image, $file, $name, $target_location, $old_location){
    // $target_location = '\\'.$target_location.'\\';
    File::delete($target_location.'/'.$old_location);

    $filename = $name.'.'.$file->getClientOriginalExtension();

    $location = ($target_location.'/'.$filename);
    Image::make($file)->resize(500,500)->save($location);
    return $filename;
  }



  public static function updateCV($f, $file, $name, $target_location, $old_location){
    if(Request::hasFile($f)){

      //delete the old cv file
      if (File::exists("files/$old_location")) {
        File::delete("files/$old_location");
      }

      $filename = $name. '.' .$file->getClientOriginalExtension();
      $extension = $file->getClientOriginalExtension();
      if ($extension == 'pdf' || $extension == 'PDF') {
        $file->move($target_location, $filename);
      }
      return $filename;
    }
  }

}
