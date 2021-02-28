<!DOCTYPE html>
<html>
<title>Rocking H</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1000px) {

        .bgimg-1,
        .bgimg-2,
        .bgimg-3,
        .bgimg-4,
        .bgimg-5 {
            background-attachment: scroll;
            min-height: 400px;
        }

        #navbar {
            position: fixed;
            right: 0px;
        }

    }

    .account {
        width: 300px;
        height: 600px;
        position: fixed;
        padding-top: 20px;
        top: 50px;
        display: none;
        right: 20px;
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif;
    }

    body,
    html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }

    #navbar {
        color: white;
        background-color: rgba(0, 0, 0, .5);
        font-size: 18px;
    }

    /* Create a Parallax Effect */
    .bgimg-1,
    .bgimg-2,
    .bgimg-3,
    .bgimg-4,
    .bgimg-5 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('images/hawkeye-tannerroping2.jpg');
        min-height: 100%;

    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("images/rusty-flex.jpg");
        min-height: 500px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url("images/rusty-first.jpeg");
        min-height: 500px;
    }

    .bgimg-4 {
        background-image: url("images/hawkete-lorian.jpeg");
        min-height: 500px;
    }

    .bgimg-5 {
        background-image: url("images/sunny-water.jpeg");
        min-height: 500px;
    }

    .w3-wide {
        letter-spacing: 10px;
    }

    .w3-hover-opacity {
        cursor: pointer;
    }
