<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>

<?php
$brand = new Brand();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = $_POST['category_id'];
    $brand_name = $_POST['brand_name'];
    $insert_brand = $brand->insert_brand($category_id, $brand_name);
}
?>

<style>
    select {
        margin-top: 20px;
        height: 30px;
        width: 200px;
        border-radius: 5px;
    }
</style>

<div class="admin-content-right">
    <div class="admin-content-right-category__add">
        <h1>Thêm Danh Mục</h1>
        <form action="" method="POST">
            <select name="category_id" id="">
                <option value="#">--Chọn danh mục--</option>
                <?php
                $show_category = $brand->show_category();
                if ($show_category) {
                    while ($result = $show_category->fetch_assoc()) {

                ?>
                        <option value="<?php echo $result['category_id']; ?>"><?php echo $result['category_name']; ?></option>
                <?php

                    }
                }
                ?>
            </select>
            <br>
            <input required type="text" name="brand_name" id="" placeholder="Nhập tên loại sản phẩm" />
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>