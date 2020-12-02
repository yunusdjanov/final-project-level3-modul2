<?php $this->layout('layout',['title' => 'User profile', 'auth' => $auth])?>
<?php
if (!$auth->hasRole(1)){
    $auth->logOut();
    header('Location: /');
}
?>

<div class="col-md-12">
    <h1>Пользователи</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Действия</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($users as $user): ?>
        <?php
            $id = $user['id'];
            $name = $user['username'];
            $email = $user['email'];
            $role = $user['roles_mask'];
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td>
                <?php

                if ($role == 1){
                   echo  "<a href='/takeawayrole?id=$id' class='btn btn-danger'>Разжаловать</a>";
                }else{
                    echo "<a href='/assignrole?id=$id' class='btn btn-success'>Назначить администратором</a>";
                }

                ?>
                <a href="/userprofile?id=<?php echo $id; ?>" class="btn btn-info">Посмотреть</a>
                <a href="/changeuser?id=<?php echo $id; ?>" class="btn btn-warning">Редактировать</a>
                <a href="/deleteuser?id=<?php echo $id; ?>" class="btn btn-danger" onclick="return confirm('Вы уверены?');">Удалить</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>