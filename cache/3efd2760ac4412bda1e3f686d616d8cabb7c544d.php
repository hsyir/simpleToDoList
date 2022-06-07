
<?php 
use Services\Auth\Auth;
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>چک لیست -  <?php echo e($title); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style/style2.css">
</head>

<body>
    <main class="main">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid pos">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">درباره ما</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">ارتباط با ما</a>
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
                            

                            echo "<a class='btn btn-outline-dark' href='/logout'>خروج  ". $UserData['username']."</a>";
                        } else {
                            echo "<a class='btn btn-outline-dark' href='/login'>ورود</a>";
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </nav>
<?php echo $__env->yieldContent("about"); ?>

<?php if($_SERVER['REQUEST_URI']!="/about"): ?>
        <div class="container px-4 mt-4">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 border bg-light text-center shadow p-3 mb-5 bg-white rounded">To Do List پروژه</div>
                </div>
            </div>
        </div>
        <hr>
        <?php endif; ?>
      
</div>
<?php echo $__env->yieldContent("content"); ?>


</div>

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">حذف رکورد</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        آیا از حذف رکورد مطمعنید ؟
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="btn_cancel" data-bs-dismiss="modal">انصراف</button>
      <form method="post" action="/storeNewItem"> 
      <input   type='hidden' name='id'  id="hid" />
      <button  name='action' value='delete' class="btn btn-primary" data-bs-target='#exampleModal' id="btn_confirm">مطمعنم !</button>
      </form>
      </div>
    </div>
  </div>
</div>
</main>
 











<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/js.js"></script>
<script type="text/javascript">
  let del = document.getElementsByClassName('positioner');
    let form = document.getElementById("form");
    let myModal = document.getElementById('myModal');
    let myInput = document.getElementById('myInput');
    let btncancel = document.getElementById("btn_cancel");
    let btnconfirm = document.getElementById("btn_confirm");
    let switchs = document.getElementsByClassName("switches");
    let hidden = document.getElementById("hid");
    let hidden1 = document.getElementsByClassName("hid1");

    for(let i =0;i<switchs.length;i++){
      switchs[i].addEventListener("change",function(e){
        
        e.target.form.submit();
        // console.log(e.target.form.submit());
      });
    }
let a =0;
    for(let j=0;j<=hidden1.length-1;j++){
              console.log(j);
              }

    for(let i =0;i<del.length;i++){
           del[i].addEventListener('click',(e)=>{
           
           document.getElementById("hid").value =hidden1[i].value;
          // e.preventDefault();
          console.log(hidden1[i].value);
          
        });
    }


    </script>
</body>
</html><?php /**PATH C:\wamp64\www\todolist1\views/layout/app.blade.php ENDPATH**/ ?>