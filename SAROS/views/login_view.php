<link href="assets/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<link href="assets/css/style.css" rel="stylesheet" id="bootstrap-css">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
    <div id="formContent">
        <br>
        <!-- Login Form -->
        <form method="post" action="login">
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="Votre Email">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de Passe">
            <input type="submit" class="fadeIn fourth" value="connexion">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#" style="text-decoration: none;">Mot de passe Oublie?</a><br>
            <a class="underlineHover" href="signin" style="text-decoration: none;">inscrivez-vous !</a>
        </div>

    </div>
</div>