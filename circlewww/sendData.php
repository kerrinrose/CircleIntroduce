
   <script src="https://cdn.pubnub.com/pubnub-dev.js"></script>

<!-- Instantiate PubNub -->
<script type="text/javascript">
    

 
    var PUBNUB_circle = PUBNUB.init({
        publish_key: **,
        subscribe_key: **
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
    $db_user = root;
    $db_password = root;
    $db_host = localhost;
    $db_name = shelflife;
// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
 echo "successfully connected!" ;  
}
  if ($_GET["profileID"]) {
    $productID = $_GET["profileID"];
 
      
$query = "SELECT 1 FROM user WHERE profileID ='$productID'";
$result = mysqli_query($conn,$query);  
      
if(mysqli_num_rows($result) == 0) {
     
    $query = "INSERT INTO user (productID) VALUES ($productID)";
    $result = mysqli_query($conn,$query);
    
    if ($result) {
     echo "added";
}
    
    else {
       echo "Error:" . $conn->error; 
    }
    
} 
      
else {
    $query = "DELETE FROM user WHERE productID='$productID'";
    $result = mysqli_query($conn,$query);
    
     if ($result) {
     echo "deleted";
}
    
    else {
       echo "Error:" . $conn->error; 
    }
    
}  
      
  echo '<script type="text/javascript">sendData("'.$productID.'");</script>';
      
      
  }
      
 $conn->close();  


?>