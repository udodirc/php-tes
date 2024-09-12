<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<h1>Welcome to the Home Page</h1>
<ul>
    <?php if (!empty($users)){ ?>
        <?php foreach ($users as $user): ?>
            <li><?= $user->first_name ?> (<?= $user->second_name ?>)</li>
        <?php endforeach; ?>
    <?php } ?>
</ul>
</body>
</html>
