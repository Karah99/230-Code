<?php
require 'includes/header.php'
?>
<main>
    <link rel="stylesheet" href="css/login.css">

    <div class="bg-cover">
        <div class="h-10 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
                    <label for="inputEmail" class="sr-only">Username or Email Address</label>
                    <input type="email" id="inputEmail" name="uname" class="form-control" placeholder="Username/Email" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-1" style="text-align: left;">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember Me
                        </label>
                    </div>
                    <div class="d-flex justify-content-center links" style="margin-bottom: 20px">Don't have an account?<a href="signup.php">Sign Up</a>
				    </div>
                    <button class="btn btn-lg btn-dark btn-block" name="login-submit" type="submit">Sign In</button>
                    <p class="mt-3 mb-0 text-muted">&copy; 2020-2021</p>
                </form>
            </div>
        </div>

        <div class="container" style="padding-top: 0px;">

            <div id="slides" class="carousel slide col-md-6 offset-md-3" style="margin-top: 0px; margin-bottom: 0px" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block mx-auto my-auto" style="width: 400px; height: 200px;" src="images/carousel-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" style="width: 400px; height: 200px;" src="images/carousel-2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" style="width: 400px; height: 200px;" src="images/carousel-3.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</main>