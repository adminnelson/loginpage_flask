from flask import Flask,render_template,session,request,redirect
from MySQLdb import *
import os
import mysql.connector

app=Flask(__name__)
app.secret_key=os.urandom(24)

conn=mysql.connector.connect(host='localhost',password='',user='root',database='testingdb')
cursor=conn.cursor()


@app.route('/signup')
def about():
    return render_template('Signup.php')

@app.route('/')
def login():
    return render_template('Login.php')


@app.route('/home')
def home():
    if 'ID' in session:
        return render_template('home.php')
    else:
        return redirect('/')



@app.route('/login_validation',methods=['POST'])
def login_validation():
    NOM=request.form.get('NOM')
    PASSWORD=request.form.get('PASSWORD')
    Email=request.form.get('Email')

    cursor.execute('SELECT * FROM accounts WHERE NOM=%s  AND PASSWORD=%s AND Email=%s',(NOM,PASSWORD,Email))
    accounts=cursor.fetchall()
    print(accounts)
    msg=''
    if len(accounts)>0:
        session['ID']=accounts[0][0]
        return render_template('home.php')
    else:
        return 'invalid account try to login'

@app.route('/add_users',methods=['POST'])
def add_user():
    NOM = request.form.get('NOM')
    PASSWORD = request.form.get('PASSWORD')
    Email=request.form.get('Email')

    cursor.execute('INSERT INTO accounts VALUES (NULL,%s,%s,%s)',(NOM,PASSWORD,Email))
    conn.commit()
    return "user registered successfully"

@app.route('/logout')
def logout():
    session.pop('ID')
    return redirect('/')



if __name__=="__name__":
    app.run(debug=True)

