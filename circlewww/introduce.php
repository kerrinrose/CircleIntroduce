<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Introduce</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
    <link href="grid.css" rel="stylesheet" type='text/css'/>
<style>

    body {
     font-family: 'Lato', sans-serif;   
       width: 90%;
        margin: 0 auto;
        font-size: 14pt;
    }
    
    header {
        height: 100px;
        width: 100%;
        padding: 20px 0px;;
    }
    
    header span {
        
     font-weight: 900;  
        font-size: 22pt;
        top: -40px;
        padding-left: 20px;
        position: relative;
    }
    
    h1 {
     font-size: 20pt;
       color: #ea615b;
    }
    
    h2 {
        
     font-size: 18pt;   
    }
    
    ul {
        
     padding-left: 15px;   
    }
    
    li {
        
     padding-bottom: 10px;   
    }
    
   
    
    .intro {
        
     text-align: center; 
        font-size: 33pt;
        color: #ea615b;
        font-weight: 600;
    }
</style>
</head>

<body>
    <header>
   <a href="introduce.html"> <img src="circlelogo-01.png" width="10%"></a>  <span>Circle Introduce: Learn all about your coworkers, effortlessly </span>
    </header>
    
    
    
    <section class="row intro">
    <div class="grid-12 text">
        
        Please Scan a Circle ID
        </div>
        
        <img src="circlelogo-01.png" class="load">
    
    </section>
    
    
    <section class="row info-049 profile-1">
    <div class="grid-6">
         <img src="prof1.jpg" class="info-1">
        
        </div><div class="grid-6" style="vertical-align:top">
        <h1 class="info-1">Kerrin McLaughlin</h1>
        
        <section class="info-1">
        <h2>Hobbies</h2>
        <ul>
        <li class="info-1">Design</li>
         <li class="info-1">History</li>   
            <li class="info-1">Board Games</li>
        </ul>
        
        </section>
        </div>
    
    </section>
    
    
        <section class="row info-2 profile-2">
    <div class="grid-6">
         <img src="prof1.jpg" class="info-2">
        
        </div><div class="grid-6" style="vertical-align:top">
        <h1 class="info-2">Rob</h1>
        
        <section class="info-2">
        <h2>Hobbies</h2>
        <ul>
        <li class="info-2">Design</li>
         <li class="info-2">History</li>   
            <li class="info-2">Board Games</li>
        </ul>
        
        </section>
        </div>
    
    </section>
    
    
        <section class="row info-3 profile-3">
    <div class="grid-6">
         <img src="prof1.jpg" class="info-3">
        
        </div><div class="grid-6" style="vertical-align:top">
        <h1 class="info-3">Chelsea McLaughlin</h1>
        
        <section class="info-3">
        <h2>Hobbies</h2>
        <ul>
        <li class="info-3">Design</li>
         <li class="info-3">History</li>   
            <li class="info-3">Board Games</li>
        </ul>
        
        </section>
        </div>
    
    </section>
    
    
        <section class="row info-4 profile-4">
    <div class="grid-6">
         <img src="prof1.jpg" class="info-4">
        
        </div><div class="grid-6" style="vertical-align:top">
        <h1 class="info-4">Nick McLaughlin</h1>
        
        <section class="info-4">
        <h2>Hobbies</h2>
        <ul>
        <li class="info-4">Design</li>
         <li class="info-4">History</li>   
            <li class="info-4">Board Games</li>
        </ul>
        
        </section>
        </div>
    
    </section>
    
    
        <section class="row info-5 profile-5">
    <div class="grid-6">
         <img src="prof1.jpg" class="info-5">
        
        </div><div class="grid-6" style="vertical-align:top">
        <h1 class="info-5">Stacy McLaughlin</h1>
        
        <section class="info-5">
        <h2>Hobbies</h2>
        <ul>
        <li class="info-5">Design</li>
         <li class="info-5">History</li>   
            <li class="info-5">Board Games</li>
        </ul>
        
        </section>
        </div>
    
    </section>
    

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- Include the PubNub Library -->
<script src="https://cdn.pubnub.com/pubnub-dev.js"></script>
    <script>
        
       var PUBNUB_circle = PUBNUB.init({
          publish_key: '**',
        subscribe_key: '**'
    });
        
        PUBNUB_circle.subscribe({
    channel: 'circle',
    message: handleMessage
});
        
        $(".info-1, .info-2, .info-3, .info-4, .info-5, .load").hide();
        
        function handleMessage(m) {
            
            
            
            console.log(m);
            
            if(m != "0") {
            
           // alert(event);
            
           $(".text").fadeOut(500);
            
         function loading() {   $(".load").fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000); };
            
            
            
           function loadProfile() {   $(".info-"+m).hide().each(function(i) {
  $(this).delay(i*700).fadeIn(500);
});}
            setTimeout(loadProfile, 7500);
            setTimeout(loading, 1000);
        };
            
        }
        
        
        
   
    
    </script>
</body>
</html>
