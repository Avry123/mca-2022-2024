import mysql.connection

conn = mysql.connection(servername ='localhost', username = 'root', password = 'avry')

cursor = conn.cursor()

listDB = cursor.execute('select database')

for i in listDB:
    print(i)