<!DOCTYPE html>
<html lang="en">
<?php
include __DIR__ . '/../layout/header.php';  // Include the header section
include __DIR__ . '/../layout/menu.php';    // Include the body section

if (!empty($errors)){
    print_r($errors);
}
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="/orders/store" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="user_id" class="form-label">Пользователи</label>
                    <select id="user_id" name="user_id" class="form-select" aria-label="Default select example">
                        <option selected>Выбрать</option>
                        <?php if (!empty($users)){ ?>
                            <?php foreach ($users as $user): ?>
                                <option value="<?= $user->id ?>"><?= $user->first_name ?></option>
                            <?php endforeach; ?>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="product_id" class="form-label">Товары</label>
                    <select id="product_id" name="product_id" class="form-select" aria-label="Default select example">
                        <option selected>Выбрать</option>
                        <?php if (!empty($products)){ ?>
                            <?php foreach ($products as $product): ?>
                                <option value="<?= $product->id ?>"><?= $product->title ?></option>
                            <?php endforeach; ?>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Создать</button>
            </form>
        </div>
    </div>
</div>
<!-- Footer -->
<?php
include __DIR__ . '/../layout/footer.php';  // Include the footer section
?>
</html>