# PushNotification Package

[![Build Status](https://api.travis-ci.org/Aureagle/JazzCash.svg)](https://api.travis-ci.org/Aureagle/JazzCash)
[![Total Downloads](https://poser.pugx.org/aureagle/JazzCash/downloads)](https://packagist.org/packages/aureagle/JazzCash)
[![Latest Stable Version](https://poser.pugx.org/Aureagle/JazzCash/v/stable)](https://packagist.org/packages/aureagle/JazzCash)
[![License](https://poser.pugx.org/aureagle/JazzCash/license)](https://packagist.org/packages/aureagle/JazzCash)

This is an easy to use package to send push notification.

#### Payment Methods Available:
* None
* Payment Method Providers coming soon iA.

#### Payment Methods In Progress:

* DD (Internet Banking)
* OTC (Over the counter)
* MWALLET (Mobile Wallet)
* MIGS (card based)

## Installation

### Laravel 5.0 - 5.1

type in console:

```
composer require aureagle/jazzcash:dev-laravel-5
```

### Laravel 5.2 and higher

type in console:

```
composer require aureagle/jazzcash
```

## Laravel 5.*

**Laravel 5.5 or higher?**

Then you don't have to either register or add the alias, this package uses Package Auto-Discovery's feature, and should be available as soon as you install it via Composer.

(Laravel < 5.5) Register the PushNotification service by adding it to the providers array.
```php
'providers' => array(
    ...
    Aureagle\JazzCash\Providers\JazzCashServiceProvider::class
)
```

(Laravel < 5.5) Let's add the Alias facade, add it to the aliases array.
```php
'aliases' => array(
    ...
    'JazzCash' => Aureagle\JazzCash\Facades\JazzCash::class,
)
```

Publish the package's configuration file to the application's own config directory
```
php artisan vendor:publish --provider="Aureagle\JazzCash\Providers\JazzCashServiceProvider" --tag="config"
```

> Go to [laravel facade sample](https://github.com/aureagle/JazzCash#laravel-alias-facade) directly.

### Configuration

After publishing the configuration, all the Push service config details are located in config/jazzcash.php

The default configuration parameters for **JCApi** are :

*   priority => normal
*   dry_run => false
*   apiKey => Your ApiKey

You can dynamically update those values or adding new ones calling the method setConfig like so:
```php
$jazz->setConfig([
    'priority' => 'high',
    'dry_run' => true,
    'time_to_live' => 3
]);
```


