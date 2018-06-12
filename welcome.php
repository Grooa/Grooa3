<?php // @Layout name: Welcome ?>

<?php include "_pageImage.php" ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="welcome">

    <div class="carousel">

    </div>

    <?php echo ipBlock('main'); ?>
    
    <article class="page-module page-module-light page-module-centered page-module-top-fears">
        <?= ipSlot('text', ['id' => 'fearsTitle', 'tag' => 'h2']) ?>

        <div class="page-module-main">
            <ol class="list-ranked">
                <li>
                    <?= ipSlot('text', ['id' => 'fears1Title', 'tag' => 'h3']) ?>
                    <?= ipSlot('text', ['id' => 'fears1Text', 'tag' => 'div', 'class' => 'list-content']) ?>
                </li>
                <li>
                    <?= ipSlot('text', ['id' => 'fears2Title', 'tag' => 'h3']) ?>
                    <?= ipSlot('text', ['id' => 'fears2Text', 'tag' => 'div', 'class' => 'list-content']) ?>
                </li>
                <li>
                    <?= ipSlot('text', ['id' => 'fears3Title', 'tag' => 'h3']) ?>
                    <?= ipSlot('text', ['id' => 'fears3Text', 'tag' => 'div', 'class' => 'list-content']) ?>
                </li>
            </ol>
        </div>
    </article>
</main>

<?php echo ipView('_footer.php')->render(); ?>
