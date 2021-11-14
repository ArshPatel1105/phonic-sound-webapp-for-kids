
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>video</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.php" class="logo"> <i class="fas fa-graduation-cap"></i> PHONIC SOUND WEBAPP </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="Alphabet.php">Alphabet</a></li>
            <li><a href="#">Material +</a>
                <ul>
                    <li><a href="course-1.php">pdf</a></li>
                    <li><a href="course-2.php">worksheets</a></li>
                    
                </ul>
            </li>
            <li><a href="course-3.php">videos</a>
               
            </li>
            <li><a href="contact.php">contact</a></li>
        </ul>
    </nav>

</header>
<!-- header section ends -->

<section class="heading">
    <h3>video</h3>
    <p> <a href="home.php">home >></a> video</p>
</section>

<!-- course-3 section starts  -->

<section class="course-3">

    <div class="box">
        <div class="video">
            <i class="fas fa-play"></i>
            <video src="video1.mp4"></video>
        </div>
        <div class="content">
            <h3>introduction of alphabet</h3>
            <p></p>
        </div>
    </div>

    <div class="box">
        <div class="video">
            <i class="fas fa-play"></i>
            <video src="video2.mp4"></video>
        </div>
        <div class="content">
            <h3>introduction of alphabet </h3>
            <p></p>
        </div>
    </div>

    <div class="box">
        <div class="video">
            <i class="fas fa-play"></i>
            <video src="video3.mp4"></video>
        </div>
        <div class="content">
            <h3>introduction of number</h3>
            <p></p>
        </div>
    </div>

    

</section>

<!-- course-3 section ends -->

<div class="main-video">
    <div id="close-vid" class="fas fa-times"></div>
    <video src="" autoplay controls unmuted></video>
</div>












<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>