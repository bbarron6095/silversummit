<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Silver Summit Langscaping LLC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        
        
        
    </head>
    <body>
        
        <div class="fixed-top">
            <div class="call">
                 <h2 id="call-us">Contact Us Today !</h2>
                 <a href="tel:775-386-8471" id="phone">775-386-8471</a>
                 <a href="mailto:silversummitlandscaping@gmail.com" id="email-us"> silversummitlandscaping@gmail.com</a>
            </div>
            <nav>
                    <a href="#" id="bar" onclick="show()"><i class="fas fa-bars"></i></a>
                    <ul id="menu-items">
                        <a class="nav" href="#home"><li>Home</li></a>
                        <a class="nav"href="#about"><li>About</li></a>
                        <a class="nav" href="#services"><li>Services</li></a>
                        <a class="nav" href="gallery.php"><li>Gallery</li></a>
                        <a class="nav" href="#reviews"><li>Reviews</li></a>
                        <a class="nav" href="#contact"><li>Contact Us</li></a>
                    </ul>
                
               
                </nav>
            </div>

            <div class="nav2">
                <ul id="menu-items2">
                        <a class="nav2" href="#home"><li id="two">Home</li></a>
                        <a class="nav2"href="#about"><li id="two">About</li></a>
                        <a class="nav2" href="#services"><li id="two">Services</li></a>
                        <a class="nav2" href="gallery.php"><li id="two">Gallery</li></a>
                        <a class="nav2" href="#reviews"><li id="two">Reviews</li></a>
                        <a class="nav2" href="#contact"><li id="two">Contact Us</li></a>
                    </ul>
                </div>
        </div>

 <script>
 function show() {
  var items = document.getElementById("menu-items2");
  if (items.style.display === "none") {
    items.style.display = "flex";
  } else {
    items.style.display = "none";
  }
}
 </script>

<script>
   function onSubmit(token) {
     document.getElementById("form-info").submit();
   }
 </script>
 
