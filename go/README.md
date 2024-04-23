Golang

最新官网 Go.dev  https://go.dev

## Install

[golang.org](https://golang.org)  
[golang.google.cn](https://golang.google.cn) 国内镜像  


查看版本 check version:

```go
$ which go
/usr/local/go/bin/go

$ go version 
go version go1.22.1 darwin/arm64
```


## Write some code

create directory `helloworld`: 

```
$ mkdir helloworld
$ cd helloworld 
```

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

