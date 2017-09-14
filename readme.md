# Kirby Serp

*Version 0.1*

SEO tool to quickly find missing title tags and meta descriptions on your site.

![Screenshot](docs/screenshot.png)

[**Installation instructions**](docs/install.md)

## Setup

### Options

There are plenty of [options](docs/options.md) you can use to fine tune the tool.

### Snippets

There is also [a few snippets](https://github.com/jenstornell/kirby-serp/tree/master/snippets) registered by this plugin. If you are not satisfied with how they work, you can override them by adding your own snippets with the same names in `site/snippets`.

Be aware that they are prefixed by `serp-` by default.

## Usage

1. Login to the panel, don't forget this step.
1. Go to `yourdomain/serp` and you will see all your pages.
1. Go to `yourdomain/serp/warnings` and you will see pages with missing titles or descriptions.

Hover and click on the edit button to edit the page or navigate with the pagination.

## No flag

If you have no warning flag it means that both the seo title tag and the seo description has content. It does not measure quality in any way.

### Yellow flag

The yellow warning shows that you have a missing description, but have a seo title. It's not the end of the world, because Google will often generate an own description if it's missing.

### Red flag

The red warning shows that you have a missing title. It's important to fix because Google see it as a very important ranking factor.

## Changelog

**0.1**

- Initial release

## Requirements

- [**Kirby**](https://getkirby.com/) 2.5.5+

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/username/plugin-name/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Jens Törnell](https://github.com/jenstornell)