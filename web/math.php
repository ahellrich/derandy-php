<?php
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: *");

   function add($a,$b){
        $x = $a;
        $y = $b;
        echo $x + $y;
   }

   function div1($a,$b){
        $x = $a;
        $y = $b;   
        if($y!=0){
            echo $x / $y;
        }
        else
            echo NAN;
    }

    function div2($a,$b){
        $x = $a;
        $y = $b; 
        if($x!=0){
            echo $y / $x;
        }
        else
            echo NAN;
     }

     function mult($a,$b){
        $x = $a;
        $y = $b;
        echo $x * $y;
     }

     function sub1($a,$b){
        $x = $a;
        $y = $b;
        echo $x - $y;
     }

     function sub2($a,$b){
        $x = $a;
        $y = $b;
        echo $y - $x;
     }


    function call_functions($op,$zahl1,$zahl2){
        switch ($op) {
            case "add":            
                add($zahl1,$zahl2);
                break;

            case "divide1":
                div1($zahl1,$zahl2);
                break;

            case "divide2":
                div2($zahl1,$zahl2);
                break;

            case "multiply":            
                mult($zahl1,$zahl2);
                break;
        
            case "subtract1":
                sub1($zahl1,$zahl2);
                break;
        
            case "subtract2":
                sub2($zahl1,$zahl2);
                break;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      call_functions($_POST['op'],$_POST['x'], $_POST['y']);
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      echo "Schön, dass Sie hier sind, aber hier gibt es nichts zu sehen, die Datei ist für POST Befehle gedacht";
    }

    