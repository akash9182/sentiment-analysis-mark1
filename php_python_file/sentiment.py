#!/usr/bin/python

fo = open("testfile.txt", "rb")
import json
import sys	
from textblob import TextBlob

#try:
	#data = json.loads(sys.argv[1])
	#data = sys.argv[1]
data = fo.read()	
#fo.write("In try :Argument passed from php to python is loaded: " + data + "\n")
#except:
#	fo.write("In except :Exception occured, could not load data\n")
	#print("Error")
#	sys.exit(1)

#print(TextBlob(sys.argv[1]).sentiment)
# Send it to stdout (to PHP)
#print (TextBlob(data).sentiment)
#print(TextBlob(data).sentiment)
#print(json.dumps("getting something"))
print (TextBlob(data).sentiment)
fo.close()
