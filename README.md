# Autoload

## Purpose
Automatically load all PHP files in the specified directory. Recursively.

### Benefits

* Rename files with no fear of breaking `includes` or `require` calls
* Encourages using more files to more cleanly organize code into smaller logical chunks
* Reduce git merge conflicts with other developers

## Usage
Install via composer by adding the [package](https://packagist.org/packages/aaronholbrook/autoload) to your composer file. `"aaronholbrook/autoload": "1.*",` does the trick.

Be sure to include the regular composer load file via `require( __DIR__ . '/vendor/autoload.php' );`.

Please note that although similarly named, this Autoload library is meant for loading all PHP files in a given directory. This does **NOT** function in the manner of the built-in PSR-4 PHP Autoloader.

Simply load your desired `includes` or whatever directory by calling:

```
\AaronHolbrook\Autoload\autoload( __DIR__ . 'includes' );
```

