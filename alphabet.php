<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alphabet</title>

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
            <li><a href="alphabet.php">Alphabet</a></li>
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
    
    <p> <a href="home.php">home >></a> alphabet</p>
</section>



 
 <div id="menu" class="fas fa-bars"></div>
    <section class="alphabte">
      <h2>Press the button to pronounce</h2>
      <form class="alphabet" id="alphabet" method="post">
        <input type="submit" name="a" value="A">
        <input type="submit" name="b" value="B">
        <input type="submit" name="c" value="C">
        <input type="submit" name="d" value="D">
        <input type="submit" name="e" value="E">
        <input type="submit" name="f" value="F">
        <input type="submit" name="g" value="G">
        <input type="submit" name="h" value="H">
        <input type="submit" name="i" value="I">
        <input type="submit" name="j" value="J">
        <input type="submit" name="k" value="K">
        <input type="submit" name="l" value="L">
        <input type="submit" name="m" value="M">
        <input type="submit" name="n" value="N">
        <input type="submit" name="o" value="O">
        <input type="submit" name="p" value="P">
        <input type="submit" name="q" value="Q">
        <input type="submit" name="r" value="R">
        <input type="submit" name="s" value="S">
        <input type="submit" name="t" value="T">
        <input type="submit" name="u" value="U">
        <input type="submit" name="v" value="V">
        <input type="submit" name="w" value="W">
        <input type="submit" name="x" value="X">
        <input type="submit" name="y" value="Y">
        <input type="submit" name="z" value="Z">


      </form>
       <?php
        if (isset($_POST['a'])) {
          ?>
            <audio src="alphabet\a.mp3" type="audio/MPEG" controls autoplay hidden>

        </audio>
        <image  src="images\a.jpg" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['b'])) {
          ?>
            <audio src="alphabet\b.mp3" type="audio/MPEG" controls autoplay hidden>

          </audio>
          <image  src="images\b.jpg" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
        }
        if (isset($_POST['c'])) {
          ?>
            <audio src="alphabet\c.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\c.jpg" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['d'])) {
          ?>
            <audio src="alphabet\d.mp3" type="audio/MPEG"controls autoplay hidden>

            </audio>
            <image  src="images\d.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['e'])) {
          ?>
            <audio src="alphabet\e.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\e.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['f'])) {
          ?>
            <audio src="alphabet\f.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\f.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
        }
        if (isset($_POST['g'])) {
          ?>
            <audio src="alphabet\g.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\g.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['h'])) {
          ?>
            <audio src="alphabet\h.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\h.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['i'])) {
          ?>
            <audio src="alphabet\i.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\i.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['j'])) {
          ?>
            <audio src="alphabet\j.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\j.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['k'])) {
          ?>
            <audio src="alphabet\k.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\k.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['l'])) {
          ?>
            <audio src="alphabet\l.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\l.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['m'])) {
          ?>
            <audio src="alphabet\m.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\m.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
         
        }
        if (isset($_POST['n'])) {
          ?>
            <audio src="alphabet\n.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\n.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['o'])) {
          ?>
            <audio src="alphabet\o.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\o.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['p'])) {
          ?>
            <audio src="alphabet\p.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\p.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['q'])) {
          ?>
            <audio src="alphabet\q.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\q.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['r'])) {
          ?>
            <audio src="alphabet\r.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\r.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['s'])) {
          ?>
            <audio src="alphabet\s.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\s.png" type="jpg/png" height="250" style="vertical-align:middle;margin:0px 400px" >
        </image>
          <?php
          
        }
        if (isset($_POST['t'])) {
          ?>
            <audio src="alphabet\t.mp3" type="audio/MPEG"controls autoplay hidden>

            </audio>
            <image  src="images\t.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['u'])) {
          ?>
            <audio src="alphabet\u.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\u.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['v'])) {
          ?>
            <audio src="alphabet\v.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\v.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['w'])) {
          ?>
            <audio src="alphabet\w.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\w.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['x'])) {
          ?>
            <audio src="alphabet\x.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\x.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['y'])) {
          ?>
            <audio src="alphabet\y.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\y.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px">
        </image>
          <?php
          
        }
        if (isset($_POST['z'])) {
          ?>
            <audio src="alphabet\z.mp3" type="audio/MPEG" controls autoplay hidden>

            </audio>
            <image  src="images\z.png" type="jpg/png"height="250" style="vertical-align:middle;margin:0px 400px" >
        </image>
          <?php
          
        }

       ?>

    </section>
























<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>