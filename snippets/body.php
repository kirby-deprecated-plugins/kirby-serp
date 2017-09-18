<?php
$core = new \KirbySerp\Archive;
$collection = $core->callback('filter.query', site()->index()->visible()->flip()->sortBy('id', 'asc'));

if(isset($filter)) {
    if($filter == 'warnings') {
        $collection = $collection->filter(function($item) {
            if($item->seo_description()->isEmpty() || $item->seo_title()->isEmpty()) {
                return true;
            }
        });
    } elseif($filter == 'warnings/major') {
        $collection = $collection->filter(function($item) {
            if($item->seo_title()->isEmpty()) {
                return true;
            }
        });
    } elseif($filter == 'warnings/minor') {
        $collection = $collection->filter(function($item) {
            if($item->seo_description()->isEmpty()) {
                return true;
            }
        });
    }
}

$collection = $collection->paginate(c::get('plugin.serp.limit', 10));
$pagination = $collection->pagination();
$prefix = c::get('plugin.serp.prefix', 'serp');

snippet($prefix . '-meta');
snippet($prefix . '-hero', ['posts' => $collection, 'pagination' => $pagination, 'filter' => $filter]);
snippet($prefix . '-items', ['posts' => $collection]);
snippet($prefix . '-pagination', ['pagination' => $pagination]);