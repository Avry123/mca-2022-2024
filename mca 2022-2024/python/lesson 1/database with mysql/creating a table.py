#Creating a table inside the nba database

import mysql.connector

try :
    conn = mysql.connector.connect(host = 'localhost', username= 'root', password='', db='nba')
    cursor = conn.cursor()
    sql = 'CREATE TABLE players(id INT PRIMARY KEY, player_name VARCHAR(25), team_name VARCHAR(25))'
    cursor.execute(sql)
    conn.commit()
    print('Table Created')
except Exception as e:
    print(e)
finally :
    cursor.close()
    conn.close()
    
