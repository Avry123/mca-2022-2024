#connect to database

import mysql.connector

conn = mysql.connector.connect(
       host = 'localhost',
       username = 'root',
       password = '',
       database = 'test'
    )

if (conn) :
    cursor = conn.cursor()
    cursor.execute('CREATE TABLE student(id INT, name VARCHAR(20))')
    print('Connection successful')
else :
    print('Sorry')
