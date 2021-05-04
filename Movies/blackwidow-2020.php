<?php include('../Functions/server.php') ?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Icon library for rating system-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- External CSS -->
  <link rel="stylesheet" href="../style.css">

  <title>Moviefy</title>
  <!-- Website favicon -->
  <link rel="shortcut icon" href="../Images/moviefyIcon.png"> <!-- Go to root folder before finding img -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"></script>

</head>

<body>

  <?php
  include_once '../header.php';
  ?>

  <div class="container mt-5 bg-light">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ybji16u608U" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
        <p>At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate
          operative. When the U.S.S.R. breaks up, the government tries to kill her as the action moves to present-day
          New York, where she is a freelance operative. <br> Development of a Black Widow film began in April 2004 by
          Lionsgate, with David Hayter attached to write and direct. The project did not move forward and the film
          rights to the character reverted to Marvel Studios by June 2006. Johansson was cast in the role for several
          MCU films beginning with Iron Man 2 (2010). Marvel and Johansson expressed interest in a solo film several
          times over the following years, before Schaeffer and Shortland were hired in 2018. Benson and Pearson were
          added later. Filming took place from May to October, in Norway, Budapest, Morocco, Pinewood Studios in the
          United Kingdom, and in Atlanta and Macon, Georgia. <em> (Action)</em></p>
        </div>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-4">
          <img class="card-img-top"
          data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
          alt="Black Widow movie poster"
          src="https://images-na.ssl-images-amazon.com/images/I/61Fm%2BN%2BNncL._AC_SY679_.jpg"
          data-holder-rendered="true" style="height: 420px; width: 100%; display: block;">
        </div>
      </div>

    </div>

    <div class="ratingSystem">
      <span class="heading">User Rating</span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <p>4.1 average based on 254 reviews.</p>
      <hr style="border:3px solid #f1f1f1">

      <!-- Rating System-->
      <p>Select a rating:</p>

      <form class="form-inline" method="post" action="blackwidow-2020.php">
        <input type="hidden" name="pageID" value="blackwidow-2020">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="1">
          <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="2">
          <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="3">
          <label class="form-check-label" for="inlineRadio3">3</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="4">
          <label class="form-check-label" for="inlineRadio3">4</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="5">
          <label class="form-check-label" for="inlineRadio3">5</label>
        </div>
        <button class="btn btn-outline-secondary" type="submit">Rate</button>
      </form>


      <div class="container mt-5">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="headings d-flex justify-content-between align-items-center mb-3">
              <form class="form-inline" method="post" action="blackwidow-2020.php">
                <input type="text" class="form-control" placeholder="Enter comment" name="comment">
                <input type="hidden" name="pageID" value="blackwidow-2020">
                <button class="btn btn-outline-success" type="submit">Comment</button>
              </form>
            </div>
            <div>
              <?php
                        //Movie comment

              function getComments() {
                $db = mysqli_connect('localhost', 'root', '', 'database1');
                $sql = "SELECT * FROM comments WHERE pageID = 'blackwidow-2020';";
                $result = mysqli_query($db, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <div class="card">
                      <div class="card-body">
                        <?php echo $row['comment_user'] . " <br>  " . $row['comment']; ?>
                      </div>
                    </div>
                    <?php
                  }
                }
              }
              getComments();

                    //Movie Comment 
              if (isset($_POST['comment'])) {

                $comment = $_POST['comment'];
                $pageID = $_POST['pageID'];
                $username = $_SESSION['username'];

                $sql = "INSERT INTO comments VALUES ('$username','$pageID','$comment');"; 
                $result = mysqli_query($db, $sql);
                ?>
                <div class="card">
                  <div class="card-body">
                    <?php echo $username . " <br>  " . $comment; ?>
                  </div>

                  <?php
                }
                ?>
              </div>
            </div>
          </div>


        </div>

      </body>

      </html>
