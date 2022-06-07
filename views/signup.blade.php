@extends("layout.app")
@section('content')
<div class="container sshadow-good w-25 bg-dark rounded ">
<div class="container bg-transparent">
        <div class="col-md-12 text-center">
            <span  class="text-warning">عضویت در سایت</span>
        </div>
    </div>
<form method="post" class="m-2 pt-3  d-flex flex-column jusitify-content-center align-items-center">
    <input type="hidden" name="action" value="register"/>
 <div class="form-floating m-3 w-100" >
  <input type="text" class="form-control" autocomplete="off" required id="floatingInputName"
   name="name" placeholder="نام " >
  <label for="floatingInputName">نام </label>
</div>
<div class="form-floating m-3 w-100" >
  <input type="text" class="form-control" autocomplete="off" required id="floatingInput" name="username" placeholder="نام کاربری" >
  <label for="floatingInput">نام کاربری</label>
</div>
<div class="form-floating m-3 w-100">
  <input type="password" class="form-control" id="floatingPassword1" autocomplete="off"
   required name="password" placeholder="رمز ورود " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
   title="رمز عبور باید شامل حروف بزرگ و کوچک و عدد باشد"
   onchange="check_password('floatingPassword1','alert_password')"
   size="8"
   >
  <label for="floatingPassword1">رمز ورود</label>
</div>
<div class="alert alert-warning m-1 p-3 d-none" id="alert_password" role="alert">رمز عبور باید شامل حروف بزرگ و کوچک و عدد باشد</div>
<div class="form-floating m-3 w-100">
  <input type="password" class="form-control" id="floatingPassword2" name="re-password"
   autocomplete="off" required placeholder=" تکرار رمز ورود " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
   onchange="check_password('floatingPassword2','alert_password2')"
   size="8"
   >
  <label for="floatingPassword2">تکرار رمز ورود</label>
</div>
<div class="alert alert-warning m-1 p-3 d-none" id="alert_password2" role="alert">رمز عبور باید شامل حروف بزرگ و کوچک و عدد باشد</div>
<button type="submit" class="btn btn-warning px-5 mb-2 w-50">تایید</button>

<div class="alert alert-danger m-1 p-3 {{$error_log!="" ? 'd-block':'d-none';}} " role="alert">{{$error_log}}</div>

</form>
<div class="col text-center mb-5">
        <a href="/login" class="align-self-center ">قبلا عضو شدم</a>
 </div>
  
</div>
</div>
@endsection




