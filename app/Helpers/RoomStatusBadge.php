<?php

if (! function_exists('roomStatusBadge')) {
    function roomStatusBadge(int $number)
    {
        switch ($number) {
            case '1':
                return 'DOSTĘPNE';
            case '2':
                return 'REZERWACJA';
            case '3':
                return 'SPRZEDANE';
            case '4':
                return 'WYNAJĘTE';
        }
    }
}
