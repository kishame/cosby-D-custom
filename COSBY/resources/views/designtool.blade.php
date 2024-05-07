<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DESIGN TOOLS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="images/style.css">
  <link rel="shortcut icon" href="icons/icon-1.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9bbc3d5946.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    
</head>

<body>
  

  <header>
  <section>
            <nav class="navbar navbar-expand-lg fixed-top top-banner" style="background-color:rgb(125, 250, 125);">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img style="width: 200px; height:50px" src="icons/Logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <div class="d-flex nav-menu">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="designtool">Design tool</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="welcome#product">Product</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="welcome#about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="welcome#contact">Contact Us</a>
                                </li>
                                <li class="nav-item">
    @if(session('email'))
        <a style="border-radius:10px; border:2px solid white; padding:5px 20px 5px 20px;" class="nav-link" href="/logout">Logout</a>
    @else
        <a style="border-radius:10px; border:2px solid white; padding:5px 20px 5px 20px;"class="nav-link" href="/login">Login</a>
    @endif
</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
    <section class="banner-wrapper"  style="margin-top:50px;">
      

      <div class="banner-content">
        <!-- banner left -->
        <div class="banner-left">
          <h2><span>get shirt</span> of your selection</h2>
<form action="checkout" method="post">@csrf
          <div class="color-content">
            <h3>select color</h3>
            <div class="color-groups">
                <form action="outcheck" method="get">
              <input type="checkbox" name="color" id="color-white" class="color-checkbox" value="white">
              <label for="color-white" class="color color-white"></label>
              
              <input type="checkbox" name="color" id="color-black" class="color-checkbox" value="black">
              <label for="color-black" class="color color-black"></label>
              
              <input type="checkbox" name="color" id="color-yellow" class="color-checkbox" value="yellow">
              <label for="color-yellow" class="color color-yellow"></label>
              <input type="checkbox" name="color" id="color-blue" class="color-checkbox" value="blue">
              <label for="color-blue" class="color color-blue "></label>
              <input type="checkbox" name="color" id="color-dusky-blue" class="color-checkbox" value="dusky-blue">
              <label for="color-dusky-blue" class="color color-dusky-blue"></label>
              <input type="checkbox" name="color" id="color-dusky-green" class="color-checkbox" value="dusky-green">
              <label for="color-dusky-green" class="color color-dusky-green"></label>
              <input type="checkbox" name="color" id="color-gray" class="color-checkbox" value="gray">
              <label for="color-gray" class="color color-gray"></label>
              <input type="checkbox" name="color" id="color-pink" class="color-checkbox" value="pink">
              <label for="color-pink" class="color color-pink"></label>
              
              <!-- Add more color checkboxes as needed -->
      
          </div>
            <div>
          
              <div class="size">
                <h3>select Size</h3>
                <input type="checkbox" name="size" id="size-small" value="small" onchange="handleSizeChange(this)">
                <label for="size-small">Small</label>
                <input type="checkbox" name="size" id="size-medium" value="medium" onchange="handleSizeChange(this)">
                <label for="size-medium">Medium</label>
                <input type="checkbox" name="size" id="size-large" value="large" onchange="handleSizeChange(this)">
                <label for="size-large">Large</label>
                <input type="checkbox" name="size" id="size-xlarge" value="xlarge" onchange="handleSizeChange(this)">
                <label for="size-xlarge">XLarge</label>
                <input type="checkbox" name="size" id="size-xxlarge" value="xxlarge" onchange="handleSizeChange(this)">
                <label for="size-xxlarge">XXLarge</label>
            </div>
            
            <script>
            function handleSizeChange(checkbox) {
                // Uncheck all other checkboxes
                var checkboxes = document.querySelectorAll('.size input[type="checkbox"]');
                checkboxes.forEach(function(item) {
                    if (item !== checkbox) {
                        item.checked = false;
                    }
                });
            }
            </script>
              <div class="pockets">
                <h3>select Pockets</h3>
                <input type="checkbox" name="pocket" id="pocket-single" value="single" onchange="handlePocketChange(this)">
                <label for="pocket-single">Single pocket</label>
                <input type="checkbox" name="pocket" id="pocket-double" value="double" onchange="handlePocketChange(this)">
                <label for="pocket-double">Double pockets</label>
                <input type="checkbox" name="pocket" id="pocket-none" value="none" onchange="handlePocketChange(this)">
                <label for="pocket-none">No Pocket</label>
            </div>
            
            <script>
            function handlePocketChange(checkbox) {
                // Uncheck all other checkboxes
                var pockets = document.querySelectorAll('.pockets input[type="checkbox"]');
                pockets.forEach(function(item) {
                    if (item !== checkbox) {
                        item.checked = false;
                    }
                });
            }
            </script>
            <div class="fabric-options">
              <h3>select fabric</h3>
              <input type="checkbox" name="fabric" id="fabric-cotton" value="cotton" onchange="handleFabricChange(this)">
              <label for="fabric-cotton">Cotton</label>
              <input type="checkbox" name="fabric" id="fabric-linen" value="linen" onchange="handleFabricChange(this)">
              <label for="fabric-linen">Linen</label>
              <input type="checkbox" name="fabric" id="fabric-polyester" value="polyester" onchange="handleFabricChange(this)">
              <label for="fabric-polyester">Polyester</label>
          </div>
          
          <script>
          function handleFabricChange(checkbox) {
              // Uncheck all other checkboxes
              var checkboxes = document.querySelectorAll('.fabric-options input[type="checkbox"]');
              checkboxes.forEach(function(item) {
                  if (item !== checkbox) {
                      item.checked = false;
                  }
              });
          }
          </script>
          
              
            </div>
          </div>
          
        </div>
        <!-- banner right -->
        <div class="banner-right">
          <img src="images/tshirt_white.png">
          <div class="btn-div">
            <input type="submit" class="btn"  value="Checkout"></form>
        </div>
        </form>
       
          </div>
          </div>
        
      </div>
    </section>
  </header>
  @if ($errors->any())
    <div class="alert alert-danger">
        
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        
    </div>
@endif
  <script type="text/javascript">

  </script>

  <script src="images/script.js"></script>
</body>

</html>