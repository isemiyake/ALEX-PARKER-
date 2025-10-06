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
    function slugify(string $text): string{
    // Strip html tags
    $text = strip_tags($text);
    // Replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // Transliterate
    setlocale(LC_ALL, 'en_US.utf8');
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // Trim
    $text = trim($text, '-');
    // Remove duplicate -
    $text = preg_replace('~-+~', '-', $text);
    // Lowercase
    $text = strtolower($text);
    // Check if it is empty
    if (empty($text)) {
        return 'n-a';
    }
    // Return result
    return $text;
}


