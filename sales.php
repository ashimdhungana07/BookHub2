<?php

include 'dbconnect.php';

$sql = "SELECT ISBN FROM Sales";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="admin.css">
</head>


<body>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="sales.php">
                    <i class="bi bi-grid"></i>
                    <span>Sales</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="bi bi-grid"></i>
                    <span>Upload</span>
                </a>
            </li>




            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Chart.js</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>ApexCharts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>ECharts</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Log Out</span>
                </a>
            </li><!-- End Login Page Nav -->


        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Total Sales</h1>
            <nav>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item" style="list-style-type: none;">
                        <?php
                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                $isbn = $row["ISBN"];
                                echo "ISBN: " . $isbn . "<br>";


                                include 'dbconnect.php';

                                $sql2 = "SELECT * FROM `Books` WHERE `ISBN`='$isbn'";
                                $result2 = mysqli_query($conn, $sql2);

                                if (mysqli_num_rows($result2) > 0) {

                                    while ($row2 = mysqli_fetch_assoc($result2)) {

                                        $book_title = $row2['Title'];
                                        $book_image = $row2["image"];
                                        $book_isbn = $row2["ISBN"];
                        ?>

                                        <div class="card my-2" onclick="submitForm('<?php echo $book_isbn; ?>')">

                                            <img class="image" src="Images/<?php echo $book_image; ?>" class="card-img-top" alt="...">

                                            <div class="card-body">

                                                <h3 class="card-title">
                                                    <?php echo $book_title ?>
                                                </h3>

                                            </div>
                                        </div>

                        <?php
                                    }
                                }
                            }
                        } else {
                            echo "0 Sales";
                        }
                        ?>
                    </li>
                </ul>
            </nav>
        </div><!-- End Page Title -->

    </main>

</body>

</html>