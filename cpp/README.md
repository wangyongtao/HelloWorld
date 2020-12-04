c++

hello.cpp: 

```c++
#include <iostream>

// 使用 std 命名空间
using namespace std;

int main()
{
    // cout 用来输出字符串（c + out）
    // std::endl 是一个操纵符,作用是结束当前行 等于 "\n"
    cout << "cpp: Hello, world!" << endl;
    
    return 0;
}
```

编译器

```
$ clang++ --version                          
Apple clang version 12.0.0 (clang-1200.0.32.27)
Target: x86_64-apple-darwin19.6.0
Thread model: posix
InstalledDir: /Applications/Xcode.app/Contents/Developer/Toolchains/XcodeDefault.xctoolchain/usr/bin

$ g++ --version
Configured with: 
 --prefix=/Applications/Xcode.app/Contents/Developer/usr 
 --with-gxx-include-dir=/Library/Developer/CommandLineTools/SDKs/MacOSX.sdk/usr/include/c++/4.2.1
Apple clang version 12.0.0 (clang-1200.0.32.27)
Target: x86_64-apple-darwin19.6.0
Thread model: posix
InstalledDir: /Applications/Xcode.app/Contents/Developer/Toolchains/XcodeDefault.xctoolchain/usr/bin
```

编译并执行代码:

```
$ clang++ hello.cpp -o hellocpp && ./hellocpp
cpp: Hello, world!

$ g++ hello.cpp -o hellocpp && ./hellocpp 
cpp: Hello, world!
```
