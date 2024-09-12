<!DOCTYPE html>
<html lang="en">
<?php
include 'layout/header.php';  // Include the header section
include 'layout/menu.php';    // Include the body section
?>
<div class="container mt-5">
    <h1>Покупатели</h1>
        <?php if (!empty($users)){ ?>
        <!-- Responsive Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Товар</th>
                        <th>Цена</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user->first_name ?></td>
                        <td><?= $user->second_name ?></td>
                        <td><?= $user->title ?></td>
                        <td><?= $user->price ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php } ?>
</div>
<!-- Footer -->
<?php
include 'layout/footer.php';  // Include the footer section
?>
</html>