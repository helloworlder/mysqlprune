mysqlprune
==========

Prunes oldest N records by field with MySQL query. For example, we would like to keep the 5 newest rows that belongs to each and every user.

Run `insert.php` for 20 rows of data. Then run `delete.php` to test.

The code is from: 

* http://stackoverflow.com/questions/4720996/delete-n-number-of-old-records-from-table-in-mysql
* http://stackoverflow.com/questions/17035357/mysql-delete-rows-keeping-the-last-5-for-the-each-user-id

The DB structure assumed: 

| id| user_id | datetime          |
|---|---------|-------------------:|
| 1 |   1     | 2011-01-19 18:51:01|
| 2 |   1     | 2011-01-19 18:51:02| 
|3  |   1     | 2011-01-19 18:51:03|  
|4  |   1     | 2011-01-19 18:51:04|  
|5  |   1     | 2011-01-19 18:51:05|  
|6  |   1     | 2011-01-19 18:51:06|  
|7  |   1     | 2011-01-19 18:51:07|  
|8  |   1     | 2011-01-19 18:51:08|  
|9  |   1     | 2011-01-19 18:51:09|  
|10 |   2     | 2011-01-19 18:51:10|  
  

