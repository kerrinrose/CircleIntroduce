<?php
require_once('composer/lib/autoloader.php');


use Pubnub\Pubnub;


	
$pubnub = new Pubnub([
    'publish_key' => '**',
    'subscribe_key' => '**'
]);

 
//Subscribe to a channel, this is not async.
$pubnub->subscribe('circle', function ($envelope) {
             print_r($envelope['message']);
       });
 
// Use the publish command separately from the Subscribe code shown above. 
// Subscribe is not async and will block the execution until complete.
if ($_GET["profileID"]) {
    $productID = $_GET["profileID"];
 

$publish_result = $pubnub->publish('circle',$productID);
print_r($publish_result);

    
    
}
?>