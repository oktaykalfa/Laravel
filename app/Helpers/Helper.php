<?php


namespace App\Helpers;


class Helper
{

    public static function dateToTurkish($data)
    {
        return date('d.m.Y H:i', strtotime($data));

    }

    public static function dateToEnglish($data)
    {
        return date('Y-m-d H:i', strtotime($data));
    }

}