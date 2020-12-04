# 时间转换

Unix时间戳，是从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数，不考虑闰秒。
协调世界时UTC，又称世界统一时间、世界标准时间、国际协调时间。

YYYY-MM-DD HH:mm:ss   
YYYY-MM-DDTHH:mm:ss.sssZ 

基本时间格式: 2020-12-04 18:53:33    
UTC时间格式: 2020-12-04T10:53:33.776Z  (ISO-8601)  
Unix时间戳格式: 1606986993  (当前为10位数字)   
MySQL datetiem 时间格式: "2020-12-04 09:35:12" (同基本时间格式)   
MongoDB 时间格式: ISODate("2020-12-04T09:35:12.227Z")  

ISO-8601:   
要表示北京时间 2004年5月3日下午5点30分8秒，可以写成 `2004-05-03T17:30:08+08:00` 或 `20040503T173008+08`, `+08:00` 表示东八区。  
东八区（UTC/GMT+08:00）是比世界协调时间（UTC）/格林尼治时间（GMT）快8小时的时区，理论上的位置是位于东经112.5度至127.5度之间。  
北京时间是中国采用国际时区东八时区的区时作为标准时间。  

## javascript:

js 使用 `new Date().getTime()`获取时间戳，返回值的单位是毫秒。

ISO-8601 ，格式为: YYYY-MM-DDTHH:mm:ss.sssZ，比如 "2020-12-04T11:12:22.018Z" 。

浏览器 console:

```sh
> new Date().getTime();
1607072122381

> parseInt(new Date().getTime() / 1000)
1607072254

> new Date().toString()
"Fri Dec 04 2020 19:12:05 GMT+0800 (中国标准时间)"

> new Date().toUTCString()
"Fri, 04 Dec 2020 11:12:11 GMT"

> new Date().toISOString()
"2020-12-04T11:12:22.018Z"

> new Date().toGMTString()
"Fri, 04 Dec 2020 11:12:27 GMT"
```

js代码：

```
const time = parseInt(new Date().getTime().toString() / 1000);
console.log(time);
```

为了方便日期操作，请使用 Day.js (dayjs):  

```
npm install dayjs
```


## php:

time() - Return current Unix timestamp 返回当前Unix时间戳  
strtotime() - 将任何英文文本的日期时间描述解析为Unix时间戳  
date() — Format a local time/date Format a local time/date 格式化本地时间/日期  
date_default_timezone_set() — Sets the default timezone 设置默认时区  


```sh
// 设置时区为上海
date_default_timezone_set("Asia/Shanghai"); 

// 获取当前时间戳
$time = time();  // 比如： 1607071956

// 将时间戳转成 年月日时分秒 (yyyymmdd)
$dateTime = date('Y-m-d H:i:s', $time); // 2020-12-04 08:52:36
$dateTime2 = date('Y-m-d', $time); // 2020-12-04
$dateTime3 = date('Ymd', $time); // 20201204
```

将基本时间转成时间戳：

```php
// 获取时间戳
$time = time();
// 指定时间转成时间戳
$timestamp1 = strtotime('2020-12-04 08:52:36');
// 更加指定的英文描述获取时间戳
$timestamp2 = strtotime('+1 day'); // 获取一天后的时间戳 
$timestamp3 = strtotime('-1 day'); // 获取一天前的时间戳 
$timestamp4 = strtotime('+2 weeks'); // 获取2周后的时间戳
$timestamp5 = strtotime('-2 weeks');  // 获取2周前的时间戳
$timestamp6 = strtotime('+3 months'); // 获取3个月后的时间戳
$timestamp7 = strtotime('-3 months');  // 获取3个月前的时间戳
```

```
$php -a 
php > echo strtotime("+1 day");
1607159776
php > echo strtotime("+1 week");
1607678182
php > echo strtotime("+1 month");
1609751787
php > echo strtotime("-1 day");
1606986993
php > echo strtotime("-1 week");
1606468596
php > echo strtotime("-1 month");
1604481406
php > echo strtotime('2020-12-04 08:52:36');
1607071956
```



## mysql:

```sql
-- 获取时间戳
SELECT unix_timestamp();  -- 获取当前时间戳。
SELECT unix_timestamp(now()); -- 获取当前时间戳。now()获取当前时间，如“2020-12-04 16:48:06”
SELECT unix_timestamp('2020-12-12 10:10:10'); -- 格式化先成时间戳

-- 将时间戳转换成 yyyymmdd hhiiss 格式
select from_unixtime(unix_timestamp()); -- 输出 2020-12-04 17:09:43
select from_unixtime('1607677722'); -- 输出 2020-12-11 17:08:42
select from_unixtime(1607677722);  -- 输出 2020-12-11 17:08:42
```



## 参考 Reference

https://tool.chinaz.com/Tools/unixtime.aspx
