# Viewi adapter for Laravel

## [Viewi](https://viewi.net)

## Install

Assuming you have your Laravel application. If not, please create one.

### Install viewi-lib/viewi-laravel package

`composer require viewi-lib/viewi-laravel`

### Create Viewi application

`vendor/bin/viewi new -e`

OR

`vendor/bin/viewi new`

more here: [Installation Viewi](https://viewi.net/docs/installation)

### Remove viewi standalone app code from public/index.php

This code should be removed

```php
// Viewi application here
include __DIR__ . '/../viewi-app/viewi.php';
Viewi\App::handle();
```

### Include Viewi routes

In routes\web.php include your Viewi app

`require __DIR__ . '/../viewi-app/viewi.php';`

OR if you have created Viewi app in a different folder:

`require __DIR__ . '/../path-to-your-viewi-app/viewi.php';`

### All done, you are ready to go

`php artisan serve`
