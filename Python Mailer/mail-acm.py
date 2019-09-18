import os

# email
import smtplib
from email.message import EmailMessage

#import for mysql

import mysql.connector

#fetch from db
conn = mysql.connector.connect(host='localhost',port=3306,user='root',passwd='',database='svcehost_yah')
query='SELECT participant_name,email FROM participants;'
cursor = conn.cursor()
cursor.execute(query)
rows = cursor.fetchall()
cursor.close()
conn.close()

#query to execute
query = "select name,email from participants;"

email_id = os.environ.get('EMAIL_ID')
email_pwd = os.environ.get('EMAIL_PWD')

# sending mail
def sendmail(msg):
    try:
        server_ssl.send_message(msg)
        print('successfully sent the mail')
    except:
        print("failed to send mail")

sample_email = 'shriramgobu@gmail.com'
name='Shriram'
Contentesh=''
msg=EmailMessage()
msg['Subject']='svce acm'
msg['From']=email_id
msg['To']= 'shriramgobu@gmail.com'
msg.add_alternative("""\
<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
            text-align:center;
            }
            p{
                color:rgb(104,120,177);
                font-size:16px;
                text-align:center
            }
        </style>
    </head>
    <body>
        <img src='http://drive.google.com/uc?export=view&id=1VZV9afF4s6RtBi9DTbj4nJbvTvQo9Awi'/>
        <h1 style="">Hello """+ name + '!'+"""</h1>
        <p>
Your Team has been successfully registered for our annual event, Yet Another Hackathon 2019!<br>
You'll be receiving further information about your registration for the hackathon before 20th of September,2019.
<br><br>
Best regards,
<br><br>
Student Chapter, SVCE-ACM
        </p>
        <img src='http://drive.google.com/uc?export=view&id=1YrkBxNsLa1ZeptRJ6sU79W_i1-UYBJx7'>
    </body>
</html>
""", subtype='html')
server_ssl = smtplib.SMTP_SSL("smtp.gmail.com", 465)
server_ssl.ehlo()
server_ssl.login(email_id,email_pwd)
sendmail(msg)
server_ssl.close()

# try:
    
# #     ------------------------------------welcome-----------------------------
#     if(len(rows)==0):
#         print('nil')
#     else:
#         server_ssl = smtplib.SMTP_SSL("smtp.gmail.com", 465)
#         server_ssl.ehlo()
#         server_ssl.login(user,pwd)
        
#     for row in rows:
#         row = list(row)
#         msg = EmailMessage()
#         msg['Subject'] = "SVCE-ACM YAH | welcome"
#         msg['From'] = email_id
#         msg['To'] = row[1]
#         msg.set_content("Hello " + row[0] +", this is a sample email.")
#         # send mail
#         send_mail(msg)
        
#     server_ssl.close()