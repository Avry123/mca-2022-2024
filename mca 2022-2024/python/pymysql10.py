#pymysql

import pymysql


conn = pymysql.connect(host='localhost', user='root', password='', db='nba')

if (conn) :
    print('Connection established')
    cursor = conn.cursor()
    sql = 'INSERT INTO player(id,name) VALUES(%s,%s)'
    bind = (1,'Neel Chalke')
    cursor.execute(sql,bind)
    conn.commit()
    print('Record Inserted')
else :
    print('Trouble connecting to database')
