<?php include ROOT.'/views/layouts/header.php'; ?>

<style>
    #author {
        margin-left: 15%;
    }
</style>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <div id="company_info">
                        <h2>Автор:</h2> 
                        <p>Коблев Р. А.</p>
                        <h2>Группа:</h2> 
                        <p>ВПР41</p>
                    </div>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Фото</h2>
                    <div id="author"><img src="../template/images/author.jpg" width="640" height="360"></div>
                </div><!--features_items-->

            </div>
        </div>
    </div>
</section>

<?php for ($i=0; $i < 7; $i++) { ?>
    <br>
<?php } ?>


<?php include ROOT.'/views/layouts/footer.php'; ?>
