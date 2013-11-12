<?php
// SOURCE:
// http://stackoverflow.com/questions/17035357/mysql-delete-rows-keeping-the-last-5-for-the-each-user-id
// http://stackoverflow.com/questions/4720996/delete-n-number-of-old-records-from-table-in-mysql

/* 
* Do not order by datetime because the subquery can return more
* than 1 row in that case. Instead, you can use an auto-incrementing id field. 
*/

mysql_connect("localhost", "DBUSER", "DBPASSWORD") or die(mysql_error());
mysql_select_db("DBNAME") or die(mysql_error());

$sql = "DELETE aa.* 
FROM LoginTime aa,
(
SELECT DISTINCT c.user_id AS user_id,
    (SELECT x.id 
    FROM LoginTime AS x
    WHERE x.user_id = c.user_id
    ORDER BY x.id DESC
    LIMIT 4,1) AS id
FROM LoginTime AS c
) bb
WHERE aa.user_id = bb.user_id AND aa.id < bb.id";

mysql_query($sql) or die(mysql_error());  

?>