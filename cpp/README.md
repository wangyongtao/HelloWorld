c++

C++ 是一种静态类型的、编译式的、通用的编程语言，支持过程化编程、面向对象编程和泛型编程。

C++ 是 C 的一个超集，合法的 C 程序都是合法的 C++ 程序。

##  hello.cpp: 

创建 hello.cpp 文件：

```sh
$ mkdir cppdemo
$ cd cppdemo
$ vi hello.cpp
```

hello.cpp: 

```c++
#include <iostream>

// 使用 std 命名空间
// using namespace std;

int main()
{
    // cout 用来输出字符串（c + out）
    // endl 用户输出一行结束，即换行，等于 "\n" (end of line)
    std::cout << "cpp: Hello, world!" << std::endl;
    
    return 0;
}
```

C++标准库： std 是 standard 的缩写，表示“标准命名空间”。


## 编译器

```sh
$ clang++ --version                          
Homebrew clang version 12.0.1
Target: x86_64-apple-darwin19.6.0
Thread model: posix
InstalledDir: /usr/local/opt/llvm/bin

$ g++ --version
Configured with: 
 --prefix=/Applications/Xcode.app/Contents/Developer/usr 
 --with-gxx-include-dir=/Library/Developer/CommandLineTools/SDKs/MacOSX.sdk/usr/include/c++/4.2.1
Apple clang version 12.0.0 (clang-1200.0.32.27)
Target: x86_64-apple-darwin19.6.0
Thread model: posix
InstalledDir: /Applications/Xcode.app/Contents/Developer/Toolchains/XcodeDefault.xctoolchain/usr/bin
```

## 编译并执行代码:

```
$ clang++ hello.cpp -o a.out && ./a.out
cpp: Hello, world!

$ g++ hello.cpp -o a.out && ./a.out 
cpp: Hello, world!
```

## 参考 Reference 

https://en.cppreference.com/  

https://www.runoob.com/cplusplus/cpp-tutorial.html  

