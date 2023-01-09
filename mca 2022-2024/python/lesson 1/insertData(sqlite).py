#insert data into test in sqlite3

import sqlite3

conn = sqlite3.connect('myDatabase.py')
if (conn) :
    #Create a cursor
    cursor = conn.cursor()
    #Create table test
    #sql = 'CREATE TABLE test(id INT AUTO_INCREMENT, name VARCHAR(20))'
    #cursor.execute(sql)
    #print('Database Created')
    #Insert data into test table.
    sql = "INSERT INTO test VALUES(? , ?)"
    bind = [(1, 'Neel Chalke'), (2, 'Reet Chlake'), (3, 'Mangesh Chalke'), (4, 'Tanvi Chalke'), (5, 'Jyoti Chalke')]
    cursor.executemany(sql,bind)
   # cursor.commit()
    print('Data Inserted')
