<?php $this->layout('layout',['title' => 'User profile', 'auth' => $auth])?>
<?php
if (!$auth->isLoggedIn()){
    header('Location:/');
}
?>

<div class="row">
    <div class="col-md-8">
        <h1>Изменить пароль</h1>
<!--        <div class="alert alert-success">Пароль обновлен</div>-->
<!---->
<!--        <div class="alert alert-danger">-->
<!--            <ul>-->
<!--                <li>Ошибка валидации</li>-->
<!--            </ul>-->
<!--        </div>-->
        <ul>
            <li><a href="/profile">Изменить профиль</a></li>
        </ul>
        <form action="changepasswordrequest" method="post" class="form">
            <div class="form-group">
                <label for="current_password">Текущий пароль</label>
                <input type="password" name="oldPassword" id="current_password" class="form-control">
            </div>
            <div class="form-group">
                <label for="current_password">Новый пароль</label>
                <input type="password" name="newPassword" id="current_password" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning">Изменить</button>
            </div>
        </form>


    </div>
</div>