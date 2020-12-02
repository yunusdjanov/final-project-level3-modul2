<?php $this->layout('layout',['title' => 'User profile', 'auth' => $auth])?>
<?php
if (!$users){
    header('Location: /');
}
?>

<div class="row">
    <div class="col-md-12">
        <h1>Данные пользователя</h1>
        <table class="table">
            <thead>
            <th>ID</th>
            <th>Имя</th>
            </thead>

            <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['username'] ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>
</div>

