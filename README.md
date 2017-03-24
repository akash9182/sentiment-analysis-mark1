# sentiment-analysis-mark1
Android app that analyse your sentiment from text you write. I used TextBlob Python (2 and 3) library for processing textual data. It provides a simple API for diving into common natural language processing (NLP) tasks such as part-of-speech tagging, noun phrase extraction, sentiment analysis, classification, translation, and more.

Install dependencies on server,
  
  sudo apt-get install python

Add files from php_python_files to your server.
Files should be copied to /var/www/html folder.

Additionaly, you need to create database with database name as "sentiment_analysis", table name as "sentence" along with 3 rows 
namely "id", "sentence" and "analysis". 

You need to change your server url link in android MainActivity according to your server.
