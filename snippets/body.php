<?php
$collection = c::get('plugin.serp.collection', site()->index()->visible()->flip()->sortBy('id', 'asc'));

if(isset($filter) && $filter == 'warnings') {
    $collection = $collection->filter(function($item) {
        if($item->seo_description()->isEmpty() || $item->seo_title()->isEmpty()) {
            return true;
        }
    });
}

$collection = $collection->paginate(c::get('plugin.serp.limit', 10));
$pagination = $collection->pagination();
$prefix = c::get('plugin.serp.prefix', 'serp');

snippet($prefix . '-hero', ['posts' => $collection, 'pagination' => $pagination]);
snippet($prefix . '-items', ['posts' => $collection]);
snippet($prefix . '-pagination', ['pagination' => $pagination]);