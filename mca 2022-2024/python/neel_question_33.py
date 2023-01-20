#TO FETCH VALUE FROM THE TABLE. mysql.connector.

import mysql.connector

try :
    conn = mysql.connector.connect(host='localhost', username='root', password='',db = 'nba1')
    cursor = conn.cursor()
    sql = "select * from players";
    cursor.execute(sql);
    x = cursor.fetchall()
    if (len(x) > 0) :
        for i in x:
            print(i)
    else :
        print('there is no data')
except Exception as e:
    print(e)
finally :
    cursor.close()
    conn.close()
    

