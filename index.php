<?php require_once 'layout/header.php' ?>
<?php require_once 'layout/nav.php' ?>

    <main>

  <div id="SlideAccueil" class=" carousel slide slide-accueil   mx-auto">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#SlideAccueil" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#SlideAccueil" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#SlideAccueil" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#SlideAccueil" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#SlideAccueil" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner slide-accueil  ">
        <div class="carousel-item active slide-accueil " >
        <img src="./Media/jason-leung-poI7DelFiVA-unsplash.jpg" class=" w-100" alt="salle de restaurant">
        <div class="carousel-caption d-none d-md-block">
            <h5>Salle de restaurant</h5>
            <p>Salle de restaurant pouvant accueillir jusqu'a 150 clients.</p>
        </div>
        </div>
        <div class="carousel-item slide-accueil ">
        <img src="./Media/hd-wallpaper-g5d20ceffd_640.jpg" class="d-block w-100" alt="Terrasse du restaurant">
        <div class="carousel-caption d-none d-md-block">
            <h5>Terrasse du restaurant</h5>
            <p>Le restaurant vous propose une terrasse avec une magnifique vue sur les montagnes</p>
        </div>
        </div>
        <div class="carousel-item slide-accueil ">
        <img src="./Media/tapas-gcf82ec276_640.jpg" class="d-block w-100" alt="Plateau">
        <div class="carousel-caption d-none d-md-block">
            <h5>Plateau de spécialités locales</h5>
            <p>Plateau comprenant de la charcuterie et de fromages locaux</p>
        </div>
        </div>
        <div class="carousel-item slide-accueil ">
        <img src="./Media/raclette-ge3ad1e454_640.jpg" class="d-block w-100" alt="Raclette">
        <div class="carousel-caption d-none d-md-block">
            <h5>Raclette savoyarde</h5>
            <p>Raclette composé de plusieurs fromages : Morbier, Roblochon, bleu de Gex</p>
        </div>
        </div>
        <div class="carousel-item slide-accueil ">
        <img src="./Media/fondue-gfbc507485_640.jpg" class="d-block w-100" alt="Fondue">
        <div class="carousel-caption d-none d-md-block">
            <h5>Fondue savoyarde</h5>
            <p>Fondue savoyarde accompagnée de plateau de charcuterie</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#SlideAccueil" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#SlideAccueil" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>

        <div>
            <div class="container text-center ">
                <div class="row  row-cols-lg-6 g-1 g-lg-2 m-5">
                    <div class="col">
                        <div class="p-2">
                            <img src="/Media/hors-doeuvre-2175326__340.jpg" alt="spécialités" class="img-line">
                            <p>Spécialités locales</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-2">
                            <img src="/Media/drinks-g285207c18_640.jpg" alt="Evènements" class="img-line">
                            <p>Evènements</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-2">
                            <img src="/Media/restaurant-g83398f374_640.jpg" alt="Salle de réception" class="img-line">
                            <p>Espace de réception</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-2">
                            <img src="/Media/lunch-ge3b475243_640.jpg" alt=" plats à emporter" class="img-line">
                            <p>Plats à emporter</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-2">
                            <img src="/Media/man-g865a3b1d7_640.jpg" alt="chef cuisinier" class="img-line" >
                            <p>A propos de nous</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-2">
                            <img src="/Media/envelopes-g09736165b_640.jpg" alt="enveloppes" class="img-line">
                            <p>Contactez-nous</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="mb-5">
                <p href=# class="reservation mx-auto text-center py-3">Réservation</p>
            </div>
        </div>

    </main>


<!--FOOTER-->

<?php require_once 'layout/footer.php' ?>