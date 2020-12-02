<?php $this->layout('layout',['title' => 'User profile', 'auth' => $auth])?>
<?php echo $flash->display(); ?>
<form class="form-signing" action="" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>

<!--    <div class="alert alert-danger">-->
<!--        <ul>-->
<!--            <li>Ошибка валидации 1</li>-->
<!--            <li>Ошибка валидации 2</li>-->
<!--            <li>Ошибка валидации 3</li>-->
<!--        </ul>-->
<!--    </div>-->
<!---->
<!--    <div class="alert alert-success">-->
<!--        Успешный успех-->
<!--    </div>-->
<!---->
<!--    <div class="alert alert-info">-->
<!--        Информация-->
<!--    </div>-->

    <div class="form-group">
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <input type="text" name="name" class="form-control" id="email" placeholder="Ваше имя" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" id="password" placeholder="Пароль" required>
    </div>

    <div class="form-group">
        <input type="password" name="password_again" class="form-control" id="password" placeholder="Повторите пароль" required>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>
