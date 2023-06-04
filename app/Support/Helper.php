<?php

if (!function_exists('handleImage')) {
    function handleImage($fileImage): string
    {
        $imageName = "";

        if ($_FILES['image_url']['name']) {
            $image = $fileImage;
            $imageName = $image->getClientOriginalName();
            $image->move('images',  $imageName);
        }

        return $imageName;
    }
}

if (!function_exists('test')) {
    function test($fileImage): string
    {
       return '111122 test';
    }
}