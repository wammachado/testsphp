<?php
// php filtertxt.php 
function filterMsgPerDate($pathFile, $dateIni, $dateEnd) {
   
   $file = fopen($pathFile, "r");

   if ($file) {
       $return = '';
       while (($line = fgets($file)) !== false) {
          
           $exp = explode(": ", $line, 2);
           $msgDate = $exp[0];
           $msg = $exp[1];
           
           
           $dateTimestamp = strtotime($msgDate);
           
           
           $dateIniTimestamp = strtotime($dateIni);
           $dateEndTimestamp = strtotime($dateEnd);
            // var_dump($dateEndTimestamp);exit;

           
           if ($dateTimestamp >= $dateIniTimestamp && $dateTimestamp <= $dateEndTimestamp) {
               
               $return .= "$msgDate: $msg";
           }
       }

       echo $return.PHP_EOL;
       
       fclose($file);
   } else {
       
       echo "Erro ao abrir o arquivo.".PHP_EOL;
   }
}


filterMsgPerDate('log.txt', '2024-02-01 00:00:00', '2024-02-28 23:59:59');
