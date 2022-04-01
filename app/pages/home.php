<!-- Equivalente à View em MVC -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Carz</title>

    <!-- Polices Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Raleway:wght@200;400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="logo">Mon Site</div>

                <div class="main-menu-w">
                    <button type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <nav>
                        <!-- Emmet: ul>(li>a[href="#lien$"]{Lien $})*5 -->
                        <ul>
                            <li><a href="#lien1">Lien 1</a></li>
                            <li><a href="#lien2">Lien 2</a></li>
                            <li><a href="#lien3">Lien 3</a></li>
                            <li>
                                <a href="#lien4">Lien 4</a>
                                <ul>
                                    <li><a href="#lien4-1">Lien 4-1</a></li>
                                    <li>
                                        <a href="#lien4-2">Lien 4-2</a>
                                        <ul>
                                            <li><a href="#lien4-2-1">Lien 4-2-1</a></li>
                                            <li>
                                                <a href="#lien4-2-2">Lien 4-2-2</a>
                                                <ul>
                                                    <li><a href="#lien4-2-2-1">Lien 4-2-2-1</a></li>
                                                    <li><a href="#lien4-2-2-2">Lien 4-2-2-2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#lien4-3">Lien 4-3</a></li>
                                    <li><a href="#lien4-4">Lien 4-4</a></li>
                                </ul>
                            </li>
                            <li><a href="#lien5">Lien 5</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/picture -->
        <picture class="photo-frame">
            <source media="(max-width: 430px)" srcset="./img/landscape-01-450.jpg">
            <source media="(max-width: 750px)" srcset="./img/landscape-01-768.jpg">
            <source media="(max-width: 980px)" srcset="./img/landscape-01-992.jpg">

            <img src="./img/landscape-01.jpg" alt="La petite maison dans la montagne">
        </picture>
    </header>

    <main>
        <div class="container welcome-part">
            <section>
                <h1 class="h3">Bonjour, ô grand visiteur</h1>
                <p>
                    Lorem ipsum dolor, <a href="#">sit amet consectetur</a> adipisicing elit. Perferendis non vel
                    corrupti, quae voluptas itaque
                    quibusdam aliquam fugiat perspiciatis. Veritatis eius pariatur sapiente facilis accusantium rem
                    illum sequi
                    adipisci voluptas.
                </p>
            </section>

            <section>
                <h2 class="h3">Derniers articles</h2>
                <ol class="latest-articles">
                    <li>
                        <a href="#">
                            <div class="article-info">
                                <h3 class="h6">Ferrari 488 GTB Coupé</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores facilis aperiam
                                    debitis, voluptate quo.
                                </p>
                            </div>

                            <div class="article-photo">
                                <div class="photo-frame">
                                    <img src="./img/cars/ferrari-488-gtb-coupe.jpg" alt="Ferrari 488 GTB Coupé">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="article-info">
                                <h3 class="h6">Bugatti Veyron</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores facilis aperiam
                                    debitis, voluptate quo.
                                </p>
                            </div>

                            <div class="article-photo">
                                <div class="photo-frame">
                                    <img src="./img/cars/bugatti-veyron.jpg" alt="Bugatti Veyron">
                                </div>
                            </div>
                        </a>
                    </li>
                </ol>
            </section>
        </div>

        <section class="section-highlight">
            <div class="container">
                <h2 class="h3">Restez informés</h2>
                <p>Inscrivez-vous à la lettre d'information</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-top">
            <div class="container">
                <address>
                    <p>
                        <span class="h4">Mon Site</span>
                        Rue de Châteaubriand<br>
                        66270 LE SOLER
                    </p>
                    <p>
                        Tel: <a href="tel:0468921214">0468921214</a>
                    </p>
                </address>

                <div>
                    <div class="h4">Plan du Site</div>
                    <ul>
                        <li><a href="#lien1">Lien 1</a></li>
                        <li><a href="#lien2">Lien 2</a></li>
                        <li><a href="#lien3">Lien 3</a></li>
                        <li><a href="#lien4">Lien 4</a></li>
                        <li><a href="#lien5">Lien 5</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container footer-bottom">
            &copy;2022 L'IDEM - <a href="#">CGU</a> - <a href="#">Mentions légales</a>
        </div>
    </footer>
</body>

</html>