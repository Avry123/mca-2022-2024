#insert data into the file.

import mysql.connector

try :
    conn = mysql.connector.connect(
           host = 'localhost',
           username = 'root',
           password = '',
           db = 'test'
        )
    if (conn) :
        cursor = conn.cursor()
        sql = "INSERT INTO student VALUES(%s,%s)"
        bind = (1 , 'Neel Chalke')
        cursor.execute(sql, bind)
        conn.commit()
        print('Data inserted')
except Exception as e :
    print(e)
