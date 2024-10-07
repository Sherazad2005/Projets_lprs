PS C:\wamp64\www\DevProjet\PHP\Projets_lprs\laravel> php artisan migrate

INFO  Running migrations.

0001_01_01_000000_create_cree_table .................................................................................................. 7.04ms FAIL

BadMethodCallException

Method Illuminate\Database\Schema\Blueprint::int does not exist.

at vendor\laravel\framework\src\Illuminate\Macroable\Traits\Macroable.php:115
111▕      */
112▕     public function __call($method, $parameters)
113▕     {
114▕         if (! static::hasMacro($method)) {
➜ 115▕             throw new BadMethodCallException(sprintf(
116▕                 'Method %s::%s does not exist.', static::class, $method
117▕             ));
118▕         }
119▕

1   database\migrations\0001_01_01_000000_create_cree_table.php:14
Illuminate\Database\Schema\Blueprint::__call("int")

2   vendor\laravel\framework\src\Illuminate\Database\Schema\Builder.php:422
Illuminate\Database\Migrations\Migration@anonymous\C:\wamp64\www\DevProjet\PHP\Projets_lprs\laravel\database\migrations\0001_01_01_000000_create_cree_table.php:7$fc::{closure}(Object(Illuminate\Database\Schema\Blueprint))

PS C:\wamp64\www\DevProjet\PHP\Projets_lprs\laravel>
