<!DOCTYPE html>
<html lang="en">
<?php
include __DIR__ . '/../layout/header.php';  // Include the header section
include __DIR__ . '/../layout/menu.php';    // Include the body section
?>
<div class="container mt-5">
    <h1>Товары <a class="btn btn-primary" href="/products/create" role="button">Создать</a></h1>
        <?php if (!empty($products)){ ?>
        <!-- Responsive Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Товар</th>
                        <th>Цена</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product->id ?></td>
                        <td><?= $product->title ?></td>
                        <td><?= $product->price ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php } ?>
</div>
<!-- Footer -->
<?php
include __DIR__ . '/../layout/footer.php';  // Include the footer section
?>
</html>