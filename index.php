<?php

$name = $_POST['name'];
$from = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];
$subject = "Recieved Mail From: '$name'";
$to = "jaysonvoorhees.13th@gmail.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers = "From: <$from> \r\n";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Portfolio</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
         <header id="header">
             <!-- <a href="" class="logo"><img src="img/logo.png" alt=""></a> -->
             <h1 class="logo">Jaysoon</h1>
            <ul>
                <li class="nav"><a href="#home" onclick="toggle()">Home</a></li>
                <li class="nav"><a href="#about" onclick="toggle()">About me</a></li>
                <li class="nav"><a href="#Skills" onclick="toggle()">Skills</a></li>
                <li class="nav"><a href="#Accounts" onclick="toggle()">Contacts</a></li>
            </ul>
            <div class="toggle" onclick="toggle()"></div>
         </header>

         <section class="banner" id="home"> 
            <h1 data-scroll>&nbsp;Hi, i'm Jayson&nbsp;<br><span>A passionate Web Developer</span></h1>
            <br>
            <div class="banner-back"></div>
         </section>
        
         <!-- ABOUT ME -->
          <section class="sec" id="about">
            <div class="content">
                <h3 class="h-about" data-scroll>About Me</span></h3>  
                <p class="description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam eveniet facilis, saepe atque culpa provident aliquam doloribus. Praesentium in voluptates dolores laborum suscipit omnis error ipsa atque! Quae, vitae dolore?
                    <div class="desc-grid">
                        <p class="desc-item">&nbsp;Name: Jayson P. Casag</p>
                        <p class="desc-item">&nbsp;Contact #: 09553540701</p>
                        <p class="desc-item">&nbsp;Birthday: February 23, 1998</p>
                        <p class="desc-item">&nbsp;Location: Quezon City</p>
                        <p class="desc-item">&nbsp;Age: 22 y/o</p>
                        <p class="desc-item">&nbsp;Degree Obtain: Batchelor's Degree</p>
                    </div>
                </p>
            </div>
            <div class="profile">
                <img src="img/profile-3.jpg" alt="Profile">
            </div>
         </section> 

        <!-- END -->

         <section class="bg-2">
         </section>

         <!-- SKILLS -->
         <section class="Skills" id="Skills">
            <div class="skill-content">
                <h1 class="line-1 anim-typewriter" data-scroll>Skill Set</h1>
            </div>

            <div class="skill-set">
                <div class="box">
                    <div class="skill-list">
                        <img src="img/icons8-html-5-500.png" alt="HTML" class="fitBg">
                    </div>
                        <div class="skill-name">
                            <h2>HTML</h2>        
                        </div>
                </div>

                <div class="box">
                    <div class="skill-list">
                        <img src="img/icons8-css3-500.png" alt="HTML" class="fitBg">
                    </div>
                        <div class="skill-name">
                            <h2>CSS</h2>        
                        </div>
                </div>

                <div class="box">
                    <div class="skill-list">
                        <img src="img/icons8-bootstrap-500.png" alt="HTML" class="fitBg">
                    </div>
                        <div class="skill-name">
                            <h2>Bootstrap</h2>        
                        </div>
                </div>

                <div class="box">
                    <div class="skill-list">
                        <img src="img/icons8-javascript-500.png" alt="HTML" class="fitBg">
                    </div>
                        <div class="skill-name">
                            <h2>Javascript</h2>        
                        </div>
                </div>

                <div class="box">
                    <div class="skill-list">
                        <img src="img/icons8-php-logo-500.png" alt="HTML" class="fitBg">
                    </div>
                        <div class="skill-name">
                            <h2>php</h2>        
                        </div>
                </div>

                <div class="box">
                    <div class="skill-list">
                        <img src="img/icons8-mysql-logo-500.png" alt="HTML" class="fitBg" style="filter: invert(1);">
                    </div>
                        <div class="skill-name">
                            <h2>MySQL</h2>        
                        </div>
                </div>
            </div>
         </section>
         <!-- END -->

        <section class="bg-2">
        </section>

         <!-- Footer -->
         <section class="footer-account" id="Accounts">
            <div class="content">
                <div class="mxw800p">
                    <h3 class="footer-header" data-scroll>Contact Me</h3>
                    <p class="footer-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, doloribus. Delectus atque quos temporibus possimus libero, dicta numquam molestias soluta?</p>
                </div>

                <div class="contactForm">
                    <form action="Email.php" method="post">
                        <div class="row100">
                            <div class="inputBx50">
                                <input type="text" id="name" name="name" placeholder="Name Here">
                            </div>

                            <div class="inputBx50">
                                <input type="text" id="email" name="email" placeholder="Email Address">
                            </div>

                            <div class="inputBx50">
                                <input type="text" id="contact" name="contact" placeholder="Contact Number">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBx100">
                                <textarea rows="5" cols="20" id="message" name="message" placeholder="Message Here"></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBx100">
                                <button type="submit" name="SendEmail" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>

                <?php 
                    if(isset($_POST['submit'])){
                        if(mail($to, $subject, $message, $headers))
                        {
                            echo "Thanks for mailing us";
                        }
                    }

                ?>

                <div class="accounts">
                    <ul>
                        <li><a href=""><img src="img/icons8-facebook-40.png" alt=""></a></li>
                        <li><a href=""><img src="img/icons8-github-40.png" alt=""></a></li>
                        <li><a href=""><img src="img/icons8-linkedin-40.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <span class="icon"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;0955-354-0701</span>
            <br>
            <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;jaysonvoorhees.13th@gmail.com</span>
            <p class="copyright">&copy; My Portfolio | Jayson P. Casag 2020</p>
         </section>
         <!-- END -->

         <!-- Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
        // <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> -->
        <script scr="./app.js"></script>
        
</body>
</html>