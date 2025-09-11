<?php

if (! function_exists('roomStatusCard')) {
    function roomStatusCard(int $number)
    {
        switch ($number) {
            case '1':
                return '<span class="status available">Dostępne</span>';
            case '2':
                return '<span class="status reserved">Rezerwacja</span>';
            case '3':
                return '<span class="status sold">Sprzedane</span>';
        }
    }
}
