<?php


if (!empty($_POST['uname'])){
    $db = new mysqli('localhost', 'plantbui_testing', 'Tin06Gal', 'plantbui_test') or die ("unable to connect");
    
    
    $sql = "INSERT INTO messageBox ( name, message ) VALUES ('{$db->real_escape_string( $_POST['uname'])}', '{$db->real_escape_string( $_POST['message'])}' )";
    $insert = $db->query($sql);
    
    /*
    //print response from MySQL
    if ($insert){
        echo "Success! Row ID {db->insert_id}";
    }
    else{
        die("Error: {$db->errno} : {$db->error}");
    }*/
    
    header('Location: index.php');
    //close the connection
    $db -> close();
}

if (!empty($_POST['email'])){
    $db = new mysqli('localhost', 'plantbui_testing', 'Tin06Gal', 'plantbui_test') or die ("unable to connect");
    
    
    $sqli = "INSERT INTO testMail ( email ) VALUES ('{$db->real_escape_string($_POST['email'])}')";
    $insert = $db->query($sqli);
    
    /*
    //print response from MySQL
    if ($insert){
        echo "Success! Row ID {db->insert_id}";
    }
    else{
        die("Error: {$db->errno} : {$db->error}");
    }*/
    
    header('Location: index.php');
    //close the connection
    $db -> close();
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vegan fitness</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="veganstyle.css">
        
    </head>
    <body>
        
        <nav class="navbar navbar-default">
          
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#myNavBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h2 class="navbar-brand logo-text" >Plant-built Fitness</h2>
                </div>
                <div class="collapse navbar-collapse" id="myNavBar">
                    <ul style="text-align: center;" class="nav navbar-nav navbar-right">
                        <li class="navbar-right-text"><a>Home</a></li>
                        <li class="navbar-right-text"><a onclick="document.getElementById('modal-wrapper').style.display='block'">Contact</a></li>
                        
                        <div id="modal-wrapper" class="modal">
  
                            <form class="modal-content animate" method="POST" action="">
                                
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                    <h1 style="text-align:center">Contact us</h1>
                                </div>
                                <div class="my-container- boxes">
                                    <input  type="text" placeholder="Name" name="uname">
                                    <textarea type="text" rows="4" cols="50" name="message" placeholder="Enter text"></textarea>

                                    <a style="background-color: blue; margin-left: 2vw" href="#" class="btn btn-info btn-lg">
                                        <button style="margin-left: 5%; width: 90%" class="btn btn-danger" type="submit">Send</button>
                                    </a>
                                </div>
                                
                            </form>
                            
                        </div>
                        
                        <div id="subscribe-button" class="modal">
  
                            <form class="modal-content animate" method="POST" action="">
                                
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('subscribe-button').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                    <h1 style="text-align:center">Subscribe</h1>
                                </div>
                                <div class="my-container- boxes">
                                    <input type="email" placeholder="Enter e-mail" name="email">
                                    <button style="margin-left: 5%; width: 90%" class="btn btn-danger" type="submit">Subscribe</button>
                                </div>
                            </form>
                            
                        </div>
                        
                        <li class="navbar-right-text"><a onclick="document.getElementById('subscribe-button').style.display='block'">Subscribe</a></li>
                    </ul>
                </div>
           
        </nav>
        
        <div>
           <img src="main_pic1.jpeg" class="img img-responsive main-pic">
            <button style="position: absolute; top:125%; left:8%">Subscribe</button>
        </div>
            
        <br>
        
        <p class="text1 slideanim">People switch to a vegan lifestyle for various reasons: to stop contributing to the unnecessary exploitation of animals, help protect the planet or simply to feel healthier and more energetic. Here, we'll tackle important questions about veganism to attain your fitness goals on a plant-based diet, whether its about packing on muscle mass and strength, losing excess fat, or simply maintaining a healthy lifestyle. </p>
        
        <hr>
        
        
          <div class="col-sm-6"  style="margin: 3vw">
               <div class="my-container shadow-effect">
                    <h2 class="slideanim sample-heading">Title Heading</h2>
                    <p class="slideanim sample-heading">Title description, date</p>
                    <img src="sample_pic1.jpg" class="img img-responsive sample-pic slideanim">
                    <p class="slideanim sample-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              
              <br>
              <div class="my-container shadow-effect">
                  <h2 class="slideanim sample-heading">Title Heading</h2>
                    <p class="slideanim sample-heading">Title description, date</p>
                    <img src="sample_pic2.jpg" class="img img-responsive sample-pic slideanim">
                    <p class="slideanim sample-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
              <br>
              <div class="my-container shadow-effect">
                  <h2 class="slideanim sample-heading">Title Heading</h2>
            <p class="slideanim sample-heading">Title description, date</p>
            <img src="sample_pic3.jpg" class="img img-responsive sample-pic slideanim">
            <p class="slideanim sample-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
        </div>

        
        <div class="col-sm-4" style="margin: 4vw;">
             <div class="slideanim shadow-effect my-container-insta">
                    <!-- InstaWidget -->
                    <a  href="https://instawidget.net/v/user/_powered_by_plants" id="link-14df4d2b97401d17e4bca6980bd8a919908bdb5ae3eac247c6d41b11b7c61ff1" class="">@_powered_by_plants</a>
                    <script src="https://instawidget.net/js/instawidget.js?u=14df4d2b97401d17e4bca6980bd8a919908bdb5ae3eac247c6d41b11b7c61ff1&width=300px"></script>
                    </div>
            
            
            <br><br>
            
            <div class="slideanim shadow-effect my-container-boxes">
                <div class="box-top">
                    <p class="box-top-text">FOLLOW ME</p>
                </div>
                <div class="box1">
                    <i onclick="openFacebook()" class="fa fa-facebook-official w3-hover-opacity"></i>
                    <i onclick="openInsta()" class="fa fa-instagram w3-hover-opacity"></i>
                    <i style="font-size:24px" class="fa">&#xf1a0;</i>
                </div>
            </div>
            
            <br><br>
            
            <form method="post" action="">
            <div class="slideanim shadow-effect my-container-boxes stick">
                        <div class="box-top">
                            <p class="box-top-text">SUBSCRIBE</p>
                        </div>
                        <div class="box1">
                            <p>Enter your email below and get notified on the latest posts!</p>
                            <p><input type="email" name="email" placeholder="Enter e-mail" style="width:100%; margin-left: 0%"></p>
                            <button type="submit" class="btn btn-danger" style="width: 100%">Subscribe</button>
                        </div>
                    </div>
                </form>
            
       
            <br><br>
        </div>
               
      
        
        <script>
            $(window).scroll(function() {
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;
                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
            
            function openFacebook(){
                window.open("https://www.facebook.com/Plant-Based-Fitness-514545222328559/?view_public_for=514545222328559");
            }
            function openInsta(){
                window.open("https://www.instagram.com/_powered_by_plants/");
            }
            
            // If user clicks anywhere outside of the modal, Modal will close
            //for contact button
            var modal = document.getElementById('modal-wrapper');
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            //For subscribe button
            var modal = document.getElementById('subscribe-button');
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </body>
</html>

