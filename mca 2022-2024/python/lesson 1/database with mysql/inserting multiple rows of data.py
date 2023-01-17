#Inserting Multiple rows of data in players table

import mysql.connector

try :
    conn = mysql.connector.connect(host='localhost', username='root', password='',db='nba')
    cursor = conn.cursor()
    sql = 'INSERT INTO players(id,player_name,team_name) VALUES(%s,%s,%s)'
    bind = [(2, 'Kobe Bryant', 'Los Angeles Lakers'), 
            (3, 'Michael Jordan', 'Chicago Bulls'), 
            (4, 'Magic Johnson', 'Los Angeles Lakers'), 
            (5, 'Larry Bird', 'Boston Celtics'), 
            (6, "Shaquille O'Neal", 'Los Angeles Lakers'), 
            (7, 'Tim Duncan', 'San Antonio Spurs'), 
            (8, 'Stephen Curry', 'Golden State Warriors'), 
            (9, 'Kevin Durant', 'Brooklyn Nets'), 
            (10, 'James Harden', 'Houston Rockets')
            ]
    cursor.executemany(sql,bind)
    conn.commit()
    print('Data has been inserted')
except Exception as e :
    print(e)
finally :
    cursor.close()
    conn.close()
