<?php

namespace App\Http\Controllers\Admin\Developro\Import;

use App\Http\Controllers\Controller;
use App\Imports\ExcelImportClass;
use App\Models\Property;
use Maatwebsite\Excel\Facades\Excel;

class IndexController extends Controller
{
    public function index()
    {
        $importedData = Excel::toArray(new ExcelImportClass(), public_path('import.xls'));

        $count = 0;

        foreach ($importedData as &$sheet) {

            foreach($sheet as $key => $row) {

                if($row['budynek'] == "nr 26"){

                $property = new Property();
                $property['investment_id'] = 1;

                // Set building_id in property
                $property->building_id = 3;
                $property->floor_id = $this->floor($row['pietro']);

                $property['status'] = 1;
                $property['name'] = 'Mieszkanie '.$row['nr_powierzchni'];
                $property['name_list'] = 'Mieszkanie';
                $property['number'] = $row['nr_powierzchni'];
                $property['number_order'] = $key + 1;

                $property['rooms'] = $row['pokoje'];
                $property['area'] = $row['metraz'];
                $property['price_brutto'] = (float) str_replace(' ', '', $row['cena_brutto']);
                $property['type'] = 1;

                $property['garden_area']   = null;
                $property['garden_area_2'] = null;
                $property['balcony_area']  = null;
                $property['terrace_area']  = null;

                $types  = array_map('trim', explode(';', $row['powierzchnia_dodatkowa']));
                $values = array_map('trim', explode(';', $row['powierzchnia_powierzchni_dodatkowej']));

                foreach ($types as $index => $type) {
                    $value = isset($values[$index]) ? str_replace(',', '.', $values[$index]) : null;

                    switch (mb_strtolower($type)) {
                        case 'balkon':
                            $property['balcony_area'] = (float) $value;
                            break;

                        case 'taras':
                            $property['terrace_area'] = (float) $value;
                            break;

                        case 'ogród':
                        case 'ogródek':
                            if ($property['garden_area'] === null) {
                                $property['garden_area'] = (float) $value;
                            } else {
                                $property['garden_area_2'] = (float) $value;
                            }
                            break;
                    }
                }
//
//                echo '<pre>';
//                print_r($property->toArray());
//                echo '</pre>';

                $count++;
                //$property->save();
                }
            }
        }

        echo $count;

        //return view('admin.developro.import.index', ['importedData' => $importedData[0]]);
    }

    public function building($building) {
        if (isset($building)) {
            switch ($building) {
                case 'B1':
                    return 1;
                case 'B2':
                    return 2;
                default:
                    return 0; // Return 0 for unknown buildings
            }
        }
        return 0; // Return 0 if building is not set
    }

    public function status($status) {
        if (isset($status)) {
            switch ($status) {
                case 'Sprzedane':
                    return 3;
                default:
                    return 1; // Return 0 for unknown buildings
            }
        }
        return 1; // Return 0 if building is not set
    }


//        1 => Budynek nr. 30
//         => 1 => Parter
//         => 2 => Piętro 1
//         => 3 => Piętro 2
//         => 4 => Piętro 3

//        2 => Budynek nr. 30A
//         => 5 => Parter
//         => 6 => Piętro 1
//         => 7 => Piętro 2
//         => 8 => Piętro 3

//        3 => Budynek nr. 26
//         => 9 => Parter
//         => 10 => Piętro 1
//         => 11 => Piętro 2
//         => 12 => Piętro 3

    public function floor($pietro) {
        switch ($pietro) {
            case '0':
                return 9;
            case '1':
                return 10;
            case '2':
                return 11;
            case '3':
                return 12;
            default:
                return 0;
        }
    }
}
