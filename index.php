<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('parts/head.php'); ?>
    <title>Nuits insolites, prestations de luxe, bienvenue aux hôtels 4 Eléments</title>
    <meta name="description" content="Le luxe est une aventure, nous vous proposons des nuits insolites dans nos 4 hôtels thématiques, venez découvrir l'AIR, l'EAU, la TERRE et le FEU">

</head>

<body>
    <?php include('parts/header.php'); ?>
    <!-- SLIDER -->
    <div class="slider large-block small-none">
        <img src="img/img-hotel-terre-01.jpg" alt="Photo d'une partie d'un hôtel dans une grotte" class="large-100"/>
        <div class="slogan large-25 large-margin">
            <h2>Hôtel : Terre</h2>
            <p>Nuit insolite dans une grotte</p>
            <a href="page-hotel-terre.php" class="btn">Découvrir</a>
            <div class="bloc-circle large-flex large-justify-center">
                <div class="circle active"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
    </div>
    <div class="slider large-none small-none">
        <img src="img/img-hotel-eau-01.jpg" alt="Photo d'une partie d'un hôtel dans l'océan" class="large-100" />
        <div class="slogan large-25 large-margin">
            <h2>Hôtel : Eau</h2>
            <p>Nuit insolite dans l'océan</p>
            <a href="page-hotel-eau.php" class="btn">Découvrir</a>
            <div class="bloc-circle large-flex large-justify-center">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
    </div>
    <div class="slider large-none small-none">
        <img src="img/img-hotel-feu-01.jpg" alt="Photo de plusieurs chambres avec toit vitré au milieu de la neige" class="large-100" />
        <div class="slogan large-25 large-margin">
            <h2>Hôtel : Feu</h2>
            <p>Nuit insolite près des volcans</p>
            <a href="page-hotel-feu.php" class="btn">Découvrir</a>
            <div class="bloc-circle large-flex large-justify-center">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
    </div>
    <div class="slider large-none small-none">
        <img src="img/img-hotel-air-02.jpg" alt="Photo d'un hôtel au milieu des arbres" class="large-100" />
        <div class="slogan large-25">
            <h2>Hôtel : Air</h2>
            <p>Nuit insolite au milieu des arbres</p>
            <a href="page-hotel-air.php" class="btn">Découvrir</a>
            <div class="bloc-circle large-flex large-justify-center">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
    </div>
    <main>
        <!-- BLOC RESERVER -->
        <div class="bloc-reserver small-container">
            <h2 class="small-text-center large-none small-block">Quelle est votre destination insolite ?</h2>
            <form action="traitement.php" method="post">
                <div class="form large-flex large-justify-center large-align-center">
                    <div class="small-100">
                        <select>
                            <option value="terre">Hôtel : TERRE</option>
                            <option value="air">Hôtel : AIR</option>
                            <option value="eau">Hôtel : EAU</option>
                            <option value="feu">Hôtel : FEU</option>
                        </select>
                    </div>
                    <div class="small-100">
                        <label>Arrivée : 
                            <input type="date" name="date-arrivee" />
                        </label>
                    </div>
                    <div class="small-100">
                        <label>Départ : 
                            <input type="date" name="date-depart" />
                        </label>
                    </div>
                    <div class="small-100">
                        <select>
                            <option value="p1">1 Personne</option>
                            <option value="p2">2 Personnes</option>
                            <option value="p3">3 Personnes</option>
                            <option value="p4">4 Personnes</option>
                        </select>
                    </div>
                    <div class="small-100">
                        <a href="page-reservation.php" title="Vers la page de réservation d'une chambre" class="btn">Réserver</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- BLOC PRESENTATION -->
        <div class="bg-blue bloc-presentation">
            <div class="large-container small-container large-flex large-justify-between">
                <div class="large-50 small-none">
                    <img src="img/img-presentation-min.png" alt="Photo vue d'une chambre d'un hôtel" class="large-100" />
                </div>
                <article class="large-50 small-100">
                    <h2 class="small-text-center">Le luxe est notre aventure</h2>
                    <p>Depuis l'ouverture de ses 4 hôtels en 2012, 4 Eléments a imposé sa marque : des hôtels d'exception dans des lieux d'exception. Nous sommes inouïs. Tout comme vous.</p>
                    <p>4 Eléments, c'est 4 hôtels pour 4 éléments : terre, eau, air feu. 4 hôtels insolites bâtis sur des lieux inattendus de la planète pour la construction desquels nous avons du prouver que nous étions les meilleurs, les plus inventifs et, en même temps, les plus à l'écoute de l'identité du site choisi. Que nous voulions révolutionner le tourisme : le luxe, l'aventure et la vision à long terme dans un même projet.</p>
                    <p>Dans chacun de nos hôtels, vous jouirez d'un environnement unique, d'un service unique avec la rigueur de l'hôtellerie de luxe et la saveur d'une proximité de tous les jours avec les habitants.</p>
                    <p>Vous découvrirez les environs à l'aide de guides ethnologues, astrophysiciens, géologues, climatologues... Ce n'est pas un « tour » que nous vous proposons, c'est une révolution.</p>
                    <a href="page-concept.php" title="Pour en savoir plus sur notre concept de 4 hôtels thématiques" class="btn">En savoir plus sur notre concept</a>
                </article>
            </div>
        </div>
        <!-- BLOC 4 HÔTELS -->
        <div class="bg-grey bloc-hotels">
            <div class="large-container small-container">
                <h2 class="large-text-center">Les hôtels 4 éléments</h2>
                <div class="large-flex large-justify-center">
                    <div class="card large-30 small-100">
                        <img src="img/picto/picto-eau.svg" alt="Pictogramme eau" />
                        <h3>Eau</h3>
                        <p>L'hôtel Eau est située sur une île de 2 kilomètres carrés très exactement équidistante de Vladivostok et de Los Angeles. C'est le milieu du Pacifique. Vous y disposerez de votre plage, de votre bateau et de votre majordome privés. Votre chambre est un caisson immergé à deux mètres sous l'eau.</p>
                        <a href="page-hotel-eau.php" title="Retrouvez toutes les informations de l'hôtel EAU" class="btn">En savoir plus</a>
                    </div>
                    <div class="card large-30 small-100">
                        <img src="img/picto/picto-air.svg" alt="Pictogramme air" />
                        <h3>Air</h3>
                        <p>L'hôtel Air se situe à la frontière du Brésil et du Pérou. C'est un concept architectural innovant qui a permis une implantation à la cîme de la forêt pour offrir un panorama vertigineux et cotoyer chaque matin, de votre chambre (avec ou sans piscine), les oiseaux à votre réveil.  </p>
                        <a href="page-hotel-air.php" title="Retrouvez toutes les informations de l'hôtel AIR" class="btn">En savoir plus</a>
                    </div>
                    <div class="card large-30 small-100">
                        <img src="img/picto/picto-terre.svg" alt="Pictogramme terre" />
                        <h3>Terre</h3>
                        <p>L'hôtel Terre est situé dans des grottes naturelles en Thaïlande. Retaillées et aménagées avec beaucoup de soin, les chambres de l'hôtel vous offriront soit la fraîcheur et l'apaisement à près de vingt mètres de profondeur, soit un hâvre de paix ouvrant sur  l'horizon de la mer au loin.</p>
                        <a href="page-hotel-terre.php" title="Retrouvez toutes les informations de l'hôtel TERRE" class="btn">En savoir plus</a>
                    </div>
                    <div class="card large-30 small-100">
                        <img src="img/picto/picto-feu.svg" alt="Pictogramme feu" />
                        <h3>Feu</h3>
                        <p>L'hôtel Feu ne se situe bien sûr pas sur un volcan, mais en Finlande. Feu de la terre volcanique crachant non loin de là ses geysers, feu des volcans à l'horizon et, bien entendu, feu des aurores boréales que vous pourrez admirer tous les soirs par le toit vitré de votre chambre.</p>
                        <a href="page-hotel-feu.php" title="Retrouvez toutes les informations de l'hôtel FEU" class="btn">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOC ARCHITECTURES -->
        <div class="bg-blue bloc-architectures">
            <div class="large-container small-container large-flex large-justify-between">
                <article class="large-50 small-100">
                    <h2 class="small-text-center">Au service des plus grands architectes</h2>
                    <p>4 Eléments se met au service des plus grands noms de l'architecture mondiale et non le contraire. En effet, nous souhaitons que les artistes - c'est-à-dire aussi bien les architectes d'intérieur qui travaillent à nos côtés - se sentent le plus libres d'innover pour un monde plus cohérent et plus aventureux. </p>
                    <p>Les hôtels 4 Eléments sont donc leur terrain de jeu. Les règles que nous leur imposont sont de deux ordres. Travailler en adéquation avec le lieu et l'élément choisi. Garder à l'esprit que vous faîtes partie de l'élément choisi.</p>
                    <a href="page-architectures.php" title="Découvrez nos architectures uniques réaliées par les plus grands architectes" class="btn">En savoir plus sur les architectes</a>
                </article>
                <div class="large-50 small-none">
                    <img src="img/img-hotel-architecture.jpg" alt="Photo vue d'une chambre d'un hôtel" class="large-100" />
                </div>
            </div>
        </div>
        <!-- BLOC TEMOIGNAGE -->
        <div class="large-container bloc-temoignage small-none">
            <h2 class="large-text-center">Témoignage : Trinh Xuan Thuan, co-fondateur de 4 Eléments</h2>
            <div class="bloc-image">
                <img src="img/img-cofondateur-03.jpg" alt="Image du co-fondateur de 4 éléments Trinh Xuan Thuan" class="large-50" />
                <blockquote>
                    <p>« L'architecture innovante est un pas supplémentaire vers l'exploration de l'Espace, c'est à dire l'extension de notre civilisation dans ce qu'elle a de meilleur.</p>
                    <p>S'immerger dans un de nos hôtels, c'est vivre une expérience sensorielle, c'est pouvoir se ressourcer au contact des matières des 4 éléments. C'est se découvrir à l'unisson de la terre, de l'air, de l'eau, du feu. »</p>
                </blockquote>
            </div>
        </div>
    </main>
    <?php include('parts/footer.php'); ?>
    <script src="js/slider.js"></script>
</body>

</html>