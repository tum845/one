<?php

namespace App\Utilities;

class Copyright
{

    public static function displayNotice()
    {

        $date = date('Y') > 2017 ? date ('Y') : 2017;


        return '&copy ' . $date . ' Tumbas.in All rights Reserved.';


    }

}