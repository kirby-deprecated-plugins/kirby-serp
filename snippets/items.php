<div class="items">
    <?php
    function flag($item) { // Callback
        if($item->seo_title()->isEmpty()) return 'danger';
        if($item->seo_description()->isEmpty()) return 'warning';
        return 'sucess';
    }

    function description($item) {
        if($item->seo_description()->isEmpty()) {
            return 'No meta description found! A meta description tag should be around 155 characters. Search engines choose if they want to use it or not.';
        }
        return $item->seo_description();
    }

    function title($item) {
        if($item->seo_title()->isEmpty()) {
            return 'No title tag found! A title tag should be below 600px wide.';            
        }
        return $item->seo_title()->value();
    }

    function panel_url($item) {
        return u( c::get('plugin.serp.panel', 'panel') . '/pages/' . $item->id() . '/edit');
    }

    function callback($option, $defaults, $item) {
        $filter = c::get('plugin.serp.' . $option);
        
        if(is_callable($filter)) {
            $callback = call($filter, [
                'args' => [
                    'defaults' => $defaults,
                    'page' => $item
                ]
            ]);
        }
        if(isset($callback)) {
            return $callback;
        }
        return $defaults;
    }

    function results($item) {
        return callback('filter.collection', [
            'title' => callback('filter.title', title($item), $item),
            'description' => callback('filter.description', description($item), $item),
            'url' => callback('filter.url', $item->url(), $item),
            'uri' => callback('filter.uri', $item->url(), $item),
            'panel' => callback('filter.panel', panel_url($item), $item),
            'flag' => flag($item)
        ], $item);
    }

    foreach($posts as $item) {
        snippet(c::get('plugin.serp.prefix', 'serp') . '-item', results($item));
    }
    ?>
</div>