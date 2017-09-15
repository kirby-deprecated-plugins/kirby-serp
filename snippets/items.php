<div class="items">
    <?php
        $core = new \KirbySerp\Archive;

        foreach($posts as $item) {
            snippet(c::get('plugin.serp.prefix', 'serp') . '-item', $core->results($item));
        }
    ?>
</div>