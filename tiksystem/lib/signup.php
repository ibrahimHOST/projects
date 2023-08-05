<?php

if (isset($_POST['signup'])) {
    require('header_login.php');

?>

    <div class="main d-flex justify-content-center align-items-center">
        <div class="alert alert-success " role="alert">
            <h3>تم تسجيلك بنجاح <i class="fa-solid fa-spinner"></i></h3>
        </div>
    </div>
<?php
    require('footer.php');
    header("Refresh: 1; url=index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" style="direction: rtl;">

<head>
    <!-- <link rel="stylesheet" href="../css/login.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bondi.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <!-- begin script -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
    <!--  end script  -->
    <header>
        <nav class="navbar navbar-expand-lg sticky-top ">
            <div class="container">
                <a class="navbar-brand p-lg-3 ">تواصل</a>
            </div>
        </nav>
    </header>
    <section>
        <div class="main d-flex justify-content-center align-items-center  ">
            <form class="obt-form" method="POST">
                <div class="mb-3">
                    <label for="name-user" class="form-label">الاسم</label>
                    <input type="text" class="form-control" id="name-user">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">البريدالإلكتروني</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn b-opt" name="signup">تسجيل</button>
            </form>
        </div>
    </section>
</body>
<?php require('footer.php');
?>