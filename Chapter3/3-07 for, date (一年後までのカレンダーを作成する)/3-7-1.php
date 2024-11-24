<?php

for($i=1; $i<=365; $i++){
    $day = date('n/j(D)',strtotime('+'.$i.'day'));
 print($day."\n");
}

?>