</style>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top" id="navbar">
        <div class="w3-bar" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#home" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i> Home</a>
            <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> About Us</a>
            <a href="#FAQ" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-question"></i> FAQ</a>
            <a href="#rates" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-money"></i> Rates/Discounts</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-phone"></i> Contact Us</a>
            <a onclick="toggleLogin()" class="w3-bar-item w3-button9 w3-hide-small w3-right w3-hover-red">
                Login/Create Account

        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium" onclick="toggleFunctionSmall()">
            <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>
            <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-user"></i> About Us</a>
            <a href="#FAQ" class="w3-bar-item w3-button"><i class="fa fa-question"></i> FAQ</a>
            <a href="#rates" class="w3-bar-item w3-button"><i class="fa fa-money"></i> Rates/Discounts</a>
            <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-phone"></i> Contact Us</a>
            <a onclick="toggleLoginSmall()" class="w3-bar-item w3-button">Login/Create Account</a>
        </div>
    </div>

    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">ROCKING <span class="w3-hide-small">H</span> LESSONS</span>
        </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
        <h3 class="w3-center">ABOUT ROCKING H</h3>
        <p><em><b>Our Methodology</b></em></p>
        <p>
            All lessons are adapted to match the student's needs and goals. Generally, we take a holistic approach to
            teach students how to care for and ride horses. Our goal is to teach students about the responsibilities and
            skills that are required to own their own horse. We usually begin the lessons by catching and brushing our horse,
            then saddling and riding, with interesting facts and horse how-to's built in. Because lessons evolve with the
            student, no two lessons are ever the same. Of course, you're always welcome to ask whatever horse questions you may have!
        </p>
        <p><em><b>The Horses</b></em></p>
        <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <img src="images/rusty-flex.jpg" class="w3-round w3-image" alt="Photo of Me" width="500" height="333"><br><br>
                <img src="images/rusty-first.jpeg" class="w3-round w3-image" alt="Photo of Me" width="500" height="333">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large">
                <p>
                    <b>I'm A Fool For A Cat (Rusty):</b> Rusty is a 5-year-old Quarter horse.
                    Tanner has been training him since he was 2 years old in cutting and reining cow horse.
                    Rusty's dad, Auspicious Cat is in the NCHA hall of fame and 2012-2014 world champion
                    stallion. Auspicious Cat's Rusty's father, High Brow Cat is the #1 cutting sire in
                    the world. With this blood line, Rusty is very gentle and can be used for all degrees
                    of training, both beginner and performance lessons at the same time. Rusty is known
                    for his sliding stops, spinning and roll backs.
                </p>
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <img src="images/hawkeye-ridingwithkid.jpg" class="w3-round w3-image" alt="Photo of Me" width="210" height="210">
                <img src="images/hawkeye-camp.jpg" class="w3-round w3-image" alt="Photo of Me" width="200" height="200"><br><br>
                <img src="images/hawkeye-eating.jpg" class="w3-round w3-image" alt="Photo of Me" width="500" height="333">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large">
                <p>
                    <b>Rio Hawk-Eye:</b> Hawk-eye is a 6-year-old buckskin, Grandson of Hickory Rio,
                    that has been well-trained as an incredibly gentle horse. He is known for his
                    easy trot and lope. We have been training him since he was 2 and has become a
                    great horse and a lot of fun to work with.
                </p>
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <img src="images/thor-smallkid.jpg" class="w3-round w3-image" alt="Photo of Me" width="180" height="180">
                <img src="images/thor-pose.jpg" class="w3-round w3-image" alt="Photo of Me" width="205" height="205">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large">
                <p>
                    <b>Mucho Candy Bar (Thor):</b> Thor is our 7-year-old Chestnut that is very gentle. He is
                    known for his easy walk and trot for new riders to learn on. We use Thor for lessons,
                    trail riding, hunting and many other things as he is a great all around horse.
                </p>
            </div>
        </div>

    </div>

    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
        <div class="w3-third w3-section">
            <span class="w3-xlarge">17+</span><br>
            Years of Experience
        </div>
        <div class="w3-third w3-section">
            <span class="w3-xlarge">5</span><br>
            Star Review
        </div>
        <div class="w3-third w3-section">
            <span class="w3-xlarge">3</span><br>
            Great Horses
        </div>
    </div>
    <!-- Second Parallax Image with Portfolio Text -->
    <div class="bgimg-2 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">FAQ</span>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="w3-content w3-container w3-padding-64" id="FAQ">
        <h3 class="w3-center">FREQUENTLY ASKED QUESTIONS</h3>

        <p>
            <strong>What will I learn?</strong><br /><br />
            At Rocking H, we believe in teaching you all the important aspects
            of owning your own horse, though lessons will be adapted to achieve
            your own goals and interests. Of course there are some basics that
            are necessary to cover during your first lesson, so a little more time
            will be spent on those than will be spent in the future. Below is a
            list of the types of things you may learn throughout your lessons. There is also a
            basic itinerary of what will be covered in your first lesson and then in later lessons.<br /><br />

            <strong>Possible lesson activites:</strong><br />
            Western riding, bareback riding, safety, saddling up, proper brushing, knot tying,
            proper leading, horse facts and trivia, horse maintenance, feeding, bathing, and more!<br /><br />
            <strong>Basic Itineray of lessons:</strong><br />
            In your first lesson we will cover: Introduction to the horses (their names, ages, and a little bit of horse terminology), safety,
            how to brush properly, names and uses of the tack (equipment), and basics of riding.
            <br />
            In your second lesson and beyond, we will: Catch/brush the horses, learn a basic skill,
            saddle (put the equipment on the horse), and ride. While doing these things, we will
            be using and reinforcing the basic information covered in your first lesson. For example, in the first lesson we will
            explain each piece of tack and how to use it, whereas in future lessons we will simply say the names of the tack as we use it.
            <br /><br />
            <strong>How old do students have to be?</strong><br />
            Students can be as young as 8 years old. We also have adult students, many of which are crossing
            off to-do's on their bucket list. The activities we will be doing are adapted to each individual student,
            ability, maturity, and goals for what they want to learn.<br /><br />

            <strong>What should I wear?</strong><br />
            Students MUST wear closed toed shoes and pants/shorts. Refunds will not be given for unsafe clothing.
            Tennis shoes are good, but hiking boots and cowboy boots are even better! As for pants/shorts, please
            be aware that legs will be rubbing up against horses, leather saddles, and other equipment. Long,
            comfortable (not tight) jeans are best suited for horseback riding. However, especially during warm
            summer months, students may wear shorter pants/shorts made of other materials. Knee-length or longer
            is best. Finally, please dress for the weather. We don't want you to overheat during the summer
            months, nor freeze during the winter! Occasionally, we have had younger students come in winter months wearing their snow suits!<br /><br />

            <strong>What should I bring?</strong><br />
            Water is a must, especially during summer! Also, sunscreen is a wise idea year-round as even the coldest
            days can still be sunny. Helmets are available for riders at Rocking H in limited quantities and sizes,
            but you are encouraged to bring your own helmet. Bike or other recreational helmets are great! Finally,
            don't forget your camera and camcorder to capture these fun memories!<br /><br />


            <strong>What about the weather?</strong><br />
            Because our facilities are outdoors, weather does play a role in our lessons. Occasionally, Rocking H
            may cancel lessons mainly due to unsafe arena conditions. If this is the case, you will be offered the
            opportunity to reschedule your lesson at no additional cost. However, if it is only lightly snowing or
            raining, lessons will still be offered and the cancellation policy will apply. If weather is more severe,
            lessons may or may not be offered but you will have the option to reschedule if you would like. <br />

        </p>

    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <!-- Third Parallax Image with Portfolio Text -->
    <div class="bgimg-3 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">Rates/Discounts</span>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="rates">
        <h3 class="w3-center">Rates</h3>
        <p>
            <b>Standard Rates</b>
        </p>
        <p style="margin-left: 40px">Standard Individual Lesson: $60/Lesson (1 hour)</p>
        <p style="margin-left: 40px">Standard Two-Person Lesson: $100/Lesson (1 hour)</p>
        <!--
        <p>
            <strong>Discounted Rate</strong>
        </p>
        <p style="margin-left: 40px">$20 Off Each Lesson With the Purchase of 4 Pre-Paid Lessons</p>
        -->
        <p>
            <strong>Payment Options</strong>
        </p>
        <p style="margin-left: 40px">Cash, Check, Or Venmo to Tanner Helms is Our Preferred Methods for Payment</p>
        <p><strong>Cancellation Policy</strong></p>
        <p style="margin-left: 40px">2 days in advance: We will reschedule your lesson for no extra charge. </p>
        <p style="margin-left: 40px">1-2 days in advance:You will be charged half price and receive a credit for the remaining amount.</p>
        <p style="margin-left: 40px">Less than 24 hours/No-Shows: You will be charged the full amount for your lesson. </p>
        <p style="margin-left: 40px">Lessons may be rescheduled by owner due to unsafe weather conditions</p>








    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
        <h3>Some Reviews</h3>
        <div class="w3-third w3-section">
            <span class="w3-xlarge"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><br>
            <p style="margin-left: 30px; text-align: left; text-indent:30px">
                Tanner is a marvelous instructor. It’s been decades since I spent time on a horse and I need to be re-educated on correct riding technique. He especially does a great job of communicating with his student so I’m getting constant feedback on what I’m doing. Oh, and I like riding Rusty..
            </p>
        </div>

        <div class="w3-third w3-section">
            <span class="w3-xlarge"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><br>
            <p style="margin-left: 30px; text-align: left;text-indent:30px">
                It was my first time riding a horse and it was such a great and safe experience. Our instructor answered all our questions and we learned so much about horses. I look forward to having more experiences riding horses. I would recommend Rocking H Horse Lessons to everyone, especially for first time riders. Thank you for a great experience!
            </p>
        </div>
        <div class="w3-third w3-section">
            <span class="w3-xlarge"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><br>
            <p style="margin-left: 30px; text-align: left;text-indent:30px;margin-right:30px">
                Tanner was friendly and helpful. It's been many years since I've been on a horse and I was new to it even then. Felt safe, and comfortable the whole time. Tanner has great knowledge about horses and teaching others the proper mechanics to riding. Also, a fact I didn't know going into this, is that Tanner is working towards horse chiropractics! Meaning he has more knowledge than just your standard horse enthusiast. I signed up for more lessons right away!
            </p>
        </div>

    </div>

    <!-- fourth Parallax Image with Portfolio Text -->
    <div class="bgimg-4 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">Contact Us</span>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">Contact</h3>


        <div class="w3-row">
            <div class="w3-col m6  w3-padding-large">
                <br />
                <br />
                <p>
                    <strong>Gary: </strong>(208) 608-0931
                    <br />
                    <br />
                    <strong>Email: </strong>rockinghlessons@gmail.com<br /><br />
                    Calls and texts are accepted from 9AM to 9PM
                </p>

                <p><strong>Physical Address:</strong></p>
                <p>1782 W Janet Ct Eagle, Idaho 83616</p>
            </div>
            <div class="w3-col m6 w3-hide-small w3-padding-large">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.0909827881555!2d-116.37844348427564!3d43.70865825686039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54afab3c624ef935%3A0xfd15ca72aac0d467!2sRocking%20H%20Horse%20Lessons!5e0!3m2!1sen!2sus!4v1590194748185!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>



        </div>
    </div>






    <div class="w3-light-grey w3-round account" id="createAccount" style="height:600px;">
        <div style="padding-left:20%">
            <form id="loginForm" method="post" action="pages/createAccount.php">
                <h3>Create Account</h3>
                <label for="first">First Name:</label><br>
                <input type="text" id="first" name="first"><br>
                <label for="last">Last Name:</label><br>
                <input type="text" id="last" name="last"><br>
                <label for="phone">Phone:</label><br>
                <input type="text" id="phone" name="phone"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>
                <label for="confirmPassword">Confirm Password:</label><br>
                <input type="password" id="confirmPassword" name="confirmPassword"><br>
                <label for="code">Code:</label><br>
                <input type="password" id="code" name="code"><br><br>
                <input type="submit" value="Create Account">

            </form>
        </div>

    </div>

    <div class="w3-light-grey w3-round account" id="login" style="height:400px;">
        <div style="padding-left:20%">
            <form id="createAccount" method="post" action="pages/checkLogin.php">
                <h3>Login</h3>
                <label for="phone">Phone:</label><br>
                <input type="text" id="phone" name="phone"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br><br>
                <input type="submit" value="Login"><br><br>
                <p>New to RockingH?</p><a href="#" onClick="showCreate()">Sign up now</a>

            </form>
        </div>

    </div>






    <script>

    </script>


    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>

        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
    </footer>

    <script>
        // Modal Image Gallery

        function toggleLogin() {
            var x = document.getElementById("login").style.display;
            var y = document.getElementById("createAccount").style.display;
            if (x == "block" || y == "block") {
                document.getElementById("login").style.display = "none";
                document.getElementById("createAccount").style.display = "none";
            } else {
                document.getElementById("login").style.display = "block";
            }
        }

        function toggleLoginSmall() {

            document.getElementById("login").style.display = "block";

        }

        function showCreate() {
            var log = document.getElementById("login");
            var create = document.getElementById("createAccount");
            log.style.display = "none";
            create.style.display = "block";
        }

        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }

        // Change style of navbar on scroll
        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            var navbar = document.getElementById("myNavbar");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
            } else {

                navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
            }
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function toggleFunction() {

            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace("w3-show", "");
            }
        }

        function toggleFunctionSmall() {

            var x = document.getElementById("navDemo");

            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace("w3-show", "");
            }








        }
    </script>

</body>

</html>