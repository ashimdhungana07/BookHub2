<?php

include 'dbconnect.php';

$sql = "SELECT * FROM `Books`";

if (isset($_GET['search'])) {
  $searchTerm = $_GET['search'];
  $sql = "SELECT * FROM `Books` WHERE `Title` LIKE '%$searchTerm%'";
}

if (isset($_GET['filter'])) {
  $filterOption = $_GET['filter'];

  if (!empty($filterOption)) {
    $sql = "SELECT * FROM `Books` WHERE `$filterOption` LIKE '%$searchTerm%'";
  }
}
?>

<p class="text-center my-3" style="font-size:25px;">
  <?php
  if (!empty($filterOption)) {

    echo '<strong> (Filtered By: ' .$filterOption. ' )</strong>';
  }
  ?>
</p>

<div class="row flexbox">

  <!-- Fetching the Categories -->


  <?php

  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) {

    $title = $row['Title'];
    $author = $row['Author'];
    $publisher = $row['Publisher'];
    $date = $row['Date'];
    $isbn = $row["ISBN"];
    $image = $row["image"];

  ?>

    <div class="card my-2" onclick="submitForm('<?php echo $isbn; ?>')">

    <img class="image" src="Images/<?php echo $row['image']; ?>" class="card-img-top" alt="..." >

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

</div>