<?php
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: *");

   function div1($a,$b){
      $x = $a;
      $y = $b;
      if($y != 0){
      echo $x / $y;}
      else{
      echo "undefined";}
   }
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      div1($_POST['x'],$_POST['y']);
      }
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      echo "Schön, dass Sie hier sind, aber hier gibt es nichts zu sehen, die Datei ist für POST Befehle gedacht";
      }
   