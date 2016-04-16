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
    
    
    <section class="row profile">
    <div class="grid-6">
         <img src="prof1.jpg" class="info">
        
        </div><div class="grid-6" style="vertical-align:top">
        <h1 class="info">Kerrin McLaughlin</h1>
        
        <section class="info">
        <h2>Hobbies</h2>
        <ul>
        <li class="info">Design</li>
         <li class="info">History</li>   
            <li class="info">Board Games</li>
        </ul>
        
        </section>
        </div>
    
    </section>
    

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    
    <script>
        
    
        
        var source = new EventSource("SSEdata.php" );
        
        $(".info, .load").hide();
        
        source.onmessage = function(event) {
            
            
            
            console.log(event);
            
           // alert(event);
            
           $(".text").fadeOut(500);
            
         function loading() {   $(".load").fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000); };
            
            
            
           function loadProfile() {   $(".info").hide().each(function(i) {
  $(this).delay(i*700).fadeIn(500);
});}
            setTimeout(loadProfile, 7000);
            setTimeout(loading, 1000);
        };
        
   
    
    </script>
</body>
</html>
