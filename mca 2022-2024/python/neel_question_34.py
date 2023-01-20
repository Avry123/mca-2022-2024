#Insert values into table laptop.

import mysql.connector

try :
    conn = mysql.connector.connect(host='localhost',username='root',password = '', db = 'nba1')
    cursor = conn.cursor()
    sql = 'INSERT INTO players(id, player_name, team_name) VALUES(%s,%s,%s)'
    bind = (1, 'Luka Doncic', 'Dallas Mavericks')
    cursor.execute(sql,bind)
    conn.commit()
    print('Data inserted')
except Exception as e:
    print(e)
finally :
    cursor.close()
    conn.close()
