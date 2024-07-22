<?php

if (! function_exists('mapCategory')) {
    function mapCategory(int $number)
    {
        switch ($number) {
            case '1':
                return "PRZYCHODNIA";
            case '2':
                return "URZĄD MIASTA";
            case '3':
                return "PARK MIEJSKI I PARK LINOWY";
            case '4':
                return "CENTRUM HANDLOWE";
            case '5':
                return "EDUKACJA";
            case '6':
                return "SPORT";
            case '7':
                return "DWORZEC PKP";
            case '8':
                return "SZKOŁA PODSTAWOWA";
        }
    }
}