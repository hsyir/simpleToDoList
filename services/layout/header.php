
<?php 
use Services\Auth\Auth;
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>چک لیست - <?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style/style2.css">
</head>

<body>
    <main class="main">

       


        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link href=" contact.php">ارتباط با ما</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                آدرس پروژه ها
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="https://hoseinalizadeh1373.github.io/calculator/index.html">پروژه ماشین حساب</a></li>
                                <li><a class="dropdown-item" href="https://hoseinalizadeh1373.github.io/gallery/index.html">پروژه گالری عکس</a></li>
                                <li><a class="dropdown-item" href="https://hoseinalizadeh1373.github.io/">آدرس گیتهاب </a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <?php
                        if ($UserData = Auth::user()) {
                            

                            echo "<a class='btn btn-outline-dark' href='logout.php'>خروج  ". $UserData['username']."</a>";
                        } else {
                            echo "<a class='btn btn-outline-dark' href='login.php'>ورود</a>";
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </nav>

        <div class="container px-4 mt-4">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 border bg-light text-center shadow p-3 mb-5 bg-white rounded">To Do List پروژه</div>
                </div>
            </div>
        </div>
 



      
        <hr>