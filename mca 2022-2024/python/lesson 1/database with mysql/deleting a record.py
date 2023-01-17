#Deleting a record

import mysql.connector

try :
    conn = mysql.connector.connect(host = 'localhost',username = 'root',password = '',db = 'nba')
    cursor = conn.cursor()
    sql = 'DELETE FROM players WHERE id = 10'
    cursor.execute(sql)
    conn.commit()
    print('Record has been deleted')
except Exception as e:
    print(e)
finally :
    cursor.close()
    conn.close()
