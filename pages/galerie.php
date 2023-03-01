<?php require_once '../layout/header.php' ?>
<?php require_once '../layout/nav.php' ?>

<section class="body-galerie">
    <div id="popup-bg" >
        <div id="popup-content">
            <div id="popup-close">
                <ion-icon name="close"></ion-icon>
            </div>
            <img id="popup-img" src="#" alt="">
        </div>
    </div>

    <div id="filters">
        <div id="all">Tout</div>
        <div id="cheese">Fromage</div>
        <div id="starter">Entrée</div>
        <div  id="main">Plat</div>
        <div id="dessert">Dessert</div> 
    </div>
    

    <div id="grid" >
        <div class="grid-item" >
            <img src="../Media/asparagus-gaa5bc2538_640.jpg" alt="plat avec viande et légumes"  class="grid-img active" data-main>
        </div>
        <div class="grid-item" >
            <img src="../Media/eclair-g41f2b224f_640.jpg" alt="Dessert" data-dessert class="grid-img active">
        </div>
        <div class="grid-item">
            <img src="../Media/hors-doeuvre-2175326__340.jpg" alt="hors-d'oeuvres" data-starter class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/xmas-gcf0912330_640.jpg" alt="table avec appareil à fondue" data-cheese data-main class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/pizza-g02cfd1139_640.jpg" alt="pizza" data-main class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/fondue-gfbc507485_640.jpg" alt="fondue savoyarde" data-cheese data-main class="grid-img active">
        </div>
        <div class="grid-item">
            <img src="../Media/cheese-platter-g15f6172a3_640.jpg" alt="plateau de fromage" data-cheese data-dessert class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/charcuterie-gd2c59b45d_640.jpg" alt="plateau de charcuterie" data-main class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/tapas-gcf82ec276_640.jpg" alt="tapas" data-starter class="grid-img active">
        </div>
        <div class="grid-item">
            <img src="../Media/salad-g319afc9fb_640.jpg" alt="salade" data-starter class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/raclette-ge3ad1e454_640.jpg" alt="raclette" data-cheese data-main class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/jonathan-borba-uB7q7aipU2o-unsplash.jpg" alt="chef qui cuisine"  class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/scallops-gf30b86f4f_640.jpg" alt="entrée poisson" data-starter class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/burger-g757d28ebf_640.jpg" alt="hamburger" data-main class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/salad-g6996bfcdc_640.jpg" alt="salade préparée" data-main class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/meat-skewer-g21bd9cc0b_640.jpg" alt="steack frites" data-main class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/loaf-gb92e780d7_640.jpg" alt=" oeuf sur le plat" data-starter class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/pea-soup-g08e294fcb_640.jpg" alt=" soupe" data-starter class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/ice-cream-g5c9502d1c_640.jpg" alt=" glace" data-dessert class="grid-img active">
        </div>
        <div class="grid-item" >
            <img src="../Media/pork-g82613a161_640.jpg" alt=" plat de viande" data-main class="grid-img active">
        </div>
    </div>


</section>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!--FOOTER-->

<?php require_once '../layout/footer.php' ?>