<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TevDevelops | Programmer & Designer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="hover.css" rel="stylesheet" media="all">


</head>
<body>
    <div id="desktop-nav">
        <ul>
            <li id="tev-dev" style="float: left">&lttev_dev&gt</li>
            <li class="contact">Connect</li>
            <li class="about">About</li>
            <li class="portfolio">Portfolio</li>
        </ul>
    </div>
    <section id="content">
        <div id="main-section">
            <h2>Cache Me On The Internet</h2>
            <div style="overflow: hidden">
                <img src="images/home-images/starry.gif">
            </div>
            <div>
                <img src="images/home-images/dg.gif">
            </div>
            <div>
                <img src="images/home-images/deep.gif">
            </div>
            <div>
                <img src="images/home-images/game.gif">
            </div>
            <div>
                <img src="images/home-images/land.gif">
            </div>
            <div>
                <img src="images/home-images/404.gif">
            </div>
            <div>
                <img src="images/home-images/dg2.gif">
            </div>
        </div>
        <div id="portfolio-section">
            <div style="height: 130px;"></div>
            <div class="bvndit">
                <a target="_blank" href="http://bvndit.com/"><img class="port-pic" src="images/bvndit.png" style="height: 300px; width: 300px;"></a>
            </div>
            <div class="openspace">
                <a target="_blank" href="http://openspacephl.com/"><img class="port-pic" src="images/os.png" style="width: 300px;"></a>
            </div>
            <div class="globalgeeks">
                <a target="_blank" href="https://www.glblgks.co/"><img class="port-pic" src="images/glbl.png" style="; width: 300px;"></a>
            </div>

        </div>
        <div id="contact-section" style="margin-top: -15px">
        <div id="contact-section-left">
            <h2 style="text-align: center; padding-bottom: 35px; padding-top: 35px">Where To Find Me</h2>
            <form id="contact-form" action="process.php" method="post">
                <fieldset>
                <label for="name">Name</label>
                <input name="name" id="name" type="text" tabindex="1" required>
                </fieldset>
                <fieldset>
                <label for="email">Email</label>
                <input name="email" id="email" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                <label for="tel">Number</label>
                <input name="tel" id="tel" type="tel" tabindex="3">
                </fieldset>
                <fieldset>
                <label for="message">Speak</label>
                <textarea name="message" style="height: 90px" id="message" tabindex="4" required></textarea>
                </fieldset>
                <fieldset>
                <button name="submit" id="contact-submit" style="padding-top: 15px; height: 50px; font-size: 1em">Submit</button>
                </fieldset>
            </form>
        </div>
        <div id="contact-section-right">
            <img  id="contact-pic" src="images/bvndit-2.png">
        </div>
        </div>
        <div id="about-section">
        <div id="about-section-left">
            <h2>The Part Where I Glorify Myself</h2>
            <img class="about-pic" src="images/bvndit-1.png">
        </div>
        <div id="about-section-right">
            <h3 style="padding-top: 7%">Overview:</h3>
            <p>Age: 22<br>
               Hometown: Camden, NJ<br>
               High School: Moorestown Friends<br>
               College: Rutgers Camden - B.S Computer Science<br>
            </p>
            <p style="font-size: 0.85em">
                Growing up in Camden, NJ has always been an advantage for how I view the world.
                At a younger age, I learned the value of a dollar, how to be resourceful,
                and how to support my own opinions. Camden is a misunderstood place & sometimes I feel
                the same; creating "art" was not my natural outlet. Being a mathematical thinker, I
                never assumed I had talent in the arts, since I could not draw. It wasn't until
                high school where I picked up a camera & began using Photoshop that I began creating "art".
                <br><br>
                College had been a shaky experience; between 3 schools & 3 majors, I found myself
                struggling to find the correct field to focus my energy on. I owe Childish Gambino for
                the push to learn code. This prompted me to switch my major to Comp Sci when I
                transferred into Rutgers. After a year and a half of formal programming education, I felt slowed
                down by the process of a classroom setting, so I dropped. I appreciate the experieences
                & knowledge gained from my college experience, but now I am ready to design my own career.
                <br><br>
                Now, I am interested in being a part of the integration of the tech & art communities.
                Artists, now more than ever, are learning the importance of digital platforms & mediums;
                this allows for the programmers to flourish by collaborating with artists to design beautiful
                experiences for the world to view. VR/AR will be the game changer for every type of creative.
            </p>
        </div>
        </div>
    </section>
    <div id="social-footer">
        <a class="hvr-underline-from-center" href="https://twitter.com/tevdevelops"><img src="images/twitter.png"></a>
        <a class="hvr-underline-from-center" href="https://www.instagram.com/tevdevelops/"><img src="images/ig.png"></a>
        <a class="hvr-underline-from-center" href="https://www.linkedin.com/in/tevin-rivera-ba5027123/"><img src="images/link.png"></a>
        <a class="hvr-underline-from-center" href="https://github.com/tevdevelops"><img src="images/git.png"> </a>
    </div>
<script>
    $(document).ready(function () {
        $(".about").click(function () {
            $("#contact-section").fadeTo('slow', 0);
            $("#portfolio-section").fadeTo('slow', 0);
            $("#main-section").fadeTo('slow', 0);
            $("#main-section").css('display', 'none');
            $("#contact-section").css('display', 'none');
            $("#portfolio-section").css('display', 'none');
            $("#about-section").fadeTo('slow', 1);
        });
        $(".portfolio").click(function () {
            $("#contact-section").fadeTo('slow', 0);
            $("#about-section").fadeTo('fadeTo', 0);
            $("#main-section").fadeTo('slow', 0);
            $("#main-section").css('display', 'none');
            $("#contact-section").css('display', 'none');
            $("#about-section").css('display', 'none');
            $("#portfolio-section").fadeTo('slow', 1);
        });
        $(".contact").click(function () {
            $("#about-section").fadeTo('slow', 0);
            $("#portfolio-section").fadeTo('slow', 0);
            $("#main-section").fadeTo('slow', 0);
            $("#main-section").css('display', 'none');
            $("#about-section").css('display', 'none');
            $("#portfolio-section").css('display', 'none');
            $("#contact-section").fadeTo('slow', 1);
        });
        $("#tev-dev").click(function () {
            $("#about-section").fadeTo('slow', 0);
            $("#portfolio-section").fadeTo('slow', 0);
            $("#contact-section").fadeTo('slow', 0);
            $("#contact-section").css('display', 'none');
            $("#about-section").css('display', 'none');
            $("#portfolio-section").css('display', 'none');
            $("#main-section").fadeTo('slow', 1);
        });

        // Slideshow code
        $("#main-section > div:gt(0)").hide();

        setInterval(function() {
            $('#main-section > div:first')
                    .fadeOut(1000)
                    .next()
                    .fadeIn(1000)
                    .end()
                    .appendTo('#main-section');
        }, 5000);
    });
</script>
</body>
</html>
