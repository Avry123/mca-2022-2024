#connection of database using sqlite3

#Creating a table inside the nba1 database

import sqlite3

try :
    conn = sqlite3.connect('nba1')
    cursor = conn.cursor()
    sql = 'CREATE TABLE players2(id INT PRIMARY KEY, player_name VARCHAR(25), team_name VARCHAR(25))'
    cursor.execute(sql)
    conn.commit()
    print('Table Created')
except Exception as e:
    print(e)
finally :
    cursor.close()
    conn.close()
