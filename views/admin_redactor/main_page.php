<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<style>
    .change-page-btn {
        
    }
</style>

<section>
    <div class="container">
        <div class="row">

            <br>
            <form action="#" method="post" enctype="multipart/form-data">
                <h2>Главная страница</h2>
                <textarea name="main_page" rows="30"><?php echo $content ?></textarea>
                
                <br><br>
                <input type="submit" name="change_main_page" class="btn btn-default pull-right" value="Изменить">
            </form>
        </div>
    </div>
</section>
