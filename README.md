# Fork of GameQ v3

GameQ is a PHP library that allows you to query multiple types of multiplayer game & voice servers at the same time.

## Requirements
* PHP 5.6.40+ - [Tested](https://travis-ci.org/Austinb/GameQ) in PHP 5.6, 7.0, 7.1, 7.2 & 7.3
* [Bzip2](http://www.php.net/manual/en/book.bzip2.php) - Used for A2S Compressed responses

## Installation
#### [Composer](https://getcomposer.org/)
This method assumes you already have composer [installed](https://getcomposer.org/doc/00-intro.md) and working properly. Add `tossat/gameq: dev-master` as a requirement to composer.json by manually adding the following to the *composer.json* file:

```javascript
{
  "repositories": [
    {
      "type": "github",
      "url": "https://github.com/tossat/GameQ.git"
    }
  ],
  "require": {
    "tossat/gameq": "dev-master"
  }
}
```

Update your packages with `composer update` or install with `composer install`.

## Example
```php
$GameQ = new \GameQ\GameQ();
$GameQ->addServer([
    'type' => 'css',
    'host' => '127.0.0.1:27015',
]);
$results = $GameQ->process();
```
Need more?  See [Examples](https://github.com/Austinb/GameQ/wiki/Examples-v3).
