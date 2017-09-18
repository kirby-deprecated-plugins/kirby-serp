<div class="hero">
    <h1><a href="<?= u(c::get('plugin.serp.url', 'serp')); ?>">Kirby Serp</a></h1>
    <div class="info">
        <?= $pagination->numStart() . '-' . $pagination->numEnd(); ?>
        <span class="soft"><?= '(' . $pagination->items() . ')'; ?></span>
    </div>
</div>

<div class="tabs">
    <ul>
        <li class="tab-home<?= ($filter == 'none') ? ' selected' : ''; ?>">
            <a href="<?= u(c::get('plugin.serp.url', 'serp')); ?>"></a>
        </li>
        <li class="tab-warnings<?= ($filter == 'warnings') ? ' selected' : ''; ?>">
            <a href="<?= u(c::get('plugin.serp.url', 'serp')); ?>/warnings"></a>
        </li>
        <li class="tab-major<?= ($filter == 'warnings/major') ? ' selected' : ''; ?>">
            <a href="<?= u(c::get('plugin.serp.url', 'serp')); ?>/warnings/major"></a>
        </li>
        <li class="tab-minor<?= ($filter == 'warnings/minor') ? ' selected' : ''; ?>">
            <a href="<?= u(c::get('plugin.serp.url', 'serp')); ?>/warnings/minor"></a>
        </li>
    </ul>
</div>