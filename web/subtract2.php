<?php
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: *");

   function sub2($a,$b){
      $x = $a;
      $y = $b;
    echo $y - $x;
   }
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      sub2($_POST['x'],$_POST['y']);
      }
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      echo "Schön, dass Sie hier sind, aber hier gibt es nichts zu sehen, die Datei ist für POST Befehle gedacht";
      }
   