<?php

class Vista
{

    public static function inithtml()
    { ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mi Aplicación MVC</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="./../css/style.css">
        </head>

        <body>
            <div class="container">
            <?php }


        public static function endhtml()
        {
            echo '</div> <!-- cierre de div container -->';
            echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>';
            echo '</body>';
            echo '</html>';
        }

        public static function formLogin()
        {

            ?>

                <div class="container" id="container">
                    <div class="form-container sign-up-container">
                        <form action="#">
                            <h1>Create Account</h1>
                            <div class="social-container">
                                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <span>or use your email for registration</span>
                            <input type="text" placeholder="Name" />
                            <input type="email" placeholder="Email" />
                            <input type="password" placeholder="Password" />
                            <button>Sign Up</button>
                        </form>
                    </div>
                    <div class="form-container sign-in-container">
                        <form action="#">
                            <!-- Datos form -->
                            <h1>Inicia sesión</h1>
                            <span>Introduce tus datos</span>
                            <input type="email" placeholder="Email" name="username"/>
                            <input type="password" placeholder="Password" name="password"/>
                            <a href="#">Forgot your password?</a>
                            <button>Sign In</button>
                        </form>
                    </div>
                    <div class="overlay-container">
                        <div class="overlay">
                            <div class="overlay-panel overlay-left">
                                <h1>Welcome Back!</h1>
                                <p>To keep connected with us please login with your personal info</p>
                                <button class="ghost" id="signIn">Sign In</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h1>Hello, Friend!</h1>
                                <p>Enter your personal details and start journey with us</p>
                                <button class="ghost" id="signUp">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>

                <footer>
                    <p>
                        Created with <i class="fa fa-heart"></i> by
                        <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
                        - Read how I created this and how you can join the challenge
                        <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
                    </p>
                </footer>


        <?php
        }

        public static function desktop()
        {
            echo '<div>';
            echo '<a href="logout.php" class="btn btn-danger">Cerrar sesión</a>';
            echo '<h1>Bienvenido al sistema, ' . $_SESSION['usuario_logueado'] . '</h1>';
            echo '</div>';
        }
    }




        ?>