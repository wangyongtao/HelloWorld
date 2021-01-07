Golang

## Install

[golang.org](https://golang.org)

[golang.google.cn](https://golang.google.cn)


check version:

```go
$ which go
/usr/local/go/bin/go

$ go version 
go1.15.6 darwin/amd64
```


## Write some code

create directory `go`: 

```
$ mkdir go
$ cd go 
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

