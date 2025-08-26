<?php

if (! function_exists('roomStatusList')) {
    function roomStatusList(int $number)
    {
        switch ($number) {
            case '1':
                return 'available';
            case '2':
                return 'reserved';
            case '3':
                return 'sold';
            case '4':
                return 'rent';
        }
    }
}
