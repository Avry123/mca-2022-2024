#Deleting a record

import pymysql

try :
    conn = pymysql.connect(host = 'localhost',user = 'root',password = '',db = 'nba1')
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
