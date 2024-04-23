如何获取当前系统的版本信息？

How to Find Your Operating System Version Information ?

## Linux: Ubuntu/Debian

(1) 使用 uname 显示操作系统信息

参数 `-a` 显示全部所有信息: 

```
root@wang123net:~# uname -a
Linux sh1a 6.1.0-13-amd64 
  #1 SMP PREEMPT_DYNAMIC Debian 6.1.55-1 (2023-09-29) x86_64 GNU/Linux
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
root@wang123net:~# apt install lsb-release
root@wang123net:~# lsb_release -a
No LSB modules are available.
Distributor ID:	Debian
Description:	Debian GNU/Linux 12 (bookworm)
Release:	12
Codename:	bookworm
```

(3) 查看系统自带的发行文件：

查看 /etc/issue 文件： 

```sh
root@wang123net:~# cat /etc/issue
Debian GNU/Linux 12 \n \l
```

查看 /etc/os-release 文件: 

```sh
root@wang123net:~# cat /etc/os-release 
PRETTY_NAME="Debian GNU/Linux 12 (bookworm)"
NAME="Debian GNU/Linux"
VERSION_ID="12"
VERSION="12 (bookworm)"
VERSION_CODENAME=bookworm
ID=debian
HOME_URL="https://www.debian.org/"
SUPPORT_URL="https://www.debian.org/support"
BUG_REPORT_URL="https://bugs.debian.org/"
```

查看 /proc/version 文件：获取当前系统的内核版本号及系统名称

```sh
root@wang123net:~# cat /proc/version
Linux version 6.1.0-13-amd64 (debian-kernel@lists.debian.org) 
 (gcc-12 (Debian 12.2.0-14) 12.2.0, GNU ld (GNU Binutils for Debian) 2.40) 
 #1 SMP PREEMPT_DYNAMIC Debian 6.1.55-1 (2023-09-29)
```
amd64 代表系统是64位的系统 (同 X86_64)。


查看 /etc/debian_version 文件，获取 Debian 系统的版本号 : 

```sh
root@wang123net:~# cat /etc/debian_version
12.5
```

(4) 使用 hostnamectl 命令

命令 hostnamectl 可用于查询和更改系统主机名和相关设置。

```sh
root@Vwang123net:~# hostnamectl
Static hostname: wang123net
     Icon name: computer-vm
       Chassis: vm
      Machine ID: 4f2900a9f21144e4b597c68adfad51f2
         Boot ID: 02e52b64d1dc41639fd0044a7ff4662d
  Virtualization: kvm
Operating System: Debian GNU/Linux 12 (bookworm)  
          Kernel: Linux 6.1.0-13-amd64
    Architecture: x86-64
  Hardware Model: CVM
Firmware Version: seabios-1.9.1-qemu-project.org
```


## Mac OS X / macOS

(1) 使用 uname 显示操作系统信息 (同 linux)

```sh
$ uname -a
Darwin wangtom.local 23.4.0 Darwin Kernel Version 23.4.0: Fri Mar 15 00:12:49 PDT 2024; 
 root:xnu-10063.101.17~1/RELEASE_ARM64_T6020 arm64

$ uname -rpsmn
Darwin wangtom.local 23.4.0 arm64 arm
```

(2) 使用 sw_vers 命令：   

Print macOS operating system version.  打印 macOS 操作系统版本。

```
$ sw_vers
ProductName:		macOS
ProductVersion:		14.4.1
BuildVersion:		23E224
```

(3) 查看 SystemVersion.plist 文件: 

```
$ cat /System/Library/CoreServices/SystemVersion.plist

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>BuildID</key>
	<string>BD8B3086-E741-XXX-BB3B-XX</string>
	<key>ProductBuildVersion</key>
	<string>23E224</string>
	<key>ProductCopyright</key>
	<string>1983-2024 Apple Inc.</string>
	<key>ProductName</key>
	<string>macOS</string>
	<key>ProductUserVisibleVersion</key>
	<string>14.4.1</string>
	<key>ProductVersion</key>
	<string>14.4.1</string>
	<key>iOSSupportVersion</key>
	<string>17.4</string>
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

