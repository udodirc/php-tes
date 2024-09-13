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
            <form action="/products/store" method="post" enctype="multipart/form-data">
<!--                <div class="mb-3">-->
<!--                    <label for="title" class="form-label">Пользователи</label>-->
<!--                    <select id="user" name="user" class="form-select" aria-label="Default select example">-->
<!--                        <option selected>Выбрать</option>-->
<!--                        --><?php //if (!empty($users)){ ?>
<!--                            --><?php //foreach ($users as $user): ?>
<!--                                <option value="--><?php //= $user->id ?><!--">--><?php //= $user->first_name ?><!--</option>-->
<!--                            --><?php //endforeach; ?>
<!--                        --><?php //} ?>
<!--                    </select>-->
<!--                </div>-->
                <div class="mb-3">
                    <label for="title" class="form-label">Название</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Введите название">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Цена</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Введите цену">
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