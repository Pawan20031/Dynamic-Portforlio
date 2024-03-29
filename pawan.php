<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MY PORTFORLIO</title>
    <link rel="stylesheet" href="pawan.css">
    <!-- <link rel="stylesheet" media="screen and (max-width:980px)" href="style.css"> -->

    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <!-- <script src="pawan.js"></script> -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</head>

<body>

    <!-- backend php -->
    <?php
    $a = "";
    $b = -2;
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    }
    if (isset($_POST['submit'])) {
        $submit = $_POST['submit'];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $a = "ERROR! Please Enter your Name";
            $b = 0;
        } else if (empty($_POST['email'])) {
            $a = "ERROR! Please Enter your Email";
            $b = 0;
        } else if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $a = "ERROR! Please Enter your correct Name";
            $b = 0;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $a = "ERROR! Please Enter your correct Email";
            $b = 0;
        } else {
            $con = mysqli_connect("localhost:3307", "root", "", "portforlio");
            if ($con) {

                $sql = "INSERT INTO `portforlio`.`portforlio` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";

                if ($con->query($sql) == true) {
                    $b = 1;
                } else {
                    $a = "error: $sql";
                    $b = 0;
                }
            } else {
                $a = "eroorr";
                $b = 0;
            }
            $con->close();
        }
    }
    ?>


    <nav class="sticky" id="sticky">
        <header class="header background" id="header">
            <!-- <h1 class="logo">Pawan Kumar</h1> -->
            <!-- <img src="https://media.istockphoto.com/id/1300512215/photo/headshot-portrait-of-smiling-ethnic-businessman-in-office.jpg?b=1&s=170667a&w=0&k=20&c=TXCiY7rYEvIBd6ibj2bE-VbJu0rRGy3MlHwxt2LHt9w=" alt="logo" class="logo" /> -->
            <img src="My Portforlio/pawank.png" alt="logo" class="logo" />
            <nav class="navbar">
                <ul class="navbarlist">
                    <li>
                        <a href="#home" rel="noopener noreferrer">Home</a>
                    </li>
                    <li>
                        <a href="#about" rel="noopener noreferrer">About</a>
                    </li>
                    <li>
                        <a href="#services" rel="noopener noreferrer">Services</a>
                    </li>
                    <li>
                        <a href="#project" rel="noopener noreferrer">Projects</a>
                    </li>
                    <li>
                        <a href="#contact" rel="noopener noreferrer">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="mobile-navbar-btn" id="mobile" onclick="toggleNav()">
                <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
            </div>
        </header>
    </nav>
    <main id="home">
        <section class="section-hero response background">
            <div class="hero">
                <p class="mynameis">
                    My Name is<br />
                <h1 class="pawan" id="pawan" onmouseout="hoverout()" onmouseover="hover()">PAWAN KUMAR</h1>
                <div class="passion">
                    <p>A Computer Science Student Passionate About Programming and Design.</p>
                </div>

                <div class="button">
                    <a href="My Portforlio/rresume_sample.pdf" target="_blank" download="resume.pdf"><button class="btn">Download Resume</button> </a>
                    <a href="mailto:pawank@gmail.com" rel="noopener noreferrer"><button class="btn">Contact Me</button></a>
                </div>
                </p>
                <div class="responsiveimage">
                    <div class="responsivephoto ">
                        <img src="My Portforlio\pic2.jpg" alt="my photo" srcset="" class="pic reponsivepic" />
                    </div>
                </div>

            </div>
            <div class="photo ">
                <img src="My Portforlio\pic2.jpg" alt="my photo" srcset="" class="pic" />
            </div>
        </section>
    </main>

    <section class="aboutme background" id="about">

        <div class="abtpic"><img src="My Portforlio/pic1.jpg" alt="my photo" srcset="">
        </div>
        <div class="abtcontent">

            <h1 class="big">About Me</h1>
            <p> I am a Second year undergraduate student of the Department of Computer Science and Engineering, <a class="nsit" href="http://www.nsut.ac.in/en/home" target="_blank" rel="noopener noreferrer"> Netaji Subhash University Of Technology ,New Delhi, India.</a> I was born in Delhi , India . <br><br>
                I was fortunate enough to know from a young age that I wanted to be an engineer. The engineering way of thinking came naturally to me. What I didn't know was what type of engineer I wanted to be. When push came to shove, I chose Software Engineering..</p>

            <nav class="abtnav">

                <ul>
                    <li class="abc" onclick="over()" id="skills">Skills</li>
                </ul>

            </nav>

            <div class="skills" id="abc">

                <b>Languages: </b> C/C++, Python, SQL, JavaScript.
                <br>
                <br>
                <b>Web Development: </b> HTML, CSS, JavaScript.
                <br>
                <br>
                <b>App Development: </b> Java , Xml .
                <br>
                <br>
                <b>Developer Tools: </b> Android Studio, MySQL, VS Code, Visual Studio, Code Blocks, Python IDLE.
                <br>
                <br>
                <b>Additional: </b> Data Structures and Algorithms, DBMS.
                <br>
                <br>

            </div>


        </div>
        </div>


    </section>
    <section class="languages background">
        <div class="blocks">
            <h1 class="prog">Programming Languages</h1>
        </div>
        <div class="programming">
            <div class="firstdiv inline">
                <a href="https://developers.google.com/edu/c++" target="_blank" style="text-decoration: none; color:black;" rel="noopener noreferrer">
                    <div class="cpp divinline">
                        <img src="My Portforlio/c-logo.png" alt="" srcset="" class="imginline">
                        <hr>
                        <p>
                        <h1>C++ Programming </h1>
                        </p>

                    </div>
                </a>
                <a href="https://devdocs.io/c/" target="_blank" style="text-decoration: none; color:black;" rel="noopener noreferrer">
                    <div class="c divinline">
                        <img src="My Portforlio/c.png" alt="" srcset="" class="imginline">
                        <hr>
                        <p>
                        <h1>C Programming </h1>

                        </p>
                    </div>
                </a>
                <a href="https://developers.google.com/docs/api/quickstart/python" target="_blank" style="text-decoration: none; color:black;" rel="noopener noreferrer">
                    <div class="python divinline">
                        <img src="My Portforlio/python.png" class="imginline" alt="" srcset="">
                        <p>
                        <h1>Python Programming </h1>

                    </div>
                </a>
            </div>


            <div class="seconddiv inline">
                <a href="https://cloud.google.com/java/docs" target="_blank" style="text-decoration: none; color:black;" rel="noopener noreferrer">
                    <div class="java divinline">
                        <img src="My Portforlio/java.png" alt="" srcset="" class="imginline">
                        <hr>
                        <p>
                        <h1>Java Programming </h1>

                        </p>
                    </div>
                </a>
                <a href="https://developers.google.com/apps-script/guides/html" target="_blank" style="text-decoration: none; color:black;" rel="noopener noreferrer">
                    <div class="html divinline">
                        <img src="My Portforlio/html.png" class="imginline" alt="" srcset="">
                        <hr>
                        <p>
                        <h1>HTML Programming </h1>

                        </p>
                    </div>
                </a>
                <a href="https://developers.google.com/apps-script/add-ons/guides/css" target="_blank" style="text-decoration: none; color:black;" rel="noopener noreferrer">
                    <div class="css divinline">
                        <img src="My Portforlio/css.png" class="imginline" alt="">
                        <hr>
                        <p>
                        <h1>CSS Programming </h1>

                        </p>
                    </div>
                </a>
            </div>
            <div class="thirddiv inline">
                <a href="https://developers.google.com/docs/api/quickstart/js" target="_blank" style="text-decoration: none; color:black;" rel="noopener noreferrer">
                    <div class="js divinline">
                        <img src="My Portforlio/js.png" class="imginline" alt="">
                        <hr>
                        <p>
                        <h1>JavaScript Programming </h1>

                        </p>
                    </div>
                </a>
                <a href="https://cloud.google.com/sql/docs/mysql" target="_blank" style="text-decoration: none; color:black;" rel="noopener noreferrer">
                    <div class="mysql divinline">
                        <img src="My Portforlio/mysql.png" alt="" srcset="" class="imginline">
                        <hr>
                        <p>
                        <h1>MySql Programming </h1>

                        </p>
                    </div>
                </a>
                <a href="https://cloud.google.com/php/docs" target="_blank" style="text-decoration: none; color:black;" rel="noopener noreferrer">
                    <div class="php divinline">
                        <img src="My Portforlio/php.png" alt="" srcset="" class="imginline">
                        <hr>
                        <p>
                        <h1>PHP Programming </h1>

                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section id="services" class="services background">
        <div class="develop">
            <h1 class="developskills">Development Skills</h1>
        </div>
        <div class="sub">


            <div class=" dev">

                <img src="My Portforlio/webd.png" alt="" srcset="">
                <div class="webd">
                    <h1>
                        Web Development</h1>
                    <ul>
                        <li>
                            <h2>HTML</h2>
                        </li>
                        <li>
                            <h2>CSS</h2>
                        </li>
                        <li>
                            <h2>JAVASCRIPT</h2>
                        </li>
                        <li>
                            <h2>PHP</h2>
                        </li>
                        <li>
                            <h2>MYSQL</h2>
                        </li>

                    </ul>
                    <p></p>
                </div>

            </div>
            <div class=" dev">

                <img src="My Portforlio/app.png" alt="" srcset="">
                <div class="webd">
                    <h1>App Development</h1>
                    <ul>
                        <li>
                            <h2>ANDROID STUDIO</h2>
                        </li>
                        <li>
                            <h2>JAVA</h2>
                        </li>
                        <li>
                            <h2>XML</h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="tools background">
        <h1 class="developertools">Developer Tools</h1>
        <div class="techtools ">
            <a href="https://code.visualstudio.com/" target="_blank">
                <div class="vscode techbox">
                    <img src="My Portforlio/vscode.png" alt="" srcset="">
                    <h1 class="hellotechtools">VS CODE</h1>
                </div>
            </a>
            <a href="https://developer.android.com/studio" target="_blank">
                <div class="androidstudio techbox">
                    <img src="My Portforlio/android.png" alt="" srcset="">
                    <h1 class="hellotechtools">ANDROID STUDIO</h1>

                </div>
            </a>
            <a href="https://www.codeblocks.org/" target="_blank" rel="noopener noreferrer">
                <div class="codeblock techbox">
                    <img src="My Portforlio/code.png" alt="" srcset="">
                    <h1 class="hellotechtools">CODE BLOCKS</h1>

                </div>
            </a>
            <a href="https://www.apachefriends.org/" target="_blank" rel="noopener noreferrer">
                <div class="xamp techbox">
                    <img src="My Portforlio/xampp.png" alt="" srcset="">
                    <h1 class="hellotechtools">XAMPP</h1>

                </div>

            </a>
        </div>
    </div>

    <div class="project background" id="project">
        <h1 class="headingproject">My Work : Projects </h1>
        <div class="exp">
            <div class="appproject">
                <img src="My Portforlio/ebook.jpg" alt="" class="ebookimg">
                <div class="ebook">
                    <h1>
                        EBOOK APP : Android Development (Java ,Xml)
                    </h1>
                    <p>
                        • A PDF storing and viewing app using Java. <br><br>
                        • It stores pdfs of our 1st Semester’s notes and books.<br><br>
                        • I use login interface by giving correct username and password using java.<br><br>
                        • Use of Listview which showing all available pdfs.<br><br>
                        • Use of button and onclicklisteners to show content and different text using java and xml.<br><br>
                        • I use lotties animation and some design by using basic xml<br><br>
                    </p>
                    <!-- <ul>
                        <li></li>
                    </ul> -->
                </div>
            </div>
            <div class="appproject">
                <img src="My Portforlio/front.jpg" alt="" class="frontimg">
                <div class="ebook">
                    <h1>
                        MY PORTFORLIO : Web Development (HTML,CSS,JavaScript,PHP)
                    </h1>
                    <p>
                        • Design navigation bar for navigatee in website by using HTML and CSS. <br><br>
                        • Design button for download pdf of my resume using Javascript and HTMl<br><br>
                        • Telling about myself ,my skills and Projects by using HTML ,,CSS and Javascript <br><br>
                        • A form for storing people's feedbacks and mesages Using PHP ,Javascript,HTML.<br><br>
                        • Provide my various socialhandles links for contacting me<br><br>
                        • I use google fonts,sweetalert for more styling<br><br>
                    </p>
                    <!-- <ul>
                        <li></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <section class="contact background" id="contact">

        <div class="margin">
            <div class="contacthead">
                <h1 class="me big">CONTACT ME</h1>
                <h2 class="us">Feel free to get in touch. Cheers!</h2>
                <h2 class="us" id="us"><?php if ($b == 1) {
                                            echo '<script>
                                    
                                    swal("Good job!", " Sucessfully Submitted!", "success")
                                    </script>';
                                            echo " Sucessfully Submitted";
                                        } ?>


                </h2>
                <h2 class="post">
                    <?php if ($b == 0) {
                        echo ($a);


                        echo "<script>
                        
                        swal('ERROR!','$a','error')
                        
                        </script>";
                    } ?>
                </h2>
            </div>
            <div class="form">
                <form action="pawan.php" method="post">

                    <input type="text" name="name" id="name" class="name input" placeholder=" Name">
                    <br><br>
                    <input type="email" name="email" id="email" placeholder=" Email" class="email input">
                    <br><br>
                    <textarea name="msg" id="msg" cols="8" rows="4" placeholder="Message..." class="msg input"></textarea>
                    <br><br>

                    <button "type=" submit" value="Submit" class="submit input" id="submit">
                        <p>Submit</p>
                    </button>

                    <!-- <input type="submit" value="Submit" class="submit input" onclick="submit()"> -->

                </form>


                <div class="socialmedia">
                    <div class="media">
                        <a href="mailto:pawank@gmail.com" target="_blank"><img src="My Portforlio/email.png" alt=""></a>
                        <a href="https://www.linkedin.com/in/pawan-kumar-6584b322a" target="_blank"><img src="My Portforlio/linkedin.png" alt=""></a>
                        <a href="https://github.com/Pawan20031" target="_blank"><img src="My Portforlio/github.png" alt=""></a>
                        <a href="https://www.facebook.com/profile.php?id=100025813939509" target="_blank"><img src="My Portforlio/fb.png" alt=""></a>
                        <a href="https://www.instagram.com/pawan_kumar2003/" target="_blank"><img src="My Portforlio/instra.png" alt=""></a>
                        <a href="https://twitter.com/pawank2114" target="_blank"><img src="My Portforlio/twitter.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <footer class="footer">
        <h1 class="end">&#169; 2022 Copyright : Portforlio.com</h1>
    </footer>

    <script src="pawan.js"></script>

</body>

</html>