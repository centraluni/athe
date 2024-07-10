<?php

$conn = mysqli_connect('localhost','root','','pearl1') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athe Dental Clinic</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">

    
    <link rel="stylesheet" href="style.css">

</head>

<body>

    
    <header class="header fixed-top">

        <div class="container">

            <a href="#home" class="logo"><span>Athe Dental Clinic</span></a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#review">review</a>
                <a href="#contact">contact</a>
            </nav>

            <a href="#contact" class="link-btn">make appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>

        </div>

    </header>
    
    
    <secttion class="home" id="home">
        <div class="content">
            <h3>let us brighten your smile</h3>
            <p>The World's Dest Dental Clinic That You Can Trust</p>

            <a href="#contact" class="link-btn">make appointment</a>
        </div>
        <div class="image">
            <img src="picture/home-bg.jpg">
        </div>

    </secttion>
   
    
    <section class="about" id="about">
        <div class="row">
            <div class="image">
                <img src="picture/about-img.jpg" alt="">
            </div>
            <section class="wb">
                <span>about us</span>
                <h3>True Health Care For Your Family</h3>
                <p>
                    
					It is very important for the customer to pay attention to the customer's needs. It prevents physical consequences
                    blinded by the most perceptive or bearing, as, great, born whence that pain, and the like, as it were
                    guilt at the time of pain. Pain, for!
                </p>
                <a href="#contact" class="link-btn">make appointment</a>
            </section>
    </section>
   
    
    <section class="services" id="services">
        <h1 class="heading">our services</h1>

        <div class="box-container container">
            <div class="box">
                <img src="picture/icon-1.svg" alt="">
                <h3>Alignment specialist</h3>
                <p>Thank you very much. And they fall with hatred, so as to find out what they want
                    for no one escapes those troubles easily, and the troubles of those who praise them,</p>
            </div>

            <div class="box">
                <img src="picture/icon-2.svg" alt="">
                <h3>Cosmetic densitry</h3>
         
            </div>

            <div class="box">
                <img src="picture/icon-3.svg" alt="">
                <h3>Oral hygiene experts</h3>
         
            </div>

            <div class="box">
                <img src="picture/icon-4.svg" alt="">
                <h3>Root canal specialist</h3>
       
            </div>

            <div class="box">
                <img src="picture/icon-5.svg" alt="">
                <h3>Live dental advisory</h3>
          
            </div>

            <div class="box">
                <img src="picture/icon-6.svg" alt="">
                <h3>Cavity inspection</h3>
         
            </div>
        </div>
    </section>
   
   
    <section class="process">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="picture/process-1.png" alt="">
                <h3>Cosmetic Density</h3>
       
            </div>
            <div class="box">
                <img src="picture/process-2.png" alt="">
                <h3>Pediatric entistry</h3>
        
            </div>
            <div class="box">
                <img src="picture/process-3.png" alt="">
                <h3>Dental Implants</h3>
                <p>we do what we do best </p>
            </div>
        </div>
    </section>
   

    <section class="review" id="review">
        <h1 class="heading">satisfied clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="picture/pic-1.png" alt="">
                <p>And they fall with hatred, so as to find out what they want
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Emma Deo</h3>
                <p>Satisfied client</p>
            </div>
            <div class="box">
                <img src="picture/pic-2.png" alt="">
                <p>Thank you very much for the good work done i can now smail well
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Shina Farnandez</h3>
                <p>Satisfied client</p>
            </div>
            <div class="box">
                <img src="picture/pic-3.png" alt="">
                <p>Thank you very much. And they fall with hatred, so as to find out what they want
                    for no one escapes those troubles easily, and the troubles of those who praise them
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>criss Josef</h3>
                <p>Satisfied client</p>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">

        <h1 class="heading">make appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php 
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">'.$message.'</p>';
                    }
                }
            ?>
            <span>your name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>

    </section>
    <section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+233 0242211242</p>
         <p>+233 0545580454</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Tema community 25, Ghana</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:09am to 9:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email address</h3>
         <p>Michealdan@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Micheal ntim</span>  </div>

</section>
   










   
    <script src="index.js"></script>
</body>

</html>