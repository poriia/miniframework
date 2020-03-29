<?php require("views/client/partials/header.php"); ?>
<h1>Users List : </h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li>
            <?= $user->name; ?>
        </li>
    <?php endforeach; ?>
</ul>
<form action="user/store" method="POST">
    <input type="text" name="name">
    <button type="submit">save</button>
</form>
<?php require("views/client/partials/footer.php"); ?>
