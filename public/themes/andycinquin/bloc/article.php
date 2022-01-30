<section class="p-8 lg:p-20 pt-[300px] w-full ">
    <!--     Derniers projets -->
    <div class="flex justify-between mt-[300px]">
        <div class="w-1/2">
            <h2 class="text-6xl leading-snug normal-case lg:text-5xl">
                Le <span class="text-sky-500 font-display">projet</span> en<span
                    class="text-indigo-500 font-display"> image !</span>
            </h2>
        </div>
        <div class="flex flex-col items-end w-1/2 lg:flex-row lg:justify-end">
            <?php $link = get_field('button') ?>
            <?php $link_second = get_field('secondary_button') ?>
            <button onclick="location.href='<?= esc_url($link['url']) ?>'" class="px-16 py-8 lg:text-sm text-xl bg-indigo-600 rounded lg:px-10 lg:py-4 mb-6 lg:mb-0 lg:mr-6">
                <?= esc_html($link['title']) ?>
            </button>

            <button onclick="location.href='<?= esc_url($link_second['url']) ?>'" class="px-16 py-8 lg:text-sm text-xl bg-sky-600 rounded lg:px-10 lg:py-4">
                <?= esc_html($link_second['title']) ?>
            </button>
        </div>
    </div>
    <div class="flex overflow-hidden flex-row flex-nowrap mt-20">
        <div class="flex flex-row flex-nowrap gap-[40px] animate-scrolling-rea">
            <!--            Animate firt part -->
            <?php $i = 0 ?>
            <?php if(have_rows('images')): ?>
                <?php while( have_rows('images') ) : the_row(); ?>
                    <?php $img = get_sub_field('img') ?>
                    <div
                       class="flex flex-col justify-start items-start w-[600px] h-[500px] lg:h-[400px] p-14 pb-4 pt-2 relative">
                        <div class="custom-card w-full h-full shadow-innercustom bg-<?= $i ?> z-10 brightness-50 my-2"></div>
                    </div>
                    <style>
                        .bg-<?= $i ?>{
                            background: url("<?= $img['url'] ?>") center center no-repeat ;
                            background-size: cover;
                        }
                    </style>
                <?php $i++ ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <!--            Animate second part -->
            <?php $i = 0 ?>
            <?php if(have_rows('images')): ?>
                <?php while( have_rows('images') ) : the_row(); ?>
                    <?php $img = get_sub_field('img') ?>
                    <div class="flex flex-col justify-start items-start w-[600px] h-[500px] lg:h-[400px] p-14 pb-4 pt-2 relative">
                        <div class="custom-card w-full h-full shadow-innercustom bg-<?= $i ?> z-10 my-2"></div>
                    </div>
                    <style>
                        .bg-<?= $i ?>{
                            background: url("<?= $img['url'] ?>") center center no-repeat ;
                            background-size: cover;
                        }
                    </style>
                    <?php $i++ ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <section class="flex justify-between w-full mt-[300px] grid grid-cols-8 gap-20">
        <article class="col-span-8 lg:col-span-3">
            <h2 class="text-6xl leading-snug normal-case lg:text-5xl mb-6">
                Résumé du projet
            </h2>
            <div class="flex flex-col text-xl lg:text-base gap-4">
                <?php the_field('description'); ?>
            </div>
        </article>
        <article class="lg:col-start-5 col-span-8 lg:col-span-3">
            <h2 class="text-6xl leading-snug normal-case lg:text-5xl">
                Les technologies utilisés
            </h2>
            <!--            block technos -->
            <div class="mt-20 grid grid-cols-4">
                <?php if(have_rows('technos')): ?>
                    <?php while( have_rows('technos') ) : the_row(); ?>
                        <?php $img = get_sub_field('img') ?>
                        <div class="relative flex justify-center items-center">
                            <img src="<?= get_template_directory_uri() ?>/assets/Ressources/icons/3d.svg" alt="wp-test" class="h-20 w-20">
                            <img src="<?= esc_url($img['url']) ?>" alt="<?= esc_url($img['alt']) ?>"
                                 class="h-6 w-6 skew-y-30 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </article>
    </section>

    <!--    Contact part -->
    <div class="flex justify-center items-center mt-[300px] bg-slate-1000 shadow-innercustom rounded p-20">
        <div>
            <div class="flex justify-center items-center w-full">
                <h2 class="text-4xl font-bold lg:text-3xl">Développons <span
                        class="font-black text-indigo-500 lg:font-bold font-display">ensemble</span> vos projets</h2>
            </div>
            <p class="py-16 text-xl text-center lg:py-10 lg:text-sm">
                Une idée, un projet ?
                Je suis là pour répondre à vos demandes et vous accompagner.
                <br><br>
                N’hésitez pas, je serais ravi d’échanger avec vous sur votre projet !
            </p>
            <div class="flex justify-center items-center">
                <button onclick="location.href = '/contact'"
                        class="px-16 py-8 lg:text-sm text-xl bg-indigo-600 rounded lg:px-10 lg:py-4">Me
                    contacter
                </button>
            </div>
        </div>
    </div>
</section>
