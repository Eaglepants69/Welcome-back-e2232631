<?php 
function arrayCheck($Array, $arr_size, $sum) 
{ 
    $l;
    $r; 
  
    /* Sorteer de array */
    sort($Array); 
  
    /*check voor de 2 waardes in de array*/
    $l = 0; 
    $r = $arr_size - 1;  
    while ($l < $r) { 
        if ($Array[$l] + $Array[$r] == $sum) {
            return 1;  
        } else if ($Array[$l] + $Array[$r] < $sum) {
            $l++; 
        } else {
            $r--; 
        }
    }  
    return 0; 
} 
  
$Array = array (1, 4, 45, 12, 16, -8); 
$n = 16; 
$arr_size = sizeof($Array); 
  
// roep de functie op
if (arrayCheck($Array, $arr_size, $n)) {
    echo "In balans"; 
} else {
    echo "Niet in balans"; 
}
?> 
