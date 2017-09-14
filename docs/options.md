# Options

The following options can be set in your `/site/config/config.php` file:

**Default values**

```php
c::set('plugin.serp.active', true);
c::set('plugin.serp.collection', site()->index()->visible()->flip()->sortBy('id', 'asc'));
c::set('plugin.serp.limit', 10);
c::set('plugin.serp.panel', 'panel');
c::set('plugin.serp.prefix', 'serp');
c::set('plugin.serp.url', 'serp');
```

### active

The plugin is active by default, but if you want to deactivate it you can by setting this option to `false`.

### collection

By default all pages on your site will be used in Kirby Serp and sorted alphabetically. You can set your own collection if you want.

### filter.collection

In case you need to filter the title and the description, you can do that with filters.

- Use `print_r($args['defaults'])` to see which default values you can change.
- You also have access to `$args['page']`, which is the page object in the loop.

### limit

On each page, 10 items is listed by default. You can change this if you want.

### panel

Tell the plugin where the panel is located in order to be able to edit the title and description in the Panel.

### prefix

The prefix is used for the snippet names. If you already use `serp` as prefix for another reason, you can change that prefix.

### url

By default this tool will operate at `https://example.com/serp` but you can change it if you need to.

## Filter options

All the filter options work in a similar way.

### filter.collection

Filter the array of a single collection item.

- `title` is the seo title
- `description` is the seo description
- `url` is the url of the page
- `uri` is the visible version of the url
- `panel` is the full panel url
- `flag` is different kind of statuses like `success`, `danger` and `warning`.

```php
c::set('plugin.serp.filter.collection', function($args) {
    return $args['defaults']; // Array
});
```

### filter.title

The seo title of a single page.

```php
c::set('plugin.serp.filter.title', function($args) {
    return $args['defaults']; // String
});
```

### filter.description

The seo meta description of a single page.

```php
c::set('plugin.serp.filter.description', function($args) {
    return $args['defaults']; // String
});
```

### filter.url

The url of the page. This filter is especially useful for routed urls.

```php
c::set('plugin.serp.filter.url', function($args) {
    return $args['defaults']; // String
});
```

### filter.uri

The visible version of the url.

```php
c::set('plugin.serp.filter.uri', function($args) {
    return $args['defaults']; // String
});
```

### filter.panel

The full panel url.

```php
c::set('plugin.serp.filter.panel', function($args) {
    return $args['defaults']; // String
});
```

### filter.flag

It's different kind of statuses like `success`, `warning` and `danger`.

- `success` means that both seo title and seo meta description is not empty.
- `warning` means that the meta description is empty but the title has content.
- `danger` means that the seo title is empty.

```php
c::set('plugin.serp.filter.flag', function($args) {
    return $args['defaults']; // String
});
```

## With Kirby SEO

It's possible to use Kirby SEO with this plugin. The setup in the `config.php` would be something like this:

```php
c::set('plugin.serp.filter.title', function($args) {
    $controller = SeoCore::panel( $args['page'] );
    $content = $controller['title']['full-replaced'];
    return $content;
});

c::set('plugin.serp.filter.description', function($args) {
    $controller = SeoCore::panel( $args['page'] );
    $content = $controller['description']['full-replaced'];
    return $content;
});
```