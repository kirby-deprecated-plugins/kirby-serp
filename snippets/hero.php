<div class="hero">
    <h1><a href="<?= u('serp'); ?>">Kirby Serp</a></h1>
    <div class="info">
        <?= $pagination->numStart() . '-' . $pagination->numEnd(); ?>
        <span class="soft"><?= '(' . $pagination->items() . ')'; ?></span>
    </div>
</div>