SQLite

SQLite is an embedded SQL database engine. 

SQLite is an in-process library that implements a self-contained, serverless, zero-configuration, transactional SQL database engine.

The SQLite project was started on 2000-05-09.

## Command

(1) enter: "sqlite3" 

```
$ sqlite3                                                                         
SQLite version 3.34.0 2020-12-01 16:14:00
Enter ".help" for usage hints.
Connected to a transient in-memory database.
Use ".open FILENAME" to reopen on a persistent database.
sqlite> .quit
$ 
```

use `.quit` to exit from sqlite shell.


(2) enter: "sqlite3 test.db". This will create a new database named "test.db"



## References

https://www.sqlite.org/  
https://github.com/jmoiron/sqlx  
https://github.com/go-gorm/gorm  
