<?php //include "session.php"; 
require('header_login.php');

if (isset($_POST['signin'])) {
    header('location: home.php');
    exit;
}
?>

<section>
    <div class="main d-flex justify-content-center align-items-center">
        <form class="obt-form" method="POST">
            <h2 class=" pb-2">تسجيل الدخول</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">البريدالإلكتروني</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <p><a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">نسيت كلمة المرور؟</a></p>
            <button type="submit" class="btn b-opt" name="signin">تسجيل دخول</button>
            <button type="button" class="btn btn-secondary bb-emp">تسجيل دخول للموظفين </button>
        </form>
    </div>
</section>
<?php require('footer.php') ?>