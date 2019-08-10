<?php
require_once 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;


$image = Image::make('ioga.png');
$image->rotate(45);
$image->text('loftschool', $image->width()/2, $image->height()/2, function ($font){
    $font->size(184);
    $font->color('000');
    $font->align('center');
    $font->valign('center');
})->save('new.jpg');
