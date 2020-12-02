<?php $this->layout('layout',['title' => 'User profile', 'auth' => $auth])?>
<?php
if ($auth->isLoggedIn()) {
    foreach ($users as $user) {
        $name = $user['username'];
    }

}else{
    header('Location:/');
}
?>

<?php echo $flash->display(); ?>
<div class="row">
    <div class="col-md-8">
        <h1>Профиль пользователя - <?php echo $name; ?></h1>
<!--        <div class="alert alert-success">Профиль обновлен</div>-->
<!---->
<!--        <div class="alert alert-danger">-->
<!--            <ul>-->
<!--                <li>Ошибка валидации</li>-->
<!--            </ul>-->
<!--        </div>-->
        <ul>
            <li><a href="/changepassword">Изменить пароль</a></li>
        </ul>
        <form action="" method="post" class="form">
            <div class="form-group">
                <label for="username">Имя</label>
                <input type="text" name="name" id="username" class="form-control" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-warning">Обновить</button>
            </div>
        </form>
    </div>
</div>