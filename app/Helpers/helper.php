<?php

use Illuminate\Support\Facades\Storage;

function makeActive($category, $output = 'active') {
    return request()->slug == $category ? $output : "";
}

function imageCheck($path)
{
    return $path ? asset(env('ADMIN_URL').'/storage'.$path) : asset('images/not_found.png');
    // return $path && file_exists(env('ADMIN_URL').'/storage'.$path) ? asset(env('ADMIN_URL').'/storage'.$path) : asset('images/not_found.png');
    // return asset(env('ADMIN_URL').'/storage'.$path);
}

function makeDirectoryIfNotExists($path)
{
    if (!Storage::exists(($path))) {
        $storage = Storage::makeDirectory($path);
    }
}

function shortHandIfOptional($value, $check, $true, $false)
{
    return ($value == $check) ? $true : $false;
}

function shortHandIf($value, $true, $false)
{
    return $value ? $true : $false;
}

function wordSplit($string) {
    $array = explode(' ',trim($string));
    return $array[0]; // will return first word
}

function presentPrice($price) {
    $price = $price /  getSettings()->currency->currency_value;
    return getSettings()->currency->currency_code. ' ' . number_format($price, 2);
}

function slugGenerator($string) {
    $output = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    $last = substr($output, -1);

    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $last)) {
        $output = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', substr_replace($output, '', -1))));
    }

    return $output;
}

function findWordFromArray($array) {
    $string =  explode(',', trim($array, '"'));
    for ($i = 0; $i <= sizeof($string); $i++) {
        return $string[$i];
    }
}

function lastPrice($price, $discount) {
    $unitDiscount = $price * $discount / 100;
    return $price - $unitDiscount;
}
