
<?php if( !session_id() ) @session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title><?=$this->e($title)?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">User Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <?php if($auth->hasRole(1)):?>
                    <li class="nav-item">
                        <a href="/admin" class="nav-link btn btn-success">Управления пользователями</a>
            <?php endif;?>
        </ul>
        <?php if(!$auth->isLoggedIn()):?>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/login" class="nav-link">Войти</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link">Регистрация</a>
            </li>
        </ul>
        <?php endif;?>
        <?php if($auth->isLoggedIn()):?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/profile" class="nav-link">Профиль</a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">Выйти</a>
                </li>
            </ul>
        <?php endif;?>

    </div>
</nav>

<div class="container">



    <?=$this->section('content')?>

</div>
</body>
</html>