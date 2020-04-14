<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    if (!isset($_COOKIE['email'])) {
        header("Location: login.php");
        exit();
    }

    ?>
    <nav class="navbar fixed-top navbar-expand-md bg-dark custom-navbar navbar-dark">
        <img class="navbar-brand " src="https://scontent-hkt1-1.xx.fbcdn.net/v/t1.0-9/84248416_2511972925729333_4913538501833654272_n.jpg?_nc_cat=102&_nc_sid=85a577&_nc_ohc=PapX4_DEZTQAX8pREqk&_nc_ht=scontent-hkt1-1.xx&oh=7eca3f411f34038e403a00b06bda83d2&oe=5EBC69A0" id="logo_custom" width="5%" alt="logo">
        <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="#offer"><b>About</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><b>Create survey</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php"><b>Logout</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
    

    </div>

</body>

</html>