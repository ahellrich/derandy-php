<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "Ich bin wach";
        }
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "Schön, dass Sie hier sind, aber hier gibt es nichts zu sehen, die Datei ist für POST Befehle gedacht";
        }