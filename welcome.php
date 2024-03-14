<?php

session_start();

$option = false;
$category = $_SESSION['category'] ?? '';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: index.php");
  exit;
}


if (isset($_GET['category'])) {
  $category = $_GET['category'];
  $_SESSION['category'] = $category;
}

if (!empty($category)) {
  $option = true;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['title'])) {
    $book_title = $_POST['title'];
    $book_author = $_POST['author'];
    $book_publisher = $_POST['publisher'];
    $book_date = $_POST['date'];

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = $book_title;
    $_SESSION['cart'][] = $book_author;
    $_SESSION['cart'][] = $book_publisher;
    $_SESSION['cart'][] = $book_date;
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome - <?php echo $_SESSION['email'] ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./web-fonts-with-css/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="./swiper-bundle.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.angularjswiki.com/fontawesome/fa-blog/">


  <link rel="stylesheet" href="cart.css">
  <link rel="stylesheet" href="utility.css">
  <link rel="stylesheet" href="style.css">


</head>

<body>

<header class="header">

<div class="header-1">
  <a href="/index.php" class="logo" style="cursor:pointer;"><i class="fa fa-book"></i>BookHub</a>
  
  <div class="filter">Filter By:
  <select id="filter-dropdown">
    <option value="title">Title</option>
    <option value="author">Author</option>
    <option value="publisher">Publisher</option>
  </select>
  </div>
  <form action="#" method="GET" class="search-form" id="search-form">
    <input type="search" name="search" placeholder="Search here..." id="search-box">

    <input type="hidden" name="filter" id="filter-input">
    <label for="search-box" class="fa fa-search"></label>
  </form>
 
  
  <div class="icons">
    <div id="search-btn" class="fa fa-search"></div>
    <a href="" class="fa fa-heart"></a>

    <div id="cart-btn" class="fa fa-shopping-cart"></div>

    <div id="login-btn" class="fa fa-user"></div>

  </div>
</div>

<div class="header-2">
        <nav class="navbar">
            <span>Books</span>
        </nav>
    </div>

</header>



  <!-- BODY STARTS -->


  <div class="bigcontainer flexbox">

    <!-- SIDEBAR STARTS -->

    <div class="sidebar">

      <div class="sidebar-nav">

        <a class="sidebar-item" href="/welcome.php?category=all">
          <div class="sidebar-title" title="Other">All Books</div>
          <div class="sidebar-count">3,123</div>
        </a>

        <a class="sidebar-item" href="/welcome.php?category=Biography">
          <div class="sidebar-title" title="Biographies &amp; Memoirs">Biography</div>
          <div class="sidebar-count">87</div>
        </a>

        <a class="sidebar-item" href="/welcome.php?category=Money">
          <div class="sidebar-title" title="Business &amp; Money">Finance</div>
          <div class="sidebar-count">157</div>
        </a>

        <a class="sidebar-item" href="/welcome.php?category=Technology">
          <div class="sidebar-title" title="Computers &amp; Technology">Technology</div>
          <div class="sidebar-count">884</div>
        </a>


        <a class="sidebar-item" href="/welcome.php?category=History">
          <div class="sidebar-title" title="History">History</div>
          <div class="sidebar-count">5,903</div>
        </a>

        <a class="sidebar-item" href="/welcome.php?category=Mystery">
          <div class="sidebar-title" title="Mystery, Thriller &amp; Suspense">Mystery</div>
          <div class="sidebar-count">28</div>
        </a>

        <a class="sidebar-item" href="/welcome.php?category=Romance">
          <div class="sidebar-title" title="Romance">Romance</div>
          <div class="sidebar-count">296</div>
        </a>

        <a class="sidebar-item" href="/welcome.php?category=Fantasy">
          <div class="sidebar-title" title="Science Fiction &amp; Fantasy">Fantasy</div>
          <div class="sidebar-count">213</div>
        </a>

        <a class="sidebar-item" href="/welcome.php?category=Self-Help">
          <div class="sidebar-title" title="Self-Help">Self-Help</div>
          <div class="sidebar-count">45</div>
        </a>

        <a class="sidebar-item" href="/welcome.php?category=Others">
          <div class="sidebar-title" title="Other">Others</div>
          <div class="sidebar-count">3,123</div>
        </a>

      </div>

    </div>


    <!-- SIDEBAR ENDS -->


    <!-- BOOKS DISPLAY START -->


    <div class="container" style="margin:auto">

      <?php

      include 'dbconnect.php';

      if ($option == true && $category != "all") {

        $sql = "SELECT * FROM `Books` WHERE `Category` = '$category'";

        if (isset($_GET['search'])) {
          $searchTerm = $_GET['search'];
          $sql = " SELECT * FROM `Books` WHERE `Category` = '$category' AND `Title` LIKE '%$searchTerm%'";
        }

        if (isset($_GET['filter'])) {
          $filterOption = $_GET['filter'];

          if (!empty($filterOption)) {
            $sql = "SELECT * FROM `Books` WHERE `Category` = '$category' AND `$filterOption` LIKE '%$searchTerm%'";
          }
        }
      ?>

        <p class="text-center my-3" style="font-size:25px;">
          <strong> <?php echo $category ?> Books </strong>
          <?php
          if (!empty($filterOption)) {

            echo '<strong> (Filtered By: ' . $filterOption . ' )</strong>';
          }
          ?>
        </p>


        <div class="row flexbox">

          <?php

          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

              $title = $row['Title'];
              $author = $row['Author'];
              $publisher = $row['Publisher'];
              $date = $row['Date'];
              $isbn = $row["ISBN"];
              $image = $row["image"];

          ?>

              <div class="card my-2" onclick="submitForm('<?php echo $isbn; ?>')">

              <img class="image" src="Images/<?php echo $image; ?>" class="card-img-top" alt="..." >

                <div class="card-body"> 

                  <h3 class="card-title">
                    <?php echo $title ?>
                  </h3>

                </div>
              </div>

            <?php
            }
            ?>

            <form id="isbnForm" method="post" action="books.php">
              <input type="hidden" name="isbn" id="isbnInput" value="<?php echo $isbn; ?>">
            </form>

        <?php
          } else {
            echo '<p style="padding-top: 20px;; font-size: 16px; text-align:center;">No books available in this category</p>';
          }

          echo '</div>';
        } else {
          include 'category.php';
        }

        ?>

        </div>


        <!-- BOOKS DISPLAY ENDS -->

    </div>


    <!-- BODY ENDS -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="cart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</body>

</html>