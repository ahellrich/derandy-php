<?php
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: *");

   function div2($a,$b){
      $x = $a;
      $y = $b;
      if($x != 0)
      echo $y / $x;
      else
      echo "undefined";
   }
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      div2($_POST['x'],$_POST['y']);
      }
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      echo "Schön, dass Sie hier sind, aber hier gibt es nichts zu sehen, die Datei ist für POST Befehle gedacht";
      }
   