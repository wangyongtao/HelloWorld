SQLite 数据库

SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine. SQLite is the most used database engine in the world. SQLite is built into all mobile phones and most computers and comes bundled inside countless other applications that people use every day.

SQLite 是一个由 C 语言实现的嵌入式的支持SQL查询的小型数据库引擎。  
SQLite 项目开始于2000年05月09日。

更多内容可查看其[网站](https://www.sqlite.org)。


## 安装

Linux 和 Mac 基本都会预装。

Mac环境可以使用 brew 安装： brew install sqlite3


直接输入 `sqlite3` 可进入命令行交互界面（sqlite shell）:

```sh
$ sqlite3              
SQLite version 3.36.0 2021-06-18 18:36:39
Enter ".help" for usage hints.
Connected to a transient in-memory database.
Use ".open FILENAME" to reopen on a persistent database.
sqlite> 
sqlite> .quit
$ 
```

退出直接输入 `.quit` 或 `.exit` 即可。



## 基本操作 Command

直接使用 sqlite3 命令进入 sqlite shell : 

$ sqlite3              
SQLite version 3.36.0 2021-06-18 18:36:39
Enter ".help" for usage hints.
Connected to a transient in-memory database.
Use ".open FILENAME" to reopen on a persistent database.
sqlite> 


使用 `.open test.db` 创建一个名为 `test.db` 的 sqlite 数据库。

$ sqlite> .open test.db


创建一个用户表 (users):

sqlite> CREATE TABLE users(
   id INTEGER PRIMARY KEY AUTOINCREMENT,
   name TEXT NOT NULL,
   score  REAL
);


创建一个商品表 (products):

sqlite> CREATE TABLE products(
   id INTEGER PRIMARY KEY AUTOINCREMENT,
   title TEXT NOT NULL,
   stock INT NOT NULL DEFAULT 0, 
   price REAL
);


使用 AUTOINCREMENT 指定字段为自增字段，注意自增字段类型必须为 INTEGER PRIMARY KEY。

```
sqlite> CREATE TABLE user3(
   id INT PRIMARY KEY AUTOINCREMENT,
   name TEXT NOT NULL
);
Error: AUTOINCREMENT is only allowed on an INTEGER PRIMARY KEY
```

注意 INT 不行，必须为 INTEGER 。


查看已有的表 (.tables):

sqlite> .tables
  products  users  

删除表 (DROP)：

DROP TABLE users;
DROP TABLE products;


INSERT 添加数据： 

插入一条数据: 

INSERT INTO users (name,score) VALUES ("admin", 100);

插入多条数据: 

INSERT INTO users (name,score) VALUES 
 ("张三", 33.3), 
 ("李四", 44.4),
 ("王五", 85.5),
 ("赵六", 86.6);

SELECT 查询数据：  

sqlite> SELECT * FROM users;
1|admin|10.0
2|张三|33.3
3|李四|44.4
4|王五|85.5
5|赵六|86.6

sqlite> SELECT * FROM users WHERE score > 60;
4|王五|85.5
5|赵六|86.6

sqlite> SELECT * FROM users ORDER BY score DESC LIMIT 1;
5|赵六|86.6


UPDATE 更新数据:

sqlite> UPDATE users SET score = '44.8' WHERE ID = 3;


DELETE 删除数据:

DELETE FROM users WHERE id=1;


## 数据库导入与导出

使用 .dump 命令导出 sql 语句。

```
$ sqlite3 test.db .dump > test.sql   
```

查看导出的SQL语句： 

```sh
$ cat test.sql 
PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE users(
   id INTEGER PRIMARY KEY AUTOINCREMENT,
   name TEXT NOT NULL,
   score  REAL
);
INSERT INTO users VALUES(2,'张三',33.299999999999997158);
INSERT INTO users VALUES(3,'李四',44.799999999999997159);
INSERT INTO users VALUES(4,'王五',85.500000000000000001);
INSERT INTO users VALUES(5,'赵六',86.599999999999994317);
CREATE TABLE products(
   id INTEGER PRIMARY KEY AUTOINCREMENT,
   title TEXT NOT NULL,
   stock INT NOT NULL DEFAULT 0, 
   price REAL
);
CREATE TABLE user3(
   id INT PRIMARY KEY NOT NULL,
   name TEXT NOT NULL
);
DELETE FROM sqlite_sequence;
INSERT INTO sqlite_sequence VALUES('users',5);
COMMIT;
```

导入新数据库:

```
$ sqlite3 myNewDB.db < test.sql
```


查看新的数据库： 

```
$ sqlite3 myNewDB.db
SQLite version 3.36.0 2021-06-18 18:36:39
Enter ".help" for usage hints.
sqlite> .tables
products  user2     users 
sqlite> .quit
```


## 参考资料 References

https://www.sqlite.org/  
https://github.com/jmoiron/sqlx  
https://github.com/go-gorm/gorm  
https://www.runoob.com/sqlite/sqlite-tutorial.html  
