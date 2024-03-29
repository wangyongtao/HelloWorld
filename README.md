# HelloWorld

LINUX 
Golang
PHP 
MySQL 
HTML 
JavaScript 
jQuery 

## 开发工具 Developer Tools

[PhpStorm](https://www.jetbrains.com/phpstorm/) (php)

[IntelliJ IDEA](https://www.jetbrains.com/idea/) (java)

[GoLand](https://www.jetbrains.com/go/) (golang)

[Eclipse IDE](https://www.eclipse.org/downloads/) 

Visual Studio Code

Sublime Text 3


## [Shell](shell/README.md)

输出字符串 echo : display a message 

```
sh-3.2$ bash

bash-5.0$ echo "Hello World!"
Hello World!

bash-5.0$ echo $(date)
2021年 1月 7日 星期四 14时30分59秒 CST

bash-5.0$ echo $(date +"%Y-%m-%d %T")
2021-01-07 14:31:04
```

## [C 语言](c/README.md)

create file `hello.c`： 

```
#include <stdio.h>
 
int main()
{
    /* 我的第一个 C 程序 */
    printf("Hello, World! \n");
 
    return 0;
}
```

compile and run:

```
$ clang hello.c && ./a.out
Hello, World! 

$ gcc hello.c && ./a.out
Hello, World! 
```

## [PHP](php/README.md)

create file `index.php`:

```
<?php

$str = "Hello, World!";

// 使用  ech 函数输出一个或多个字符串。使用 "\n" 来换行。
echo $str . "\n";

// 使用 var_dump 函数来打印变量的相关信息
var_dump($str);
```

Run the code in terminal : 

```sh
$ php index.php 
Hello, World!
string(13) "Hello, World!"
```

## [Go](go/README.md)

create file `main.go` :

```go
package main

import (
    "fmt"
)

func main() {
    fmt.Println("Hello, World!")
}
```

compile and run:

```sh
$ go run main.go 
Hello, World!
```


## [Rust](rust/README.md)

create file : `main.rs` :

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

