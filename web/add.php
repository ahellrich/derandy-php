<?php
   function add($a,$b){
      $x = $a;
      echo $x;
      $y = $b;
      echo $y;
    echo $x + $y;
   }
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      add($_POST[0],$_POST[1]);
      }
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      echo "Schön, dass Sie hier sind, aber hier gibt es nichts zu sehen, die Datei ist für POST Befehle gedacht";
      }
   