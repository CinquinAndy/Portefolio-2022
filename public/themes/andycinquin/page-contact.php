<?php get_header(); ?>
<!-- HERO -->
<div class="flex relative justify-center items-center w-screen h-screen">
    <div class="grid absolute top-0 left-0 z-30 grid-cols-8 px-20 w-full ">
        <form action="#" method="post" class="lg:col-start-3 col-span-8 lg:col-span-4 mt-[20vh] lg:mt-[15vh] grid grid-cols-3 lg:grid-cols-6 gap-10">
            <?php wp_nonce_field( 'envoyer-message', 'message-verif' ) ?>
            <div class="flex flex-col col-span-3 lg:col-span-6 gap-4">
                <h1 class="z-20 text-6xl font-bold tracking-widest uppercase lg:text-6xl">CONTACT</h1>
            </div>
            <div class="flex flex-col col-span-3 gap-4">
                <label for="name" class="lg:text-sm text-xl">Nom et prénom</label>
                <input type="text" name="name" id="name" class="text-xl lg:text-base border-0 bg-slate-1000 lg:h-[50px] h-[100px]">
            </div>
            <div class="flex flex-col col-span-3 gap-4">
                <label for="email" class="lg:text-sm text-xl">Email</label>
                <input type="email" name="email" id="email" class="text-xl lg:text-base border-0 bg-slate-1000 lg:h-[50px] h-[100px]">
            </div>
            <div class="flex flex-col col-span-3 gap-4">
                <label for="phone" class="lg:text-sm text-xl">Téléphone</label>
                <input type="text" name="phone" id="phone" class="text-xl lg:text-base border-0 bg-slate-1000 lg:h-[50px] h-[100px]">
            </div>
            <div class="flex flex-col col-span-3 gap-4">
                <label for="company" class="lg:text-sm text-xl">Société (Facultatif)</label>
                <input type="text" name="company" id="company" class="text-xl lg:text-base border-0 bg-slate-1000 lg:h-[50px] h-[100px]">
            </div>
            <input type="hidden" name="raison">
            <div class="flex flex-col col-span-3 lg:col-span-6 gap-4">
                <label for="message" class="lg:text-sm text-xl">Message</label>
                <textarea rows="6" name="message" id="message" class="text-xl lg:text-base border-0 bg-slate-1000"></textarea>
                <p class="lg:text-xs text-lg  italic">Lors de la validation de ce formulaire, vous consentez à ce que les données soumises soient collectées et stockées en vue d'être utilisées pour traiter votre demande de contact.</p>
                <div class="flex w-full text-center justify-end items-center my-6">
                    <div class="g-recaptcha" data-sitekey="6LexB0geAAAAAKnZLXhHzjig8vLyZdkxKhxHKfaY" data-theme="dark"></div>
                </div>
                <div class="flex justify-end items-end mt-4">
                    <input type="submit"
                           class="px-16 py-8 lg:text-sm text-xl bg-indigo-600 rounded lg:px-20 lg:py-4"
                           name="envoyer-message" value="Envoyer le message">
                </div>
            </div>

        </form>

    </div>
    <div class="z-20 text-7xl font-light font-semibold tracking-widest uppercase lg:text-8xl"></div>
    <div class="flex absolute top-1/2 left-1/2 z-10 justify-start items-center w-3/5 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
        <img src="<?= get_template_directory_uri() ?>/assets/Ressources/icons/LogoCinquinAndy.svg"
             alt="Développeur Freelance - Logo"
             class="mb-32 ml-16 opacity-20 brightness-75 -rotate-12 w-112 h-112">
    </div>
    <!--    MEDIA -->
    <div class="hidden lg:flex absolute right-0 bottom-0 z-30 flex-col gap-16 justify-evenly items-center p-10 mb-32 lg:p-20 lg:gap-10 lg:mb-0">
        <!--        Facebook -->
        <a class="text-slate-300 hover:text-slate-50" href="https://www.facebook.com/Cinquin.Andy.Developpeur.Freelance"
           rel="noopener nofollow noreferrer" target="_blank">
            <svg class="w-14 h-14 lg:w-8 lg:h-8" viewBox="0 0 24 24" fill="currentColor">
                <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/>
            </svg>
        </a>
        <!--        Insta -->
        <a class="text-slate-300 hover:text-slate-50" href="https://www.instagram.com/"
           rel="noopener nofollow noreferrer" target="_blank">
            <svg class="w-14 h-14 lg:w-8 lg:h-8" viewBox="0 0 24 24" fill="currentColor">
                <path d="m12.004 5.838c-3.403 0-6.158 2.758-6.158 6.158 0 3.403 2.758 6.158 6.158 6.158 3.403 0 6.158-2.758 6.158-6.158 0-3.403-2.758-6.158-6.158-6.158zm0 10.155c-2.209 0-3.997-1.789-3.997-3.997s1.789-3.997 3.997-3.997 3.997 1.789 3.997 3.997c.001 2.208-1.788 3.997-3.997 3.997z"/>
                <path d="m16.948.076c-2.208-.103-7.677-.098-9.887 0-1.942.091-3.655.56-5.036 1.941-2.308 2.308-2.013 5.418-2.013 9.979 0 4.668-.26 7.706 2.013 9.979 2.317 2.316 5.472 2.013 9.979 2.013 4.624 0 6.22.003 7.855-.63 2.223-.863 3.901-2.85 4.065-6.419.104-2.209.098-7.677 0-9.887-.198-4.213-2.459-6.768-6.976-6.976zm3.495 20.372c-1.513 1.513-3.612 1.378-8.468 1.378-5 0-7.005.074-8.468-1.393-1.685-1.677-1.38-4.37-1.38-8.453 0-5.525-.567-9.504 4.978-9.788 1.274-.045 1.649-.06 4.856-.06l.045.03c5.329 0 9.51-.558 9.761 4.986.057 1.265.07 1.645.07 4.847-.001 4.942.093 6.959-1.394 8.453z"/>
                <circle cx="18.406" cy="5.595" r="1.439"/>
            </svg>
        </a>
        <!--        Linkedin -->
        <a class="text-slate-300 hover:text-slate-50" href="https://www.linkedin.com/in/andy-cinquin/"
           rel="noopener nofollow noreferrer" target="_blank">
            <svg class="w-14 h-14 lg:w-8 lg:h-8" viewBox="0 0 24 24" fill="currentColor">
                <path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"/>
                <path d="m.396 7.977h4.976v16.023h-4.976z"/>
                <path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"/>
            </svg>
        </a>
        <!--        GitHub-->
        <a class="text-slate-300 hover:text-slate-50" href="https://github.com/CinquinAndy/"
           rel="noopener nofollow noreferrer" target="_blank">
            <svg class="w-14 h-14 lg:w-8 lg:h-8" viewBox="0 0 24 24" fill="currentColor">
                <path d="m12.29 21.499c3.73 0 8.94.09 10.835-3.701.715-1.449.875-3.122.875-4.7h-.001c0-2.073-.575-4.047-1.95-5.651.255-.766.385-1.573.385-2.385 0-1.064-.24-1.598-.73-2.563-2.24 0-3.69.42-5.39 1.742-1.31-.311-2.67-.455-4.02-.455-1.495 0-2.986.154-4.435.495-1.725-1.336-3.175-1.781-5.44-1.781-.484.965-.729 1.499-.729 2.563 0 .811.125 1.632.385 2.414-1.38 1.589-2.075 3.548-2.075 5.621 0 1.578.281 3.266 1.01 4.701 1.97 3.835 7.49 3.7 11.28 3.7zm-5.289-9.99c.95 0 1.865.168 2.8.297 3.418.52 5.215-.297 7.31-.297 2.339 0 3.675 1.915 3.675 4.087 0 4.349-4.015 5.012-7.53 5.012h-2.41c-3.5 0-7.52-.667-7.52-5.012 0-2.172 1.334-4.087 3.675-4.087z"/>
                <path d="m16.655 18.323c1.29 0 1.835-1.692 1.835-2.727s-.545-2.727-1.835-2.727-1.835 1.692-1.835 2.727.545 2.727 1.835 2.727z"/>
                <path d="m7.47 18.323c1.29 0 1.835-1.692 1.835-2.727s-.546-2.726-1.835-2.726-1.835 1.692-1.835 2.727.545 2.726 1.835 2.726z"/>
            </svg>
        </a>
    </div>
    <!--    PAGE INFO -->
    <div class="flex absolute bottom-0 left-0 justify-center items-center p-20 mb-24 lg:p-20 lg:mb-0">
        <h2 class="text-3xl tracking-wider opacity-20 origin-bottom-left -rotate-90 font-body lg:text-xl">‣ CONTACT</h2>
    </div>
</div>
<?php get_footer(); ?>
