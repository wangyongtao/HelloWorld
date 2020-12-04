# HelloWorld

LINUX
PHP
MySQL
HTML
JavaScript
jQuery


## [Shell](shell/README.md)

Shell echo 命令：输出字符串

```
sh-3.2$ bash

bash-5.0$ echo "Hello World!"
Hello World!

bash-5.0$ echo $(date)
2020年12月 4日 星期五 15时57分17秒 CST

echo $(date +"%Y-%m-%d %T")
2020-12-04 15:57:09
```

## [C 语言](c/README.md)

hello.c： 

```
#include <stdio.h>
 
int main()
{
    /* 我的第一个 C 程序 */
    printf("Hello, World! \n");
 
    return 0;
}
```


```
$ clang hello.c && ./a.out
Hello, World! 

$ gcc hello.c && ./a.out
Hello, World! 
```

## [PHP](php/README.md)

Filename `index.php`:

```
<?php

$str = "Hello, World!";

// 使用  ech 函数输出一个或多个字符串。使用 "\n" 来换行。
echo $str . "\n";

// 使用 var_dump 函数来打印变量的相关信息
var_dump($str);
```

```sh
$ php index.php 
Hello, World!
string(13) "Hello, World!"
```

## [Rust](rust/README.md)

Filename: `main.rs` :

```rust
fn main() {
    println!("Hello, world!");
}
```

Compile and run the file:

On Linux or macOS: 

```bash
$ rustc main.rs
$ ./main
Hello, world!
```

On Windows: 

```
> rustc main.rs
> .\main.exe
Hello, world!
```


-END-

