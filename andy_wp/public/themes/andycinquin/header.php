<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= get_theme_file_uri('assets/app.css') ?>">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Serif+Display:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
</head>
<body class="relative bg-gradient-to-b from-indigo-1100 to-sky-1100 text-slate-50">
<!-- Nav part - Header : Btn - logo - contact -->
<header class="fixed top-0 left-0 w-screen h-[80px] z-50 flex flex-row-reverse lg:flex-row justify-between items-center px-10 lg:px-20 mt-20 lg:mt-0">
    <div>
        <button id="btnNav" class="z-40 menu"
                onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened')); "
                aria-label="Main Menu">
            <svg class="z-30 w-20 h-20 lg:w-10 lg:h-10" viewBox="0 0 100 100" stroke="currentColor">
                <path class="line line1"
                      d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"/>
                <path class="line line2" d="M 20,50 H 80"/>
                <path class="line line3"
                      d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"/>
            </svg>
        </button>
    </div>
    <a href="#" class="w-20 h-20 lg:w-10 lg:h-10">
        <img src="./Ressources/icons/logov2.svg" alt="Logo Cinquin Andy Signature">
    </a>
    <a href="/contact.html" class="hidden text-sm button-animated smoke font-body lg:block">
        <h2>CONTACT</h2>
    </a>
