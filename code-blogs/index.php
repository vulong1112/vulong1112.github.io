<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   

</head>
<body>
    <div class="wrapper">
        <?php 
        session_start();
        include("admincp/config/config.php");
        include("./pages/menu.php");
        include("./pages/banner.php");
        include("./pages/main.php");
        include("./pages/footer.php")
        ?>
    </div>
    
</body>
</html>