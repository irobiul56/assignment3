<?php

date_default_timezone_set('Asia/Dhaka');
//marraige Calculator

    function marriageAgeCal($name, $byear, $gender){

        $age = date('Y') - $byear;

        $marriage_age = '';

        switch ($gender) {
            case 'Male':
                $marriage_age =21;
                break;

            case 'Female':
                $marriage_age =18;
                break;
            
            default:
                $marriage_age =21;
                break;
        }

        if ($age >= $marriage_age) {
            return "Hi {$name}, You are now ready for marriage";
        }else{
            $wait = $marriage_age - $age;
            return "Hi {$name}, We are sorry, You are {$age} Years old, You have to wait {$wait}";
        }
    };


    
/**
 * Currency converter Basic
 */

   function currencycon($amount, $type){

    $rate = '';

    switch($type){
        case"dollar":
            return $rate = 86.02 * $amount ;
            break;
        case "euro":
            return $rate = 96.35 * $amount;
            break;
        case "pound":
            return $rate = 115.32 * $amount;
            break;
        case "riyal":
            return $rate = 22.93 * $amount;
            break;
        case "omaniriyal":
            return $rate = 223.41 * $amount;
            break;
        case" arubanflorin":
            return $rate = 47.78 * $amount;
            break;
        case "bahrainidinar":
            return $rate = 228.20 * $amount;
            break;
        case "bermudandollar":
            return $rate = 86.02 * $amount;
            break;
        case "bolivianboliviano":
            return $rate = 12.50 * $amount;
            break;
        case "bruneidollar":
            return  $rate = 63.34 * $amount;
            break;
    
    }
   }


  /**
 * Area Function
 */

 function getarea($type, $number1, $number2 = null){

    $area = '';
    $area_type = '';

    switch ($type) {
        case 'Rectangle':
            $area = $number1 * $number2;
            $area_type = 'Rectangle';
            break;

            case 'Square':
                $area = $number1 * $number1;
                $area_type = 'Square';
                break;

            case 'Tringle':
                $area = 0.5 * ($number1 * $number2);
                $area_type = 'Tringle';
                break;
            
            case 'Circle':
                $area = 3.1416 * ($number1*$number1);
                $area_type = 'Circle';
                break;
        
        default:
        $area = 'Undifiend';
        $area_type = 'Undifiend';
        break;



    }

    return "Area of this {$area_type} is {$area}";


 };




//Advance Currency Converter

function currencyconadvance($amount, $type, $typeto){

    if($type=="USD" AND $typeto=="BDT"){
        return $amount*86.19 ;
    }elseif($type=="Pound" AND $typeto=="BDT"){
        return $amount*113.24;
    }elseif($type=="USD" AND $typeto=="Euro"){
        return $amount*0.90;
    }elseif($type=="Pound" AND $typeto=="Euro"){
        return $amount*1.18;
    }
}


// Dynamic Heading
function dinamichead($title, $type, $align, $ff, $color, $upperlower, $margin){

    return "<{$type} style='text-align:{$align}; font-family:{$ff}; color:{$color}; text-transform:{$upperlower}; margin-top:{$margin}'>{$title}</{$type}>";

  }

?>

