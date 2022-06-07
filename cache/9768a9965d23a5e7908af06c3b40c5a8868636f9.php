

<?php $__env->startSection("content"); ?>

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
        <div class="alert alert-danger m-1 p-3 <?php echo e($error_log!= "" ?  "d-block" :  "d-none"); ?> " role="alert"><?php echo e($error_log); ?> </div>
        <div class="col text-center ">
            <a href="/signup" class="align-self-center mt-5 py-2">هنوز عضو نشدم !</a>
        </div>


    </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\todolist1\views/login.blade.php ENDPATH**/ ?>