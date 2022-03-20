<?php
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: *");

   function div1($a,$b){
      $x = $a;
      $y = $b;
     
      echo $y / $x;
   }
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if($_POST['x']!=0)
      div1($_POST['x'],$_POST['y']);
      else
      echo NAN;
      }
      
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      echo "Schön, dass Sie hier sind, aber hier gibt es nichts zu sehen, die Datei ist für POST Befehle gedacht";
      }
   