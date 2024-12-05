<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Receivers\MailchimpProvider;
use App\Http\Receivers\MailgunProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::except([
            'hooksstore'
        ]);

        $receiver = app('receiver');

        $receiver->extend('mailchimp', function ($app) {
            return new MailchimpProvider(
                config('services.mailchimp.webhook_secret')
            );
        });

        $receiver->extend('mailgun', function ($app) {
            return new MailgunProvider(
                config('services.mailgun.webhook_secret')
            );
        });
    }
}
