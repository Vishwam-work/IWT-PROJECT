<?php
session_start();
error_reporting(E_ALL ^ E_WARNING); 

// $email='';
// $email=$_SESSION['email'];
// if($email){
//     echo"";
// }
// else{
//     echo"";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh in BOX</title>
    <!-- Logo -->
    <link rel="icon" href="images/Delivery Food Service Logo.png">

    <!-- Font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Style.css -->
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>


    <section class="header">
        <nav>

            <h4><a href="#">Get the APP</a></h4>
            <div class="nav-links " id="navbar">
                <i class='bx bx-window-close' onclick="closemenu()"></i>
                <ul class="nav nav-pills nav justify-content-center">

                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="admin_page.php">Log in </a> -->
                        <?php if($_SESSION['email']){
                       echo" <a class='nav-link' href='logout.php'>Log Out </a>";
                        }else{
                            echo" <a class='nav-link' href='admin_page.php'>Log In </a>";
                        }
                        ?>
                    </li>
        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="user_order.php">Order now</a>
                    </li>
                </ul>

            </div>
            <i class='bx bx-menu' onclick="showmenu()"></i>

        </nav>
        <div class="text-box">
            <label for="search-bar">Search</label>
            <input type="text" id="search-bar" placeholder="Search for restrauant,cafe or a dish">
        </div>
    </section>


    <section class="features">
        <h3>We offers</h3>
        <div class="cards">
            <div class="detail-card">
                <img src="images/online-food.jpg" alt="">
                <h3>Order-online</h3>

            </div>

            <div class="detail-card">
                <img src="images/dining.jpg" alt="">
                <h3>Outside-dining</h3>

            </div>

            <div class="detail-card">
                <img src="images/plus.jpg" alt="">
                <h3>plus and pro</h3>

            </div>
            <div class="detail-card">
                <img src="images/nightlife.jpg" alt="">
                <h3>Nightlife and club</h3>
            </div>
        </div>
    </section>

    <section class="catagory">
        <h3>Categories</h3>
        <div class="cat-dis">
            <div class="food-course">
                <div class="photo">
                    <img src="images/stater.jpg" alt="">
                </div>
                <div class="food-dis">
                    <h2>Stater</h2>
                    Starters come in a wide variety and may be served hot (vol-au-vents, soufflés) or cold (cold cuts,
                    pâtés). However, as part of a formal dinner, they may be served after the soup or the hors
                    doeuvres. In this case, the starter is therefore no longer the first dish of a meal, but comes
                    second or third in the sequence of courses.
                </div>

            </div>
            <div class="food-course" id="maincourse">
                <div class="food-dis">
                    <h2>Main course</h2>
                    The main course is the primary dish of food served for lunch or dinner. It is also known by the name
                    of Entree in many countries. From an Indian context, the main course includes curries, dry
                    vegetables, dal or lentils, rice and various types of breads.
                </div>
                <div class="photo">
                    <img src="images/maincourse.jpg" alt="">
                </div>
            </div>
            <div class="food-course">
                <div class="photo">
                    <img src="images/desert.jpg" alt="">
                </div>
                <div class="food-dis">
                    <h2>Desert</h2>

                    Dessert is a course that concludes a meal. The course consists of sweet foods, such as confections,
                    and possibly a beverage such as dessert wine and liqueur
                </div>
            </div>
        </div>

    </section>
    <section class="contact">
        <div class="cont container">
            <div class="contact-text">
                <h2>Contact us</h2>
                <p>Drop your inquiry here and our experts will get back to you.</p>
                <h6>Address</h6>
                <p class="address">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, rerum.
                </p>
                <h6>Email</h6>
                <p class="mail">freshinbox@gmail.com</p>
            </div>
            <div class="contact-form">
                <form>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="5" required></textarea>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </section>


    <script>
        let navlinks = document.getElementById("navbar")
        const showmenu = () => {
            navlinks.style.right = "0";
        }
        const closemenu = () => {

            navlinks.style.right = "-500px";

        }






    </script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>