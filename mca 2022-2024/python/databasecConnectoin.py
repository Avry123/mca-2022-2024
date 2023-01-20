#database connection.
import mysql.connector
from mysql.connector import Error

try :
    connection = mysql.connector.connect(host = 'localhost', database='nba', user='root', password='')
    if (connection.is_connected()) :
        db_Info = connection.get_server_info()
        print('Connected to mySQL ', db_Info)
except Exception as e :
    print(e)

