<?php

require("../loader.php");

use Services\Layout\Layout;
use Services\Auth\Auth;
use Services\Models\User;

$user = new User();

$donone = "d-none";

if (isset($_POST['action']) and $_POST['action'] == "login") {

    $userdata = $user->login($_POST['username'], $_POST['password']);
    if ($userdata) {
        Auth::login($userdata['id']);
        redirect("./index.php");
    } else {
         $error_log = "کاربری با این مشخصات یافت نشد!";
         $donone = "d-block";
    }
}

layout::pageHeader("ورود کاربران");

?>

<div class="container-md  mr-auto p-5 shadow p-5 mb-5 bg-dark rounded d-flex flex-column jusitify-content-center align-items-center ">

    <form method="post" autocomplete="off" class="border rounded p-5 sshadow-good">
        <!-- <input type="text" name="action" value="name" placeholder="name"/> -->
        <input type="hidden" name="action" value="login" />
        
        <div class="form-floating mt-2 ">
            <input type="text" name="username" class="form-control w-100" placeholder="نام کاربری" required />
            <label for="floatingInputName"> نام کاربری </label>
        </div>
  
        
        <br />

        <div class="form-floating  mt-2">
        <input type="password" name="password" class="form-control w-100 " placeholder="رمز عبور" required />
            <label for="floatingInputName"> رمز عبور</label>
        </div>
        
        <div class="col text-center">
            <button class="mt-3 btn btn-warning w-50 align-self-center">تایید</button>
        </div>
        <div class="alert alert-danger m-1 p-3 <?php echo $donone;?>" role="alert"><?php if(isset ($error_log))echo $error_log; ?></div>
        <div class="col text-center ">
            <a href="./signup.php" class="align-self-center mt-5 py-2">هنوز عضو نشدم !</a>
        </div>


    </form>

</div>
<?php
layout::pageFooter("");
