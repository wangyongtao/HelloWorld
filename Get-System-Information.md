如何获取当前系统的版本信息？

How to Find Your Operating System Version Information ?

## Linux: Ubuntu/Debian

(1) 使用 uname 显示操作系统信息

参数 `-a` 显示全部所有信息: 

```
root@VM-404-debian:~# uname -a
Linux VM-404-debian 5.10.0-9-amd64 #1 
SMP Debian 5.10.70-1 (2021-09-30) 
x86_64 GNU/Linux
```

参数 `-m` 查看计算机架构类型: 

```sh
$ uname -m
x86_64
```

X86_64 代表系统是64位的系统。


(2) 使用 lsb_release 命令显示发行版本信息

LSB 是 Linux Standard Base 的缩写， lsb_release 命令用来显示LSB和特定版本的相关信息。使用该命令前，一般需要使用 apt 先安装它。

```
root@VM-404-debian:~# apt install lsb-release
root@VM-404-debian:~# lsb_release -a
No LSB modules are available.
Distributor ID: Debian
Description:    Debian GNU/Linux 11 (bullseye)
Release:    11
Codename:   bullseye
```

(3) 查看系统自带的发行文件：

查看 /etc/issue 文件： 

```sh
root@VM4-14-debian:~# cat /etc/issue
Debian GNU/Linux 11 \n \l
```

查看 /etc/os-release 文件: 

```sh
root@VM-404-debian:~# cat /etc/os-release 
PRETTY_NAME="Debian GNU/Linux 11 (bullseye)"
NAME="Debian GNU/Linux"
VERSION_ID="11"
VERSION="11 (bullseye)"
VERSION_CODENAME=bullseye
ID=debian
HOME_URL="https://www.debian.org/"
SUPPORT_URL="https://www.debian.org/support"
BUG_REPORT_URL="https://bugs.debian.org/"
```

查看 /proc/version 文件：获取当前系统的内核版本号及系统名称

```sh
root@VM-4-14-debian:~# cat /proc/version
Linux version 5.10.0-9-amd64 (debian-kernel@lists.debian.org) 
(gcc-10 (Debian 10.2.1-6) 10.2.1 20210110, GNU ld (GNU Binutils for Debian) 2.35.2) 
#1 SMP Debian 5.10.70-1 (2021-09-30)
```
amd64 代表系统是64位的系统 (同 X86_64)。


查看 /etc/debian_version 文件，获取 Debian 系统的版本号 : 

```sh
root@VM-404-debian:~# cat /etc/debian_version
11.1
```

(4) 使用 hostnamectl 命令

命令 hostnamectl 可用于查询和更改系统主机名和相关设置。

```sh
root@VM-404-debian:~# hostnamectl
Static hostname: VM-404-debian
     Icon name: computer-vm
       Chassis: vm
    Machine ID: 5e83f4bc9bbb4d57b18a51e32c0513d6
       Boot ID: 8e1c07d4ddde478ba2f0a8f43b5748e3
Virtualization: kvm
Operating System: Debian GNU/Linux 11 (bullseye)
        Kernel: Linux 5.10.0-9-amd64
  Architecture: x86-64
```


## Mac OS X / macOS

(1) 使用 uname 显示操作系统信息 (同 linux)

```sh
$ uname -a
Darwin wangtomdeMac-mini.local 19.6.0 Darwin Kernel Version 19.6.0: Mon Aug 31 22:12:52 PDT 2020; root:xnu-6153.141.2~1/RELEASE_X86_64 x86_64

$ uname -rpsmn
Darwin wangtomdeMac-mini.local 19.6.0 x86_64 i386
```

(2) 使用 sw_vers 命令：   

Print macOS operating system version.  打印 macOS 操作系统版本。

```
$ sw_vers
ProductName:	Mac OS X
ProductVersion:	10.15.7
BuildVersion:	19H2
```

(3) 查看 SystemVersion.plist 文件: 

```
$ cat /System/Library/CoreServices/SystemVersion.plist

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>ProductBuildVersion</key>
	<string>19H2</string>
	<key>ProductCopyright</key>
	<string>1983-2020 Apple Inc.</string>
	<key>ProductName</key>
	<string>Mac OS X</string>
	<key>ProductUserVisibleVersion</key>
	<string>10.15.7</string>
	<key>ProductVersion</key>
	<string>10.15.7</string>
	<key>iOSSupportVersion</key>
	<string>13.6</string>
</dict>
</plist>
```

(4) system_profiler

```sh
$ system_profiler | more
```

## 参考链接 Reference

https://developer.apple.com/library/mac/documentation/Darwin/Reference/ManPages/man1/sw_vers.1.html  

https://ss64.com/osx/sw_vers.html  

