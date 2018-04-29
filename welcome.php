<?php // @Layout name: Welcome ?>

<?php include "_pageImage.php" ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="welcome">

    <div class="carousel">

    </div>

    <section>
        <h2>Programs</h2>
        <div class="columns">
            <div class="course-items">
                <div>
                    <h3>The C.L.E.A.R. Master Class</h3>
                </div>
            </div>

            <div class="course-items">
                <div>
                    <h3>The Mindful Leadership gym</h3>
                </div>
            </div>

            <div class="course-items">
                <div>
                    <h3>Other Webinars and Events</h3>
                </div>
            </div>
        </div>
    </section>

    <article class="page-module page-module-light page-module-centered philosophy">
        <?= ipSlot('text', ['id' => 'philosophyTitle', 'tag' => 'h2']) ?>

        <div class="columns centered">
            <a href="<?= ipConfig()->baseUrl() . 'products' ?>" class="image-module">
                <section>
                    <img src="<?= ipThemeUrl('assets/img/evolution_2.svg') ?>" alt="Evolution">
                    <?= ipSlot('text', ['id' => 'philosophy1', 'tag' => 'h3']) ?>
                </section>
            </a>

            <a href="<?= ipConfig()->baseUrl() . 'products' ?>" class="image-module">
                <section>
                    <? //= ipSlot('image', [
                    //                    'id' => 'philosophy2-image',
                    //                    'width' => '200',
                    //                    'height'=>'200',
                    //                    'class' => ''
                    //                ]) ?>
                    <img src="<?= ipThemeUrl('assets/img/journey_2.svg') ?>" alt="Journey">
                    <?= ipSlot('text', ['id' => 'philosophy2', 'tag' => 'h3']) ?>
                </section>
            </a>

            <a href="<?= ipConfig()->baseUrl() . 'products' ?>" class="image-module">
                <section>
                    <img src="<?= ipThemeUrl('assets/img/clear_1.svg') ?>" alt="Clear">
                    <?= ipSlot('text', ['id' => 'philosophy3', 'tag' => 'h3']) ?>
                </section>
            </a>
        </div>

        <?= ipSlot('text', ['id' => 'quote']) ?>
    </article>

    <article class="page-module page-module-compact">
        <div class="page-module-header">
            <div class="image-container">

            </div>

            <div class="title-container">
                <?= ipSlot('text', ['id' => 'practiceMakesPerfectTitle', 'tag' => 'h2', 'class' => 'title']) ?>
                <?= ipSlot('text', ['id' => 'practiceMakesPerfectSubTitle', 'tag' => 'em', 'class' => 'subtitle']) ?>
            </div>
        </div>

        <div class="page-module-main">
            <?= ipBlock('practiceMakesPerfectDescription') ?>
        </div>
    </article>
</main>

<?php echo ipView('_footer.php')->render(); ?>
