import mysql.connector
mydb=mysql.connector.connect(
        host="localhost",
        user="root",
        password="ar_lol5%"
        )
mycursor=mydb.cursor()
mycursor.execute("SHOW DATABASES")
