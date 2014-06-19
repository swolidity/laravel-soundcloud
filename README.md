# Soundcloud Service Provider for Laravel

A simple [Laravel 4](http://laravel.com) service provider for including the [PHP Soundcloud API](https://github.com/mptre/php-soundcloud)

## Installation

The Soundcloud Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the `adavkay/laravel-soundcloud` package.

## Usage

To use the Soundcloud Service Provider, you must register the provider when bootstrapping your Laravel application.

Find the `providers` key in `app/config/app.php` and register the Soundcloud Service Provider.

```php
	'providers' => array(
	// ...
	'Adavkay\Soundcloud\SoundcloudServiceProvider',
	)
```

You do not need to add an alias as I have done this in the service provider itself. 

### Config

Run `php artisan config:publish adavkay/laravel-soundcloud` and then update the published config file with your Soundcloud API credentials and redirect URI.