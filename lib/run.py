import mysql.connector
from zk import ZK

#database connection
mydb = mysql.connector.connect(
  host="marine-co.live",
  user="user2",
  password="password",
  database="hr"
)
mycursor = mydb.cursor()
mycursor.execute("SELECT * FROM fingerprint_types where done = 0 order by id asc")

ip = list(mycursor.fetchall())

for device in ip:
    try:
        print(device[2])
        zk = ZK(device[2], port=4370, timeout=5)
        
        conn = zk.connect()
        conn.disable_device()
        users = conn.get_attendance()
        mycursor.execute("SELECT * FROM  {} where fingerprint_id = {} order by date desc limit 1".format(device[3], device[0]))
        rows = list(mycursor.fetchall())
        if rows:
            for x in rows:
                date = x[2]
                for user in users:
                    if(user.timestamp > date):
                        sql = "INSERT INTO  {} (fingerprint,date,fingerprint_id) VALUES (%s,%s,%s)".format(device[3])
                        val = (format(user.user_id),format(user.timestamp),device[0])
                        mycursor.execute(sql, val)
        else:
            for user in users:     
                        sql = "INSERT INTO  {} (fingerprint,date,fingerprint_id) VALUES (%s,%s,%s)".format(device[3])
                        val = (format(user.user_id),format(user.timestamp),device[0])
                        mycursor.execute(sql, val)
        print('true')
        
        conn.enable_device()
    
        conn.disconnect()

    except:
        print('false')
        pass
mydb.commit()
