<section class="p-8 lg:p-20 pt-[300px] w-full ">
    <!--    Services proposés -->
    <div class="flex justify-between">
        <div class="w-2/3 lg:w-1/2">
            <h2 class="text-6xl leading-snug normal-case lg:text-5xl">
                Mes différents <span class="text-sky-600 font-display">services</span> pour
                realiser votre <span class="text-indigo-600 font-display">projet.</span>
            </h2>
        </div>
        <div class="flex justify-end items-end w-1/2">
            <button onclick="location.href = '/contact'"
                    class="px-16 py-8 lg:text-sm text-xl bg-indigo-600 rounded lg:px-10 lg:py-4">Me contacter</button>
        </div>
    </div>
    <div class="flex overflow-hidden flex-row flex-nowrap mt-20">
        <div class="flex flex-row flex-nowrap gap-[40px] animate-scrolling">
            <!--            Animate firt part -->
            <?php $service_repeater = get_field('services') ?>
            <?php foreach ($service_repeater as $service): ?>
                <section class="flex flex-col w-[600px] h-[500px] lg:h-[350px] p-20 bg-slate-1000">
                    <div class="flex justify-center items-center w-full">
                        <img src="<?= esc_url($service['img']['url']) ?>" alt="<?= esc_attr($service['img']['alt']) ?>"
                             class="w-[100px] h-[100px] lg:w-[75px] lg:h-[75px]">
                    </div>
                    <header class="flex justify-center items-center py-10 w-full lg:py-6">
                        <h2 class="text-3xl normal-case lg:text-xl">
                            <?= preg_replace('/\*([^*]+)\*/', '<span class="text-indigo-500 font-display">\1</span>', $service['title']) ?>
                        </h2>
                    </header>
                    <article class="text-lg lg:text-sm">
                        <?= preg_replace('/\*([^*]+)\*/', '<span class="text-sky-500">\1</span>', $service['description']) ?>
                    </article>
                </section>
            <?php endforeach; ?>
            <!--            Animate second part -->
            <?php foreach ($service_repeater as $service): ?>
                <section class="flex flex-col w-[600px] h-[500px] lg:h-[350px] p-20 bg-slate-1000">
                    <div class="flex justify-center items-center w-full">
                        <img src="<?= esc_url($service['img']['url']) ?>" alt="<?= esc_attr($service['img']['alt']) ?>"
                             class="w-[100px] h-[100px] lg:w-[75px] lg:h-[75px]">
                    </div>
                    <header class="flex justify-center items-center py-10 w-full lg:py-6">
                        <h2 class="text-3xl normal-case lg:text-xl">
                            <?= preg_replace('/\*([^*]+)\*/', '<span class="text-indigo-500 font-display">\1</span>', $service['title']) ?>
                        </h2>
                    </header>
                    <article class="text-lg lg:text-sm">
                        <?= preg_replace('/\*([^*]+)\*/', '<span class="text-sky-500">\1</span>', $service['description']) ?>
                    </article>
                </section>
            <?php endforeach; ?>
        </div>
    </div>


    <!--     Derniers projets -->
    <div class="flex justify-between mt-[300px]">
        <div class="w-1/2">
            <h2 class="text-6xl leading-snug normal-case lg:text-5xl">
                Mes derniers <span class="text-sky-500 font-display">projets</span> <span
                    class="text-indigo-500 font-display">réalisés !</span>
            </h2>
        </div>
        <div class="flex flex-col items-end w-1/2 lg:flex-row lg:justify-end">
            <button onclick="location.href = '/contact'"
                    class="px-16 py-8 lg:text-sm text-xl bg-indigo-600 rounded lg:px-10 lg:py-4 mb-6 lg:mb-0 lg:mr-6">
                Me contacter
            </button>
            <button onclick="location.href = '/mes-realisations'"
                    class="px-16 py-8 lg:text-sm text-xl bg-sky-600 rounded lg:px-10 lg:py-4">Mes réalisations
            </button>
        </div>
    </div>
    <div class="flex overflow-hidden flex-row flex-nowrap mt-20">
        <div class="flex flex-row flex-nowrap gap-[40px] animate-scrolling-rea">
            <!--            Animate firt part -->
            <?php foreach (get_posts() as $post): ?>
                <a href="<?= esc_url(get_permalink(get_posts()[0])) ?>"
                   class="flex flex-col w-[600px] h-[500px] lg:h-[350px] p-14 pb-4 relative">
                    <h2 class="absolute top-0 left-0 z-30 w-2/3 text-4xl font-black normal-case lg:text-3xl">
                        <?= $post->post_title ?>
                    </h2>
                    <div
                        class="custom-card w-full h-full shadow-innercustom bg-<?= $post->ID ?> z-10 brightness-50 my-2"></div>
                    <style>
                        .bg-<?= $post->ID ?> {
                            background: url(<?= get_the_post_thumbnail_url($post)?>) no-repeat center center;
                            background-size: cover;
                        }
                    </style>
                    <h2 class="absolute bottom-0 left-0 z-30 text-4xl font-black text-sky-400 lg:text-3xl lg:font-bold">
                        <?php preg_match('/"second_section_subtitle": "(.*)",/', $post->post_content, $matches) ?>
                        <?= $matches[1] ?>
                    </h2>
                </a>
            <?php endforeach; ?>

            <!--             Second part (for carroussel animation) -->
            <?php foreach (get_posts() as $post): ?>
                <a href="<?= esc_url(get_permalink($post)) ?>"
                   class="flex flex-col w-[600px] h-[500px] lg:h-[350px] p-14 pb-4 relative">
                    <h2 class="absolute top-0 left-0 z-30 w-2/3 text-4xl font-black normal-case lg:text-3xl">
                        <?= $post->post_title ?>
                    </h2>
                    <div
                        class="custom-card w-full h-full shadow-innercustom bg-<?= $post->ID ?> z-10 brightness-50 my-2"></div>
                    <h2 class="absolute bottom-0 left-0 z-30 text-4xl font-black text-sky-400 lg:text-3xl lg:font-bold">
                        <?php preg_match('/"second_section_subtitle": "(.*)",/', $post->post_content, $matches) ?>
                        <?= $matches[1] ?>
                    </h2>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

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
