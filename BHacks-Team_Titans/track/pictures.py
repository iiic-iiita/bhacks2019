import face_recognition
#import sqlite3
import datetime
import socket
# Load the jpg files into numpy arrays

s1_image = face_recognition.load_image_file("s1.jpg")
amit_image = face_recognition.load_image_file("amit.jpg")
unknown_image = face_recognition.load_image_file("amit1.jpg")
s = socket.socket()
port = 3125
s.connect(('localhost', port))
# Get the face encodings for each face in each image file
# Since there could be more than one face in each image, it returns a list of encodings.

try:
    s1_face_encoding = face_recognition.face_encodings(s1_image)[0]
    amit_face_encoding = face_recognition.face_encodings(amit_image)[0]
    unknown_face_encoding = face_recognition.face_encodings(unknown_image)[0]
except IndexError:
    print("I wasn't able to locate any faces in at least one of the images. Check the image files. Aborting...")
    quit()

known_faces = [
    s1_face_encoding,
    amit_face_encoding
]

# results is an array of True/False telling if the unknown face matched anyone in the known_faces array
results = face_recognition.compare_faces(known_faces, unknown_face_encoding)
if results[0] == True:
	ans = 's1'
else:
	ans = 'amit'
currtime = str(datetime.datetime.now())
print(currtime)
loc = 'block_1'
#conn = sqlite3.connect('face.db')
#cur = conn.cursor()
#cur.execute('''INSERT INTO professor(name, location, time) VALUES(?, ?, ?)''', (ans, loc, currtime))
#conn.commit()
z = ans+"%"+loc+"%"+currtime
s.sendall(z.encode())
s.close()
print("Is the unknown face a picture of s1? {}".format(results[0]))
print("Is the unknown face a picture of amit? {}".format(results[1]))
print("Is the unknown face a new person that we've never seen before? {}".format(not True in results))
