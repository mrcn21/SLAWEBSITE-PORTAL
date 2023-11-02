<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width", initial-scale="1.0">
     <link rel="stylesheet" type="text/css" href="style.css" />
     <title>San Lorenzo Academy</title>
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
</head>
<body>

    <section class="header">
<!--NAVIGATION-->
    <nav>
        <a href="index.html"><img src="SLA LOGO.png" alt="logo"></a>
        <div class="nav-links" id="navLinks">
            <span class="fa-solid fa-xmark" onclick="hideMenu()"></span>
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="About.html">ABOUT</a></li>
                <li><a href="login.php">LORENZONIAN PORTAL</a></li>
                <li><a href="E-Library.html">E-LIBRARY</a></li>
                <li><a href="">CONTACT</a></li>
            </ul>
        </div>
        <span class="fa-solid fa-bars" onclick="showMenu()"></span>
    </nav>
<!--END OF NAVIGATION-->

<div class="text-box">
    <h1>SLA SERVE TO SUCEED</h1>
    <p>Established in 1958 by the late Senator Lorenzo Tañada.</p>
    <a href="" class="hero-btn">Visit Us To know More</a>
</div>

</section>

<!----- tañadasmessage ----->

<section class="tañadasmessage">
    <h1>Founder's Message</h1>
    <div class="row">
        <div class="tañadasmessage-col">
            <img src="Lorenzo_Tanada.jpg" width="50%" alt="Sen. Lorenzo M. Tañada">
            <p>"Without justice there can be no peace and when you take justice away, governments are no more than great robberies."</p>
            <h4>- Senator Lorenzo M. Tañada</h4>
</section>

<!------ visionmission ------>

<section class="visionmission">
    <h1>Vision and Mission</h1>

    <div class="row">
        <div class="visionmission-col">
            <h3>Vision</h3>
            <p>SLA 2028: A leading school of exellence in Academics and Character Formation producing globally competitive Lorenzonian Graduates</p>
        </div>
        <div class="visionmission-col">
            <h3>Mission</h3>
            <p>San Lorenzo Academy is a Catholic School that leads diverse learners to achieve their full potential through excellent human and Christian education</p>
        </div>
    </div>


</section>

<!-----Announcements----->

<section class="announcements">
    <h1>Announcements</h1>

    <div class="row">
        <div class="announcements-col">
           <img src="ADVISORY.jpg" alt="Advisory">
            <div class="layer">
                <h3>NO CLASSES</h3>
            </div>
        </div>
        <div class="announcements-col">
            <img src="Dismissal.jpg" alt="Dismissal">
             <div class="layer">
                 <h3>EARLY DISMISSAL</h3>
             </div>
         </div>
         <div class="announcements-col">
            <img src="LIFTING.jpg" alt="Lifting">
             <div class="layer">
                 <h3>LIFTING SUSPENSION OF CLASSES</h3>
             </div>
         </div>
    </div>
</section>

<!-----newsandevents----->
<section class="newsandevents">
    <h1>News & Events</h1>

    <div class="row">
        <div class="newsandevents-col">
            <img src="4.jpg" alt="News">
            <h3>LASSO Graduation</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipising elit. Pellentesque aliquet turpis nulla</p>
        </div>
        <div class="newsandevents-col">
            <img src="5.jpg" alt="Events">
            <h3>Buwan ng Wika</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipising elit. Pellentesque aliquet turpis nulla</p>
        </div>
        <div class="newsandevents-col">
            <img src="6.jpg" alt="News&Events">
            <h3>LCSL Election</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipising elit. Pellentesque aliquet turpis nulla</p>
        </div>
    </div>

</section>

<!----- Call To Action ----->
<section class="cta">
    <a href="" class="hero-btn">CONTACT US</a>

</section>

<!----- Footer ----->
<section class="footer">
    <h4>About Us</h4>
    <p>orem ipsum dolor sit amet, consectetur adipising elit. Pellentesque aliquet turpis nulla</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
    </div>
    <p>Copyright &copy; 2023, San Lorenzo Academy</p>
</section>


<!--------JavaScript for Toggle Menu-------->
<script>

    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }

</script>

</body>
</html>