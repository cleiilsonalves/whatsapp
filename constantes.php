<?php

 define("SERVERE", "192.168.2.1"); 

// echo SERVERE .'<BR>';

 define("BANCO_DE_DADOS", ['192.168.1.1', 'root', 'password', 'teste']);

 print_r(BANCO_DE_DADOS[0].'<br><br>');




 foreach(BANCO_DE_DADOS as $b ) 
 {
 	echo ($b).'<br>';
 	
 }
?>
