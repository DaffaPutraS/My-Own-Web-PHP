<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dapskuy</title>

    <!--- Bootstrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- CSS Link-->
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- Icon Title Link-->
    <link rel="Icon" href="image/logo-dapskuy.png" type="image/x-icon">

    <!-- Font Awesome CDN Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
    
    <!-- HEADER STARTS -->
    <header class="header">
        <section class="flex">
            <a href="#home" class="logo"><img src="image/logo-dapskuy-neww.png" alt="Logo"></a>
            <nav class="navbar">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
            </nav>
            <div class="button-contact-header">
                <a href="#contact">Contact</a>
            </div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
    </header>
    <!-- HEADER ENDS -->

    <!-- HOME STARTS -->
    <div class="home" id="home">
        <div class="home-left">
            <p><?php echo "Hi, my name is"; ?></p>
            <h3><?php echo "Daffa Putra Setyatama"; ?></h3>
            <h4><?php echo "I'm Sofware Engineer & Front-End Developer"; ?></h4>
            <h5><?php echo "i'm a Depok-based software engineer who specializes in building (and occasionally designing).Sometimes I enjoy designing <span>software interfaces and websites</span> where user experience is also considered."; ?></h5>

        </div>
        <div class="home-right">
            <img src="image/foto-sendiri-fix.jpg" alt="my picture">
        </div>
    </div>
    <!-- HOME ENDS -->

    <!-- ABOUT STARTS -->
    <div class="title-about" id="about">
        <h3><?php echo "About"; ?></h3>
    </div>
    <div class="about">
        <div class="about-vektor">
            <img src="image/vektor-about.png" alt="picture about">
        </div>
        <div class="about-description">
            <p>I live in Depok city and I am a student at Jakarta State Polytechnic and CCIT FTUI. My daily activities and hobbies include Coding, Playing Games, and occasionally playing basketball.<br>
                Some of the programming languages I use are:<br>
                • Java <br>
                • Javascript<br>
                • HTML<br>
                • CSS<br>
            </p>
        </div>
    </div>
    <!-- ABOUT ENDS -->

    <!-- CONTACT STARTS -->
    <div class="contact-title" id="contact">
        <h3><?php echo "Contact"; ?></h3>
    </div>
    <div class="contact">
        <div class="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
            <h3><?php echo "081313185909"; ?></h3>
        </div>
        <div class="email">
            <i class="fa-regular fa-envelope"></i>
            <h3><?php echo "daffap434@gmail.com"; ?></h3>
        </div>
        <div class="linkedin">
            <i class="fa-brands fa-linkedin"></i>
            <h3><? echo "Daffa Putra Setyatama"; ?></h3>
        </div>
        <div class="github">
            <i class="fa-brands fa-github"></i>
            <h3><?php echo "DaffaPutraS"; ?></h3>
        </div>
    </div>
    <!-- CONTACT ENDS -->

</body>
</html>