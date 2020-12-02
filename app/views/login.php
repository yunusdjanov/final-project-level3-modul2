<?php $this->layout('layout',['title' => 'User profile', 'auth' => $auth])?>


<form class="form-signin" action="" method="post">

    <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>

    <?php echo $flash->display(); ?>

    <div class="form-group">
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" id="password" placeholder="Пароль" required>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>