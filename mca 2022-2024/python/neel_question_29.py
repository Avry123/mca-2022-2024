#creating db with pymysql
#Creating a database.
import mysql.connector

try :
    conn = mysql.connector.connect(host='localhost', user = 'root', password='')
    cursor = conn.cursor()
    sql = 'CREATE DATABASE nba1'
    cursor.execute(sql)
    conn.commit()
    print('Database Created')
except Exception as e:
    print(e)
finally :
    cursor.close()
    conn.close()
