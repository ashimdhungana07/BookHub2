<?php

if (isset($_POST['isbn'])) {
    $isbn = $_POST['isbn'];
} else {
    echo "ISBN not provided";
}

include 'dbconnect.php';

$sql = "SELECT * FROM `Books` WHERE `ISBN` = '$isbn'";
$result = mysqli_query($conn, $sql);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.angularjswiki.com/fontawesome/fa-blog/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="utility.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="books.css">
</head>

<body>

    <header class="header">

        <div class="header-1">
            <a href="/welcome.php" class="logo" style="cursor:pointer;"><i class="fa fa-book"></i>BookHub</a>


            <div class="icons">
                <div id="search-btn" class="fa fa-search"></div>
                <a href="#" class="fa fa-heart"></a>

                <div id="cart-btn" class="fa fa-shopping-cart"></div>

                <div id="login-btn" class="fa fa-user"></div>

            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <span>Books Details</span>
            </nav>
        </div>

    </header>



    <div class="bookcontainer">

        <?php

        if ($result) {
            $book = mysqli_fetch_assoc($result);

            $book_isbn = $book['ISBN'];
            $book_title = $book['Title'];
            $book_author = $book['Author'];
            $book_price = $book['Price'];
            $book_date = $book['Date'];
            $book_publisher = $book['Publisher'];
            $book_image = $book['image'];

            $book_details = array(
                'isbn' => $book_isbn,
                'title' => $book_title,
                'author' => $book_author,
                'publisher' => $book_publisher,
                'date' => $book_date,
                'price' => $book_price,
                'image' => $book_image
            );

        ?>

            <div class="container">
                <div class="book-container">
                    <div class="book-image-container">
                        <img class="card-img-top" src="Images/<?php echo $book_image ?>" alt="...">
                    </div>
                    <div class="summary-container">
                        <div class="book-details">
                            <h2>
                                <?php echo $book_title ?>
                            </h2>
                            <p>
                                <strong>Author:</strong> <?php echo $book_author ?>
                            </p>
                            <p>
                                <strong>Publisher:</strong> <?php echo $book_publisher ?>
                            </p>
                            <p>
                                <strong>Price:</strong> Rs. <?php echo $book_price ?>
                            </p>


                            <form id="addToCartForm" method="post">

                                <input type="hidden" name="title" value="<?php echo $book_isbn; ?>">

                                <button type="submit" class="add-to-cart">Add to Cart</button>

                            </form>

                        </div>

                        <div class="book-summary">
                            <h3 class="summary-heading">Summary</h3>
                            <p class="summary-text" id="summary-text"><?php echo $book['Summary'] ?></p>
                        </div>

                    </div>
                </div>
            </div>


        <?php
        } else {
            echo "Error retrieving book information.";
        }

        ?>

        <div class="back-container">
            <button class="back">
                <a href="/welcome.php" style="color: white; font-size: 14px;"> Continue Shopping </a>
            </button>
        </div>
    </div>



    <!-- CART STARTS -->



    <div class="cart-container form-container">
        <div id="close-cart-btn">&#10060;</div>
        <div class="wrap cf">
            <div class="heading cf">
                <h1>My Cart</h1>
            </div>

            <div class="cart">
                <ul class="cartWrap">


                </ul>

                <button class="buy" type="button" style="display: none;">
                    Buy
                </button>

            </div>
        </div>
    </div>

    <!-- CART ENDS -->

    <script>
        var bookDetails = <?php echo json_encode($book_details); ?>;

        document.querySelector('.buy').addEventListener('click', function() {
            var isbn = '<?php echo $book_isbn; ?>';
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'insert_sale.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            xhr.send('isbn=' + isbn);
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="cart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
    <script src="books.js"></script>

</body>

</html>