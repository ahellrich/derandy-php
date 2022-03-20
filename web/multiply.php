<?php
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: *");

   function mult($a,$b){
      $x = $a;
      $y = $b;
    echo $x * $y;
   }
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      mult($_POST['x'],$_POST['y']);
      }
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      echo "Schön, dass Sie hier sind, aber hier gibt es nichts zu sehen, die Datei ist für POST Befehle gedacht";
      }
   