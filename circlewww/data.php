<?php
require_once('composer/lib/autoloader.php');


use Pubnub\Pubnub;


	
$pubnub = new Pubnub([
    'publish_key' => 'pub-c-14a69e9f-ab2f-4db3-886f-c20a605e0104',
    'subscribe_key' => 'sub-c-c85f22a8-0340-11e6-8679-02ee2ddab7fe'
]);

 
//Subscribe to a channel, this is not async.
$pubnub->subscribe('circle', function ($envelope) {
             print_r($envelope['message']);
       });
 
// Use the publish command separately from the Subscribe code shown above. 
// Subscribe is not async and will block the execution until complete.
$name1 = $argv[1];    
  echo $name1;
 

$publish_result = $pubnub->publish('circle',$productID);
print_r($publish_result);

    
    

?>