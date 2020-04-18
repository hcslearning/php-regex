<?php

$file 	= "DTE_Recibidos_76809155_TpoDoc33_FecDesde2017-01-01_pszFecHasta2017-12-31_2020-03-12.xml";
$patron = "/.*FecDesde(....-..-..).*FecHasta(....-..-..).*xml/";

preg_match($patron, $file, $matches);

print_r( $matches );



