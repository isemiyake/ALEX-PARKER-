<?php 
//Truncate texte
    namespace Core\Helpers;
 function truncate (string $string,int $lg_max=150):string {
    if (strlen($string) > $lg_max):
    $string = substr($string, 0, $lg_max);
    $last_space = strrpos($string, " ");
    return substr($string, 0, $last_space)."...";
    endif;
    return $string;
    }
    function formate(string $dateString, string $format = "M d, Y"): string {
    $date = date_create($dateString);  
    return $date ? date_format($date, $format) : ""; 
    }
     function format(string $dateString, string $format = "Y-m-d"): string {
    $date = date_create($dateString);  
    return $date ? date_format($date, $format) : ""; 
    }

