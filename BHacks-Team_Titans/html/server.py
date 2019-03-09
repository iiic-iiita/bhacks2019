import socket
import sys
import sqlite3

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
port = 3125
s.bind(('0.0.0.0', port))
print ('Socket binded to port 3125')
s.listen(3)
print ('socket is listening')
conn = sqlite3.connect('prof.db')

while True:
    c, addr = s.accept()
    print ('Got connection from ', addr)
    #print (c.recv(1024))
    x = c.recv(1024)
    print (x)
    y = str(x)
    z = y.split('%')
    cur = conn.cursor()
    #cur.execute('''INSERT INTO professor(name, location, time) VALUES(?, ?, ?)''', (z[0], z[1], z[2]))
    cur.execute('''UPDATE professor SET location = ?, time = ? where name = ?''', (z[1],z[2],z[0]))
    conn.commit()
    c.close()
