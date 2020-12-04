# 时间转换

javascript:

js 使用 `new Date().getTime()`获取时间戳，返回值的单位是毫秒。

浏览器 console:

```sh
>
> new Date()
Fri Dec 04 2020 16:55:33 GMT+0800 (中国标准时间)
>
> new Date().getTime();
1607072122381
> parseInt(new Date().getTime().toString() / 1000)
1607072254
```

js代码：

```
const time = parseInt(new Date().getTime().toString() / 1000);
console.log(time);
```



php:

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


mysql:

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
