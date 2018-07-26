# Laravel MD5 Hash

This package is used to replace Laravel's default hash to support legacy systems that used MD5 for password hash. 

Please use it with your own risk, since MD5 is not recommended to be used as password hash.


## Installation

Using [Composer](https://getcomposer.org/), just run this command below.

```bash
composer require marcus-campos/laravel-md5-hash
```

## Configuration

After installed, open `config/app.php` and find this line.
```php
Illuminate\Hashing\HashServiceProvider::class
``` 
Comment or remove that line and add this line to override Laravel's hash handling.

```php
L5MD5Hash\Md5Hash\HashServiceProvider::class
```

## Usage

Now you can use built in hash function using this command.

```php
Hash::make('password'); // return 5f4dcc3b5aa765d61d8327deb882cf99
bcrypt('password'); // return 5f4dcc3b5aa765d61d8327deb882cf99
```

## Tanks

[Matriphe](https://github.com/matriphe/laravel-md5-hash)
 
## Contact

Marcus Campos - campos.v.marcus@gmail.com

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
