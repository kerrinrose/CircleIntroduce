<?php 

require 'autoload.php';

const DEFAULT_URL = 'https://crackling-heat-6931.firebaseio.com';
const DEFAULT_TOKEN = '';
const DEFAULT_PATH = '/firebase/example';

$firebase = new Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);


if ($_GET["profileID"]) {
    $profileID = $_GET["profileID"];
 // --- storing a string ---
$firebase->set(DEFAULT_PATH . '/name/contact002', "John Doe");
    
}



// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH . '/name/contact001');

?>