<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$productID = $_GET["productID"];


if($productID > 10) {
    
    
sendData("hi");

    
}

else {
    
 sendData("bye");   
}

function sendData($time) {
echo "data: {$time}\n\n";};
flush();
?>

