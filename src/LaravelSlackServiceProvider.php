<?php

namespace ImmortalVision\LaravelSlack;

use GuzzleHttp\Client as Guzzle;
use Illuminate\Support\ServiceProvider;
use Maknz\Slack\Client as Client;

class LaravelSlackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/laravel-slack.php' => config_path('laravel-slack.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/laravel-slack.php',
            'slack'
        );
        $this->app->bind('Maknz\Slack\Client', function () {
            return new Client(
                config('slack.endpoint'),
                [
                    'channel'                 => config('slack.channel'),
                    'username'                => config('slack.username'),
                    'icon'                    => config('slack.icon'),
                    'link_names'              => config('slack.link_names'),
                    'unfurl_links'            => config('slack.unfurl_links'),
                    'unfurl_media'            => config('slack.unfurl_media'),
                    'allow_markdown'          => config('slack.allow_markdown'),
                    'markdown_in_attachments' => config('slack.markdown_in_attachments'),
                ],
                new Guzzle()
            );
        });
    }

    public function provides()
    {
        return ['immortalvision.slack'];
    }
}
