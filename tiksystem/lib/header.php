<!DOCTYPE html>
<html lang="en" style="direction: rtl;">

<head>
    <!-- <link rel="stylesheet" href="../css/login.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bondi.css">
    <link rel="stylesheet" href="../css/home_mian.css">
    <link rel="icon" href="../icons/square_blank_message_icon_251621.png">
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
        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container">
                <a class="navbar-brand p-lg-3 ">تواصل</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="main">
                    <div class="navbar-nav ">
                        <a class="nav-link p-lg-3 <?php if ($_SERVER['REQUEST_URI'] === '/tiksystem/lib/home.php') echo "active"; ?>" aria-current="home.php" href="home.php">الرئيسية</a>
                        <a class="nav-link p-lg-3 <?php if ($_SERVER['REQUEST_URI'] === '/tiksystem/lib/ticket.php') echo "active"; ?>" aria-current="ticket.php" href="ticket.php">انشاء تذكرة جديدة</a>
                        <a class="nav-link p-lg-3 <?php if ($_SERVER['REQUEST_URI'] === '/tiksystem/lib/view_tickets.php') echo "active"; ?>" aria-current="view_tickets.php" href="view_tickets.php">التذاكر</a>
                    </div>
                    <img src="" alt="">
                </div>
                <a class="sin-uot-my" href="logout.php" data-bs-target="#main">
                    <i class="fa-solid fa-power-off" title="تسجيل خروج"></i>
                </a>
            </div>
        </nav>
    </header>