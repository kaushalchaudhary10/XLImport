# Import Excel File (.xlsx) from CLI

This utility pushes contents from the CSV to the MySQL Database

# Requirements
- PHP 5.6+
    Extensions (Used by the library)
    - gd2
    - xml
    - zip
- MySQL

# Instructions
Import the table/employee.sql file in the MySQL database.

Update conf.php to hold the appropriate MySQL Connection Credentials

Navigate the the project directory and Execute the following command
```

php xl_import.php -f ~/Downloads/templateShedule.xlsx 

E.g
Kaushals-MacBook:xlImport kaushal$ php xl_import.php -f ~/Downloads/templateShedule.xlsx 
File Path: /Users/kaushal/Downloads/templateShedule.xlsx
Connected to 127.0.0.1
[REC SUCCESS]: ID- 1237780 | Name- kimmy  
[REC SUCCESS]: ID- 1237780 | Name- kimmy  
[REC SUCCESS]: ID- 1237780 | Name- kimmy  
[REC SUCCESS]: ID- 1237780 | Name- kimmy  
[REC SUCCESS]: ID- 1237780 | Name- kimmy  
[REC SUCCESS]: ID- 1237780 | Name- kimmy  
[REC SUCCESS]: ID- 1237780 | Name- kimmy  
[REC SUCCESS]: ID- 1237780 | Name- kimmy  
[REC SUCCESS]: ID- 1237780 | Name- kimmy  
All Done
```
