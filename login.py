import mysql.connector

# Connect to Database
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="gym_management"
)

cursor = db.cursor()

# Function for User/Admin Login
def login(role):
    email = input("Enter Email/Username: ")
    password = input("Enter Password: ")

    if role == "admin":
        query = "SELECT username, password FROM admin WHERE username = %s"
    elif role == "user":
        query = "SELECT email, password FROM users WHERE email = %s"
    else:
        print("❌ Invalid role selected!")
        return

    cursor.execute(query, (email,))
    result = cursor.fetchone()

    if result:
        stored_username, stored_password = result  # Extract stored username & password
        print(f"DEBUG: Stored Username -> {stored_username}")
        print(f"DEBUG: Stored Password -> {stored_password}")

        if stored_password == password:
            print(f"✅ {role.capitalize()} Login Successful!")
        else:
            print(f"❌ Incorrect Password for {role}!")
    else:
        print(f"❌ {role.capitalize()} Login Failed! Username/Email not found.")

# Choose Role to Login
role = input("Login as (user/admin): ").lower()
if role in ["user", "admin"]:
    login(role)
else:
    print("❌ Invalid role selected!")
