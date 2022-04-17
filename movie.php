<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
font-family: "Times New Roman", Times, serif;
font-weight: bolder;
font-size: medium;
}
* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #318ebd;
  overflow-x: hidden;
  border: 2px solid #111;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #111;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>



<div class="main">
<body style="background-image: linear-gradient(#99d3f0, #318ebd)">
<div class="sidenav">
  <a href="index.html">Home</a>
  <a href="movie.php">Movies</a>
  <a href="#">Genres</a>
  <a href="#">Actors</a>
  <a href="#">My Account</a>
  <a href="#">My Favorites</a>
</div>
<!-- Navigation 
<nav class="w3-bar w3-light-blue">
  <a href="#home" class="w3-button w3-bar-item">Home</a>
  <a href="#band" class="w3-button w3-bar-item">Movies</a>
  <a href="#tour" class="w3-button w3-bar-item">Genres</a>
  <a href="#contact" class="w3-button w3-bar-item">Actors</a>
  <a href="#contact" class="w3-button w3-bar-item">My Account</a>
  <a href="#contact" class="w3-button w3-bar-item">My Favorites</a>
</nav>-->

<!-- Website Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">MY MOVIE LIST</h2>
  <p class="w3-justify">My Movie List is an all-in-one, cross-platform service for tracking the movies you’ve watched, enjoyed, and wish to know more about.
</p>
</section>


<!--Search field-->
<section class="w3-container w3-center w3-content" style="max-width:600px">
<!-- (A) SEARCH FORM -->
<form method="post" action="">
  <h1>SEARCH FOR MOVIE TITLES</h1>
  <input type="text" name="search" required/>
  <input type="submit" value="search"/>
</form>

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["add"])){
  echo $_POST["addMovie"];
}
if (isset($_POST["search"])) {
  $json=file_get_contents("https://imdb-api.com/en/API/SearchMovie/k_u83w1u0o/" . $_POST["search"] . "");
  $json = json_decode($json,true);
  $i = 0;

  ?>

  <form method="post" action="">
  <table border='1' padding-top='50px'>
        <tr>
        <th>Picture</th> 
        <th>Title</th>
        <th>Year</th>
        <th>Add to favorites</th>
        </tr>

        <?php
  while ($i < count($json)){
    echo "<tr>";
    if ($i === 0 || ($i % 2 == 0)){
        
        echo "<td width='200'>" . "<img width='50' src=" . $json['results'][$i]['image'] . ">". "</td>";
        echo "<td width='200'>" . $json['results'][$i]['title']. "</td>";
        echo "<td width='200'>" . $json['results'][$i]['description'] . "</td>";
        //$json['results'][$i]['id']
        echo "<td width='200'>  <input type='submit' name='add' value='add'> <input type='hidden' id='addMovie' name='addMovie' value=" . $json['results'][$i]['id'] . "> </td>";
    }
    $i++;
  }
    ?>
    </table>
  </form>
<?php  
}
?>
</section>
<!--Footer-->

<footer class="w3-container w3-padding-64 w3-center w3-blue w3-xlarge">
<p> Team 2: My Movie List </p>
</footer>
</body>

</html>
<!--<section class="slideshow-container">

<section class="images fade">
  <section class="numbertext">1 / 3</div>
  <img src="lostcity.jpg" style="width:50%">
  <section class="text">The Lost City</div>
</section>

<section class="images fade">
  <section class="numbertext">2 / 3</div>
  <img src="batman.jpg" style="width:50%">
  <section class="text">The Batman</div>
</section>

<section class="images fade">
  <section class="numbertext">3 / 3</div>
  <img src="uncharted.jpg" style="width:50%">
  <section class="text">Uncharted</div>
</section>

</section>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> -->