<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .logo{
            width: 110px;
            margin-left:8% ;
            cursor: pointer;
        }
        .navbar {
            width: 85%;
            margin:auto;
            padding:15px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar ul li {
            list-style: none;
            display: inline-block;
            margin:0 15px;
            position: relative;
        }

        .navbar ul li a{
            text-decoration: none;
            color: black;
            text-transform: uppercase;
        }
        .navbar ul li ::after{
            content: '';
            height:3px;
            width: 0;
            background: #009688;
            position: absolute;
            left:0;
            bottom:-10px;
            transition: 0.5s;
        }
        .navbar ul li :hover::after{
            width:100%;
        }
    </style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="/images/logo.PNG" class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#">Course</a></li>
                <li><a href="#">Updates</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>

    <?php
    // Example of dynamically generating navigation menu items using PHP
    $menuItems = array(
        array("label" => "Home", "url" => "index.php"),
        array("label" => "Login", "url" => "login.php"),
        array("label" => "Course", "url" => "#"),
        array("label" => "Updates", "url" => "#"),
        array("label" => "About", "url" => "#"),
        array("label" => "Contact", "url" => "contact.php")
    );

    echo '<div class="navbar">';
    echo '<img src="/images/logo.PNG" class="logo">';
    echo '<ul>';
    foreach ($menuItems as $item) {
        echo '<li><a href="' . $item["url"] . '">' . $item["label"] . '</a></li>';
    }
    echo '</ul>';
    echo '</div>';
    ?>

</body>
</html>