## Minify HTML for Laravel 4

[![Latest Stable Version](https://poser.pugx.org/damianromanowski/minifyhtml/v/stable.png)](https://packagist.org/packages/damianromanowski/minifyhtml) [![Total Downloads](https://poser.pugx.org/damianromanowski/minifyhtml/downloads.png)](https://packagist.org/packages/damianromanowski/minifyhtml) [![Build Status](https://travis-ci.org/damianromanowski/minifyhtml.png?branch=master)](https://travis-ci.org/damianromanowski/minifyhtml)

Minify HTML provides a no-frills way of quickly compressing your HTML output

### Installation

- [Minify HTML on Packagist](https://packagist.org/packages/damianromanowski/minifyhtml)
- [Minify HTML on GitHub](https://github.com/damianromanowski/minifyhtml)

To get the latest version of Minify HTML simply require it in your `composer.json` file.

~~~
"damianromanowski/minifyhtml": "dev-master"
~~~

You'll then need to run `composer install` to download it and have the autoloader updated.

> Note that once Minify HTML has a stable version tagged you should use a tagged release instead of the master branch.

Once Minify HTML is installed you need to register the service provider with the application. Open up `app/config/app.php` and find the `providers` key.

~~~
'providers' => array(
    
    'Damianromanowski\Minifyhtml\MinifyhtmlServiceProvider'

)
~~~

### Configuration

Minify HTML provides easy configuration options compressing your output.
It comes with a configuration file that you can edit at your leisure.

You'll need to run `php artisan config:publish damianromanowski/minifyhtml` to publish the configuration to your application.

#### Step 1: Enable the compressor
~~~
'enabled' => true,
~~~

And you're all done!

