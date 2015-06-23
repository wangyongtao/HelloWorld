Mac OS X: Get System Information

(1)uname  
```
Mac-mini:~ WangTom$ uname -a
Darwin Mac-mini.local 14.3.0 Darwin Kernel Version 14.3.0: Mon Mar 23 11:59:05 PDT 2015; root:xnu-2782.20.48~5/RELEASE_X86_64 x86_64

Mac-mini:~ WangTom$ uname -rpsmn
Darwin Mac-mini.local 14.3.0 x86_64 i386
```
(2)sw_vers  
```
Mac-mini:~ WangTom$ sw_vers
ProductName:	Mac OS X
ProductVersion:	10.10.3
BuildVersion:	14D136
```
(3)SystemVersion.plist  
```
Mac-mini:~ WangTom$ cat /System/Library/CoreServices/SystemVersion.plist
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>ProductBuildVersion</key>
	<string>14D136</string>
	<key>ProductCopyright</key>
	<string>1983-2015 Apple Inc.</string>
	<key>ProductName</key>
	<string>Mac OS X</string>
	<key>ProductUserVisibleVersion</key>
	<string>10.10.3</string>
	<key>ProductVersion</key>
	<string>10.10.3</string>
</dict>
</plist>
```
(4) system_profiler
```
Mac-mini:~ WangTom$ system_profiler | more

```

参考链接：

https://developer.apple.com/library/mac/documentation/Darwin/Reference/ManPages/man1/sw_vers.1.html
