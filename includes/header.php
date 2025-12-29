<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--découverte de l'opérateur ternaire qui remplace :   
    if (isset($pageTitle)) {
    echo $pageTitle;
    } else {
    echo "Mon Super Site de Jeux";
    }
    OU SINON mais compliquer à comprendre pour l'insant le :
    --Null Coalescing Operator.--

    --echo $pageTitle ?? "Mon Super Site";--

    -->
    <title><?php echo isset($pageTitle) ? $pageTitle : "Mon Super Site de Jeux"; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>style.css">
</head>

<header>
    <a href="/index.php"" class=" logo" aria-label="Retour à l'accueil">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 24 24">
            <path
                fill="currentColor"
                d="M6 3h2v2H6zm2 2h2v2H8zm4 0h2v2h-2zm4-2h2v2h-2zm-6 4h4v2h-4zm-6 4h2v2H4zm2 2h2v2H6zm12-2h2v2h-2zm-2 2h2v2h-2zm-8 2h2v2H8zm8 0h2v2h-2zm-6 2h4v2h-4z" />
            <path fill="currentColor" d="M9 10h2v2H9zm4 0h2v2h-2z" />
        </svg>
    </a>

    <button class="burger-menu" id="burgerBtn">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 24 24">
            <path
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-width="2"
                d="M4 7h16M4 12h16M4 17h16" />
        </svg>
    </button>

    <nav class="nav" id="mainNav">
        <a href="/pages/plusOuMoins.php"" class=" nav__link">+ ou -</a>
        <a href="/pages/chifoumi.php"" class=" nav__link">Chifoumi</a>
        <a href="/pages/jeuDuDes.php" class="nav__link">Jeu de Dés</a>
    </nav>

    <div class="auth-buttons">
        <div class="buttons__login">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="28"
                height="28"
                viewBox="0 0 32 32">
                <path
                    fill="currentColor"
                    d="M30.47 4.57h-1.52V3.05h-1.53V1.52H25.9V0H3.04v6.1h1.53v1.52h1.52V6.1h18.29v1.52h1.52v15.24h-1.52v1.52h-1.53v1.52H3.04v-1.52H1.52v1.52H0V32h1.52v-4.57h19.81V32H32V6.1h-1.53Zm-24.38 0H4.57V1.52h1.52Zm3.05 0H7.61V1.52h1.53Zm13.71 0H10.66V1.52h12.19Zm7.62 10.67h-1.52V7.62h-1.53V6.1H25.9V4.57h-1.52V3.05h1.52v1.52h1.52V6.1h1.53v1.52h1.52Z" />
                <path
                    fill="currentColor"
                    d="M19.8 15.24h1.53v1.52H19.8Zm-3.04 7.62h4.57v1.52h-4.57Zm1.52-10.67h1.52v1.52h-1.52ZM19.8 32v-3.05h-4.57V32h1.53v-1.52h1.52V32zm-6.09-15.24h6.09v1.53h-6.09Zm0-4.57h1.52v1.52h-1.52Zm-1.52 3.05h1.52v1.52h-1.52Zm-1.53 7.62h1.53v1.52h-1.53Z" />
                <path
                    fill="currentColor"
                    d="M24.38 21.33V9.14H9.14v12.19ZM10.66 10.67h12.19v9.14H10.66ZM7.61 22.86h1.53v1.52H7.61ZM6.09 7.62h1.52v13.71H6.09ZM4.57 21.33h1.52v1.53H4.57Zm-1.53 1.53h1.53v1.52H3.04Z" />
            </svg>
            <a href="#" class="btn">Se connecter</a>
        </div>
        <div class="buttons__sign_up">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="28"
                height="28"
                viewBox="0 0 48 48">
                <defs>
                    <mask id="SVGWbHkneAU">
                        <path
                            fill="#555555"
                            stroke="#fff"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="4"
                            d="m20 15l4 4l4-4V4h-8zm0 18l4-4l4 4v11h-8zm13-5l-4-4l4-4h11v8zm-18-8l4 4l-4 4H4v-8z" />
                    </mask>
                </defs>
                <path
                    fill="currentColor"
                    d="M0 0h48v48H0z"
                    mask="url(#SVGWbHkneAU)" />
            </svg>
            <a href="#" class="btn">S'inscrire</a>
        </div>
    </div>
</header>