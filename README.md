## Minify HTML for Laravel 4

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

### Documentation

Coming soon!
