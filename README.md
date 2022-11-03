[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner-direct-single.svg)](https://stand-with-ukraine.pp.ua)

<p align="center"><a href="https://github.com/viewi/viewi#logo"><img src="https://dev.viewi.net/logo.svg" alt="Viewi" height="150"/>
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>
<h1 align="center"><a href="https://laravel.com/">Laravel</a> adapter for <a href="https://viewi.net">Viewi</a></h1>
<h2 align="center">A powerful tool for building full-stack and completely reactive web applications with PHP</h2>

## Installation

Assuming you have your Laravel application. If not, please create one.

### Install viewi-lib/viewi-laravel package

`composer require viewi-lib/viewi-laravel`

### Create Viewi application

`vendor/bin/viewi new -e -a`

OR

`vendor/bin/viewi new -a`

more here: [Installation Viewi](https://viewi.net/docs/installation)

### Include Viewi routes

In routes\web.php include your Viewi app

`require __DIR__ . '/../viewi-app/viewi.php';`

OR if you have created Viewi app in a different folder:

`require __DIR__ . '/../path-to-your-viewi-app/viewi.php';`

### All done, you are ready to go

`php artisan serve`


Support
--------

We all have full-time jobs and dedicate our free time to this project, and we would appreciate Your help of any kind. If you like what we are creating here and want us to spend more time on this, please consider supporting:

 - Give us a star⭐.
 - Support me on [buymeacoffee](https://www.buymeacoffee.com/ivan.v)
 - Follow us on [Twitter](https://twitter.com/viewiphp).
 - Contribute by sending pull requests.
 - Any other ideas or proposals? Please mail me voitovych.ivan.v@gmail.com.
 - Feel welcome to share this project with your friends.


## Links

[Viewi docs](https://viewi.net/docs)

[Discussions (Forum)](https://github.com/viewi/viewi/discussions)

[Adapter package](https://github.com/ivanvoitovych/viewi-laravel)

[Viewi Laravel Demo](https://github.com/ivanvoitovych/viewi-laravel-demo)

[Laravel](https://laravel.com/)

License
--------

MIT License

Copyright (c) 2020-present Ivan Voitovych

Please see [LICENSE](/LICENSE) for license text