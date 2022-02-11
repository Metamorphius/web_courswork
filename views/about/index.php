<?php include ROOT.'/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <div id="company_info">
                        <h2>Адрес:</h2> 
                        <p>Ростов-на-Дону, ул.Батуринаская 159/78</p>
                        <h2>Телефон:</h2> 
                        <p>+7(988)-568-49-38</p>
                    </div>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Наш адрес на карте</h2>
                    
                    <div id="map" style="position:relative;overflow:hidden;">
                        <a href="https://yandex.ru/maps/39/rostov-na-donu/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Ростов‑на‑Дону</a>
                        <a href="https://yandex.ru/maps/39/rostov-na-donu/house/baturinskaya_ulitsa_159_78/Z0AYcANpT0YEQFptfX5xcHRkbA==/?ll=39.650352%2C47.201753&utm_medium=mapframe&utm_source=maps&z=18.71" style="color:#eee;font-size:12px;position:absolute;top:14px;">Батуринская улица, 159/78 — Яндекс.Карты</a>
                        <iframe src="https://yandex.ru/map-widget/v1/-/CCUybSQ3dD" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                    </div>
                    

                </div><!--features_items-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>
