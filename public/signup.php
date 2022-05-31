<?php

require("../loader.php");

use Services\Valid\Valid;
use Services\Layout\Layout;
use Services\Models\User;

$donone="d-none";

if(isset($_POST['action']) and $_POST['action']=="register"){

$valid = new Valid();

$error_log = $valid->check_signup($_POST['password'],$_POST['re-password'],$_POST['username']);


if($error_log==""){
   
        $user =new User();

        $user->username = $_POST['username'];
        $user->password =$_POST['password'];
        $user->name = $_POST['name'];

        if($Userdata = $user->create()){
            redirect("./login.php");
        }
}
else{
    $donone = "d-block";
}


} 

layout::pageHeader("عضویت");
?>
<div class="container sshadow-good w-25 bg-dark rounded ">
<div class="container bg-transparent">
        <div class="col-md-12 text-center">
            <span  class="text-warning">عضویت در سایت</span>
        </div>
    </div>
<form method="post" class="m-2 pt-3  d-flex flex-column jusitify-content-center align-items-center">
    <input type="hidden" name="action" value="register"/>
 <div class="form-floating m-3 w-100" >
  <input type="text" class="form-control" autocomplete="off" required id="floatingInputName" name="name" placeholder="نام کاربری" >
  <label for="floatingInputName">نام </label>
</div>
<div class="form-floating m-3 w-100" >
  <input type="text" class="form-control" autocomplete="off" required id="floatingInput" name="username" placeholder="نام کاربری" >
  <label for="floatingInput">نام کاربری</label>
</div>
<div class="form-floating m-3 w-100">
  <input type="password" class="form-control" id="floatingPassword" autocomplete="off" required name="password" placeholder="رمز ورود ">
  <label for="floatingPassword">رمز ورود</label>
</div>
<div class="form-floating m-3 w-100">
  <input type="password" class="form-control" id="floatingPassword" name="re-password" autocomplete="off" required placeholder=" تکرار رمز ورود ">
  <label for="floatingPassword">تکرار رمز ورود</label>
</div>
<button type="submit" class="btn btn-warning px-5 mb-2 w-50">تایید</button>
<div class="alert alert-danger m-1 p-3 <?php echo $donone;?>" role="alert"><?php if(isset ($error_log))echo $error_log; ?></div>
</form>
<div class="col text-center mb-5">
        <a href="./login.php" class="align-self-center ">قبلا عضو شدم</a>
 </div>
  
</div>
</div>




<?php
layout::pageFooter();