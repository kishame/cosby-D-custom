<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#06aa5e">
    <meta name="msapplication-navbutton-color" content="#06aa5e">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Log in| COSBY D CUSTOM ™</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/js/script.js" defer></script>
</head>
<body>
    <main class="card-container slideUp-animation">
        <div class="image-container">
            <a h1 class="company" href="welcome">COSBY D CUSTOM<sup>&trade;</sup></h1></a> 
            <img src="./assets/images/signUp.svg" class="illustration" alt="">
            <p class="quote">Log intoday to get exciting offers..!</p>
            <a href="#btm" class="mobile-btm-nav">
                <img src="./assets/images/dbl-arrow.png" alt="">
            </a>
        </div>
        <form action="Login" method="post">@csrf
            <div class="form-container slideRight-animation">
    
                <h1 class="form-header">
                    Get Log in here
                </h1>


         <div class="input-container">
            <form action="" class="login__form">
            <h1 class="login__title">Login</h1>

         <div class="input-container"> 
            <input style="width:200px;height:25px;" type="email"  name="mail" required class="login__input">
                  <i class="ri-mail-fill"></i>
                  <span>
                    email
</span>
               </div>
               <div class="input-container">
                  <input style= "width:200px;height:25px;" type="password"  name="password" required class="login__input">
                  <i class="ri-lock-2-fill"></i>
                  <span>
                    password</span>
                  @if ($errors->any())
    <div class="alert alert-danger">
        
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        
    </div>
@endif

            </div>
           
            <div id="btm">
               <button type="submit" class="submit-btn">Log in</button>

            <p class="btm-text">
                  New Register..? <a class="btm-text-highlighted" href="register">REGISTER HERE</a>
            </div>
         </form>
      </div>
   </body>
</html>