


<html>
<head><title></title></head>
    
    <body>
    
        
    

    
    <script src="https://cdn.pubnub.com/pubnub-dev.js"></script>

<!-- Instantiate PubNub -->
<script type="text/javascript">
    

 
    var PUBNUB_circle = PUBNUB.init({
        publish_key: '**',
        subscribe_key: '**'
    });
    
   
     
       
    
    function sendData(data) {
         PUBNUB_circle.publish({
            channel: 'circle',
            message: data
          }); 
        
    
    }
    
    
        PUBNUB_circle.subscribe({
    channel: 'circle',
    message: function(m){console.log(m)}
});
    
    

             
           
             
         


</script>
    
        
        <?php
    
      if ($_GET["profileID"]) {
    $profileID = $_GET["profileID"];
          echo $profileID;
 
    ?> <script>sendData("<?php echo $profileID ?>");</script><?php
    
} ?>
        
    </body>


</html>



