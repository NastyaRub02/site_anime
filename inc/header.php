<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link fonts -->
    <!-- roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- link -->
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/media.css">

    <!-- slick -->
    

    <title><?php if(isset($pageTitle)){echo $pageTitle;}?></title> 
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="container_header">
                
            <div class="header_logo">
            <img src="../../img/header/logo.svg" alt="logo" class="header_logo">
            </div>

            <nav class="header_nav" id="myheader_nav">
            <ul class="header_list">
                <li class="header_list_li"><a href="../index.php">главная</a></li>
                <li class="header_list_li"><a href="../php/anime.php">аниме</a></li>
                <li class="header_list_li"><a href="../php/anime_review.php">оставить рецензию</a></li>
                <li class="header_list_li"><a href="#">видео</a></li>
                
                <a href="#" id="menu" class="icon-burger">&#9776;</a>
                <p class="text_auth_exit text_auth_exit_burger"><a href="../php/register.php">authorization</a></p>
            </ul>
            </nav>

            <a href=""><div class="auth_exit">
            <img src="../../img/header/logo_door.svg" alt="logo_door">

            <p class="text_auth_exit"><a href="../php/register.php">authorization</a></p>
            </div></a>
        
            </div>
        </div>
    </header>

</html>