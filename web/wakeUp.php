<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 42;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Schön, dass Sie hier sind, aber hier gibt es nichts zu sehen, die Datei ist für POST Befehle gedacht";
}