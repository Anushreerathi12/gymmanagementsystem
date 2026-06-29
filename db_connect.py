import mysql.connector

# Connect to MySQL Database
db = mysql.connector.connect(
    host="localhost",
    user="root",   # Default MySQL user in XAMPP
    password="",   # Leave empty if no password is set
    database="gym_management"
)

if db.is_connected():
    print("✅ Successfully connected to the database!")
else:
    print("❌ Connection failed!")
