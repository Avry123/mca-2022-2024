import sqlite3 

try:
    sqliteConnection= sqlite3.connect('SQLite_Python.db')
    cursor=sqliteConnection.cursor()
    print("Database created and successfully connected to SQLITE")

    sqlite_select_Query="select sqlite_version();"
    cursor.execute(sqlite_select_Query)
    record=cursor.fetchall()
    print("SQLITE Database version is: ",record)
    cursor.close()

except Exception as error:
    print("Error while connecting to sqlite",error)
finally:
    if sqliteConnection:
        sqliteConnection.close()
        print("The Sqlite Connection is closed")
