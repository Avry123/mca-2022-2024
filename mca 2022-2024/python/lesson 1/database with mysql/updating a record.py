#Updating a record where the id is 3
import mysql.connector

try :
    conn = mysql.connector.connect(host='localhost', user='root', password='', db='nba')
    cursor = conn.cursor()
    sql = "UPDATE players SET team_name = 'Washington Wizards' WHERE id = 3"
    cursor.execute(sql)
    conn.commit()
    print('The table has been updated')
except Exception as e:
    print(e)
finally :
    cursor.close()
    conn.close()
