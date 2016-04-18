
   <script src="https://cdn.pubnub.com/pubnub-dev.js"></script>

<!-- Instantiate PubNub -->
<script type="text/javascript">
    

 
    var PUBNUB_circle = PUBNUB.init({
        publish_key: 'pub-c-14a69e9f-ab2f-4db3-886f-c20a605e0104',
        subscribe_key: 'sub-c-c85f22a8-0340-11e6-8679-02ee2ddab7fe'
    });
    
   
     
       
    

    
    
        PUBNUB_circle.subscribe({
    channel: 'circle',
    message: function(m){console.log(m)}
});
    
    

      function sendData(data) {
         PUBNUB_circle.publish({
            channel: 'circle',
            message: data
          }); 
        
    
    }           
           
             
         


</script>


<?php
  
  if ($_GET["profileID"]) {
    $productID = $_GET["profileID"];
 
      

      
    
  echo '<script type="text/javascript">sendData("'.$productID.'");</script>';
      
      
  }
      



?>