<?php

for ($i=0;$i <= 20;$i++ ) {

    if($i < 10 && $i < 15 )continue;
    
    
    if ($i === 17) break; 
    
    echo $i.'<br>';
	
}

?>