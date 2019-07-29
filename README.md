[![Build Status](https://travis-ci.org/immortalvision/laravel-slack.svg?branch=master)](https://travis-ci.org/immortalvision/laravel-slack)
[![StyleCI](https://github.styleci.io/repos/199508412/shield?branch=master)](https://github.styleci.io/repos/199508412)
<a href="https://packagist.org/packages/immortalvision/laravel-slack"><img src="https://poser.pugx.org/immortalvision/laravel-slack/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/immortalvision/laravel-slack"><img src="https://poser.pugx.org/immortalvision/laravel-slack/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/immortalvision/laravel-slack"><img src="https://poser.pugx.org/immortalvision/laravel-slack/license.svg" alt="License"></a>

# Laravel Slack
A laravel integration for slack api

---

## Installation

The recommended way to install this library is through Composer:

`$ composer require immortalvision/laravel-slack`

If you're not familiar with `composer` follow the installation instructions for
[Linux/Unix/Mac](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) or
[Windows](https://getcomposer.org/doc/00-intro.md#installation-windows), and then read the
[basic usage introduction](https://getcomposer.org/doc/01-basic-usage.md).

### Laravel 5.5 and up

You don't have to do anything else, this package uses the Package Auto-Discovery feature, and should be available as soon as you install it via Composer.

### Laravel 5.4 or 5.3

Add the following Service Provider to your **config/app.php** providers array:

`ImmortalVision/LaravelSlack/LaravelSlackServiceProvider::class,`

### Publish Laravel Configuration Files (All Versions)

`php artisan vendor:publish --provider="ImmortalVision\LaravelSlack\LaravelSlackServiceProvider"`

### Environment Variables

```
SLACK_WEBHOOK_URL=<insert_webhook_here>
```

## Usage

you can use dependency injection feature in any method of your controller or resolve it through laravel service container:

using dependency injection:
```php
Route::get('/', function (\Maknz\Slack\Client $slackClient) {
    dd($slackClient->withIcon(':face_palm:')->send('test!'));
});
```

using service container:
```php
$slackClient = resolve('Maknz\\Slack\\Client');
dd($slackClient->withIcon(':face_palm:')->send('test!'));
```

## Dependencies

The library uses [Guzzle](https://github.com/guzzle/guzzle) as its HTTP communication layer.

We are using [maknz/slack](https://github.com/maknz/slack) as the slack library for now.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
