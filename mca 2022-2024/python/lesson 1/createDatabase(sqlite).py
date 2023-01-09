#sqlite file

import sqlite3

conn = sqlite3.connect('myDatabase.db')
if (conn) :
    #Create a cursor
    cursor = conn.cursor()
    cursor.execute('CREATE TABLE test(id INT AUTO_INCREMENT NOT NULL, name VARCHAR(20))')
    print('table created successfully')
else :
    print('Not Successful')
