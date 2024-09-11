<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<h1>Welcome to the Home Page</h1>
<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->name ?> (<?= $user->email ?>)</li>
    <?php endforeach; ?>
</ul>
</body>
</html>