</header>
<!-- Nav Block - nav : content nav -->
<nav id="nav-block"
     class="transition-transform flex fixed w-screen h-screen -z-10 opacity-0
     pointer-events-none transform -translate-y-[100vh]">
    <div class="flex flex-col gap-24 justify-around p-20 pt-64 w-full h-full bg-gradient-to-b border-opacity-10 lg:pt-36 lg:w-2/5 border-r-40 from-indigo-1100 to-sky-1100 border-slate-50">
        <a href="#" class="relative text-indigo-400">
            <svg class="absolute w-10 h-10 top-1/2 transform -translate-y-1/2 left-0 -translate-x-[50px]"
                 viewBox="0 0 156 156" fill="currentColor">
                <path d="m123.52 69.33c-1.23-1.24-10.45-5.53-26.62-12.4-24-10.2-35.08-14.64-36.55-14.64-.79 0-1.79.41-2.26.92-.77.84-.73 1.76.45 10.9.71 5.52 1.29 10.02 1.29 10.08 0 .36-11.24 2.52-18.33 3.52-6.88.96-8.76 1.41-9.37 2.2-.78 1.04-.69 5.2.38 17.38.26 2.99.35 6.1.19 6.96-.26 1.37-.11 1.59 1.18 1.92.81.2 5.25-.02 9.87-.5 13.86-1.43 19.16-1.65 19.41-.81.12.4.62 4.52 1.09 9.14.61 5.93 1.1 8.63 1.65 9.19.71.71.85.71 1.42-.03.35-.46 1-.74 1.47-.64 1.01.2 8.51-4.69 15.17-9.91 11.4-8.92 18.79-14.35 27.73-20.34 5.15-3.46 10.14-7 11.03-7.83 1.9-1.77 2.2-3.71.8-5.11zm-5.52 3.84c-2 1.26-2.48 1.12-2.14-.63.27-1.42 1.64-2 2.98-1.27 1.13.62 1.1.67-.84 1.9zm-5.64 3.78c-.3 0-.62-.21-.81-.53-.18-.3.03-.52.5-.52s.81.22.81.52c0 .32-.2.53-.5.53zm-12.92 5.8c-1.57-.59-6.22-1.92-10.32-2.94-13.39-3.35-24.05-6.99-24.05-8.22 0-.29.34-.4.76-.24s1.65.45 2.76.65c1.1.21 4.78 1.41 8.19 2.68 9.5 3.55 25.62 8.04 26.73 7.45 1.98-1.05 1.1-2.4-2.52-3.84-3.54-1.41-18.38-5.72-25.42-7.37-4.46-1.05-11.03-4.21-11.03-5.32 0-.49.39-.66 1.18-.5.65.13 2.6.51 4.33.84 1.75.33 5.72 1.66 8.93 2.98 6.86 2.83 15.65 5.83 23.63 8.07 3.2.9 5.97 1.74 6.22 1.89.25.14-1.1 1.3-3.05 2.6l-3.49 2.34zm-2.68 5.12c-1.94 1.5-2.21 1.58-2.42.74-.16-.65-1.29-1.23-3.6-1.85-8.45-2.27-24.63-7.88-24.63-8.55 0-.42.2-.73.47-.73 3.1 0 33.45 7.8 32.72 8.41-.2.17-1.33 1.05-2.54 1.98zm-6.25 4.31c-.3 0-5.65-1.65-11.89-3.66-10.03-3.24-12.6-4.42-11.66-5.37.34-.34 9.08 1.71 19.01 4.45l8.03 2.21-1.47 1.19c-.78.63-1.72 1.18-2.02 1.18zm-8.11-25.82c-5.62-1.45-13.1-4.58-15.49-6.48-.99-.79-.95-.82.68-.5.96.19 3.41 1.11 5.51 2.07 2.08.96 6.43 2.75 9.69 3.99 3.25 1.25 5.85 2.31 5.77 2.36-.06.07-2.85-.59-6.16-1.44zm.47 31.91c-4.25 3.18-4.84 3.47-5.3 2.65-.29-.51-1.02-1.13-1.65-1.39-.76-.32-.32-.37 1.36-.16 2.05.26 2.55.15 2.82-.58.49-1.32-.64-2.16-5.32-3.92-5.21-1.97-4.57-2.04 2.63-.32 3.1.74 5.97 1.21 6.41 1.04 1.29-.5.47-1.55-2-2.55-1.26-.51-1.71-.81-1-.66 4.73.98 6.83 1.56 6.83 1.88 0 .25-2.15 2.04-4.78 4.01zm-2.73-40.81c-2.68-.74-13.05-5.74-11.13-5.37 1.68.33 13.51 5.46 13.23 5.75-.08.08-1.05-.09-2.1-.38zm-2.05 34.56c-.43-.17-.31-.28.32-.32.52-.03.85.1.68.26-.17.18-.63.2-1 .06zm-5.9 14.2c-2.15 1.52-4.04 2.76-4.2 2.76s-.29-.44-.29-.97c0-.73.32-.91 1.26-.74 1.52.28 2.67-1.39 2.29-3.33-.23-1.19-.11-1.26 2.3-1.26 1.42 0 2.55.17 2.55.39s-1.76 1.64-3.91 3.15zm-2.89-5.64c-.3 0-.62-.21-.81-.52-.18-.3.03-.53.5-.53s.81.22.81.53-.2.52-.5.52zm-4.76-38.33c-.3 0-.52-.24-.52-.55 0-.32.22-.42.52-.24.32.19.53.41.53.55s-.21.24-.53.24zm-5.06 11.1c-.79-.44-.81-.55-.13-.58.89-.03 1.68.53 1.3.92-.11.12-.65-.04-1.17-.34zm-.45-3.76c-.42 0-.79-.1-.79-.21s.37-.35.79-.5.79-.06.79.21-.37.5-.79.5zm-10.29 7.36c-5.78-2.16-8.6-3.59-8.09-4.1.87-.87 14.96 5.2 14.16 6.09-.1.12-2.81-.77-6.07-1.99zm3.65-2.81c-1.1-.48-1.41-.78-.81-.81 1.05-.05 3.2.94 2.84 1.31-.15.14-1.09-.09-2.03-.5zm-7.61 17.49c-.62.01-2.15-.56-3.41-1.29-2.2-1.27-2.23-1.31-.76-1.31.84 0 2.81.4 4.39.89 2.2.69 2.64.98 1.89 1.29-.56.22-1.48.4-2.11.42zm-.71-4.71c-2-.53-6.3-2.82-6.3-3.35 0-.12.53-.09 1.21.07 1.42.32 7.72 3.47 7.46 3.72-.1.07-1.17-.12-2.37-.44zm-.79-4.81c-2.21-.6-5.23-2.48-4.77-2.96.14-.14 1.78.53 3.67 1.52s3.35 1.83 3.28 1.89-1.08-.15-2.18-.45zm-1.63-4.55c-1.07-.62-.74-.79.58-.3.47.18.74.43.6.58-.13.15-.65.02-1.18-.28z"
                      opacity=".9"/>
            </svg>
            <h2 class="text-5xl font-semibold uppercase">acceuil</h2>
        </a>
        <a href="#" class="hover:text-indigo-400">
            <h2 class="text-5xl font-semibold uppercase">mes réalisations</h2>
        </a>
        <a href="#" class="hover:text-indigo-400">
            <h2 class="text-5xl font-semibold uppercase">contactez-moi</h2>
        </a>
        <div>
            <hr class="mb-20 w-32 border opacity-75 lg:mb-10 lg:w-10">
            <div class="flex">
                <!--    MEDIA ( REAPETED - CARE ! ) -->
                <div class="flex gap-10 justify-evenly items-center">
                    <!--        Facebook -->
                    <a class="text-indigo-500 hover:text-slate-50"
                       href="https://www.facebook.com/Cinquin.Andy.Developpeur.Freelance"
                       rel="noopener nofollow noreferrer" target="_blank">
                        <svg class="w-14 h-14 lg:w-8 lg:h-8" viewBox="0 0 24 24" fill="currentColor">
                            <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/>
                        </svg>
                    </a>
                    <!--        Insta -->
                    <a class="text-indigo-500 hover:text-slate-50" href="https://www.instagram.com/"
                       rel="noopener nofollow noreferrer" target="_blank">
                        <svg class="w-14 h-14 lg:w-8 lg:h-8" viewBox="0 0 24 24" fill="currentColor">
                            <path d="m12.004 5.838c-3.403 0-6.158 2.758-6.158 6.158 0 3.403 2.758 6.158 6.158 6.158 3.403 0 6.158-2.758 6.158-6.158 0-3.403-2.758-6.158-6.158-6.158zm0 10.155c-2.209 0-3.997-1.789-3.997-3.997s1.789-3.997 3.997-3.997 3.997 1.789 3.997 3.997c.001 2.208-1.788 3.997-3.997 3.997z"/>
                            <path d="m16.948.076c-2.208-.103-7.677-.098-9.887 0-1.942.091-3.655.56-5.036 1.941-2.308 2.308-2.013 5.418-2.013 9.979 0 4.668-.26 7.706 2.013 9.979 2.317 2.316 5.472 2.013 9.979 2.013 4.624 0 6.22.003 7.855-.63 2.223-.863 3.901-2.85 4.065-6.419.104-2.209.098-7.677 0-9.887-.198-4.213-2.459-6.768-6.976-6.976zm3.495 20.372c-1.513 1.513-3.612 1.378-8.468 1.378-5 0-7.005.074-8.468-1.393-1.685-1.677-1.38-4.37-1.38-8.453 0-5.525-.567-9.504 4.978-9.788 1.274-.045 1.649-.06 4.856-.06l.045.03c5.329 0 9.51-.558 9.761 4.986.057 1.265.07 1.645.07 4.847-.001 4.942.093 6.959-1.394 8.453z"/>
                            <circle cx="18.406" cy="5.595" r="1.439"/>
                        </svg>
                    </a>
                    <!--        Linkedin -->
                    <a class="text-indigo-500 hover:text-slate-50" href="https://www.linkedin.com/in/andy-cinquin/"
                       rel="noopener nofollow noreferrer" target="_blank">
                        <svg class="w-14 h-14 lg:w-8 lg:h-8" viewBox="0 0 24 24" fill="currentColor">
                            <path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"/>
                            <path d="m.396 7.977h4.976v16.023h-4.976z"/>
                            <path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"/>
                        </svg>
                    </a>
                    <!--        GitHub-->
                    <a class="text-indigo-500 hover:text-slate-50" href="https://github.com/CinquinAndy/"
                       rel="noopener nofollow noreferrer" target="_blank">
                        <svg class="w-14 h-14 lg:w-8 lg:h-8" viewBox="0 0 24 24" fill="currentColor">
                            <path d="m12.29 21.499c3.73 0 8.94.09 10.835-3.701.715-1.449.875-3.122.875-4.7h-.001c0-2.073-.575-4.047-1.95-5.651.255-.766.385-1.573.385-2.385 0-1.064-.24-1.598-.73-2.563-2.24 0-3.69.42-5.39 1.742-1.31-.311-2.67-.455-4.02-.455-1.495 0-2.986.154-4.435.495-1.725-1.336-3.175-1.781-5.44-1.781-.484.965-.729 1.499-.729 2.563 0 .811.125 1.632.385 2.414-1.38 1.589-2.075 3.548-2.075 5.621 0 1.578.281 3.266 1.01 4.701 1.97 3.835 7.49 3.7 11.28 3.7zm-5.289-9.99c.95 0 1.865.168 2.8.297 3.418.52 5.215-.297 7.31-.297 2.339 0 3.675 1.915 3.675 4.087 0 4.349-4.015 5.012-7.53 5.012h-2.41c-3.5 0-7.52-.667-7.52-5.012 0-2.172 1.334-4.087 3.675-4.087z"/>
                            <path d="m16.655 18.323c1.29 0 1.835-1.692 1.835-2.727s-.545-2.727-1.835-2.727-1.835 1.692-1.835 2.727.545 2.727 1.835 2.727z"/>
                            <path d="m7.47 18.323c1.29 0 1.835-1.692 1.835-2.727s-.546-2.726-1.835-2.726-1.835 1.692-1.835 2.727.545 2.726 1.835 2.726z"/>
                        </svg>
                    </a>
                    <!--        Malt -->
                    <a class="text-indigo-500 hover:text-slate-50" href="https://github.com/CinquinAndy/"
                       rel="noopener nofollow noreferrer" target="_blank">
                        <svg class="w-14 h-14 lg:w-8 lg:h-8" viewBox="0 0 1000 1000" fill="currentColor">
                            <path d="M855.8,144.4c-75.3-75.3-156.2-26.7-206.4,23.9L172.5,644.8c-50.6,50.6-103.2,127.1-23.9,206.4
		c79.3,79.3,156.2,26.7,206.4-23.9l476.5-476.5C882.5,300.2,931.1,219.7,855.8,144.4z"/>
                            <path d="M400.4,124.9l100.8,100.8L604,122.9c7.2-7.2,13.9-13.5,21.1-19.5C614.3,49.2,583.3,0.2,501.2,0.2
		c-82.5,0-113.1,49.4-123.9,103.6C384.9,110.2,392.4,116.9,400.4,124.9z"/>
                            <path d="M604,874.3L501.2,771.5L400.4,872.7c-7.6,7.6-15.1,14.7-22.7,21.1c11.6,55.4,44.2,106,123.5,106
		c79.7,0,112.4-51,123.9-106.4C617.9,887.5,610.8,881.5,604,874.3z"/>
                            <path d="M357.4,369.5H162.9C91.6,369.5,0,391.8,0,498.6C0,578.3,51,611,106.4,622.5C113.1,614.9,357.4,369.5,357.4,369.5z"/>
                            <path d="M896.4,374.7c-6,7.2-251,253.4-251,253.4h191.6c71.3,0,162.9-16.7,162.9-129.1C1000,416.1,950.6,385.5,896.4,374.7z"/>
                            <path d="M421.1,305.4l34.7-34.7L355,169.9C304.4,119.3,227.9,66.7,148.6,146c-58.2,58.2-45.4,114.7-14.3,161
		C143.8,306.2,421.1,305.4,421.1,305.4z"/>
                            <path d="M581.3,691.8l-34.7,34.7l102.8,102.8c50.6,50.6,131.1,99.2,206.4,23.9c56.2-56.2,43.4-115.5,12.4-162.9
		C857.8,691,581.3,691.8,581.3,691.8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div></div>
        <div class="flex flex-col text-3xl lg:text-xs text-slate-300">
            <p class="normal-case font-body">72 avenue camus, 44000 Nantes</p>
            <a class="mt-10 normal-case lg:mt-2 font-body" href="tel:+33621582684">+33 6 21 58 26 84</a>
        </div>
        <div class="block lg:hidden"></div>
    </div>
    <div id="nav-right" class="hidden w-3/5 h-full bg-black bg-opacity-90 lg:block"></div>
</nav>
