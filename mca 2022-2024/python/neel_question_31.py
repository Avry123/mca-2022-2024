#CREATE TABLE USING MYSQL.CONNECTOR.

#Creating a table inside the nba database

import mysql.connector

try :
    conn = mysql.connector.connect(host = 'localhost', user = 'root', password='', db='nba1')
    cursor = conn.cursor()
    sql = 'CREATE TABLE players1(id INT PRIMARY KEY, player_name VARCHAR(25), team_name VARCHAR(25))'
    cursor.execute(sql)
    conn.commit()
    print('Table Created')
except Exception as e:
    print(e)
finally :
    cursor.close()
    conn.close()
