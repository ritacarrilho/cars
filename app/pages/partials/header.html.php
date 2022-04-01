<!-- Header : equivalente ao View em MVC -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $html_title ?> - Carz.com</title>

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
                        <?php require_once PATH_ROOT .'app'. DS .'pages'. DS . 'partials' . DS . 'inc' . DS . 'menu.inc.php'; ?>
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