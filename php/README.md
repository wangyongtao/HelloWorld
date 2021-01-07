PHP

Check version: 

```sh
$ php --version
PHP 8.0.0 (cli) (built: Nov 30 2020 13:47:29) ( NTS )
Copyright (c) The PHP Group
Zend Engine v4.0.0-dev, Copyright (c) Zend Technologies
    with Zend OPcache v8.0.0, Copyright (c), by Zend Technologies
```


Create file `index.php`:

```php
<?php

$str = "Hello, World!";

// 使用  ech 函数输出一个或多个字符串。使用 "\n" 来换行。
echo $str . "\n";

// 使用 var_dump 函数来打印变量的相关信息
var_dump($str);

```

Run the code in Terminal: 

```
$ php index.php 
Hello, World!
string(13) "Hello, World!"
```

## References

https://www.php.net/  

https://www.jetbrains.com/phpstorm/

-END-
