# PHP Course

### Predefined Variables

```php
Superglobals — Built-in variables that are always available in all scopes
$GLOBALS — References all variables available in global scope
$_SERVER — Server and execution environment information
$_GET — HTTP GET variables
$_POST — HTTP POST variables
$_FILES — HTTP File Upload variables
$_REQUEST — HTTP Request variables
$_SESSION — Session variables
$_ENV — Environment variables
$_COOKIE — HTTP Cookies
$php_errormsg — The previous error message
$http_response_header — HTTP response headers
$argc — The number of arguments passed to script
$argv — Array of arguments passed to script
```

### importand Nodes

- Session 6 has very important security Feature in it for pref. code injection.
- build in Function overview https://www.exakat.io/en/top-100-php-functions/

# SQL Summary

// Create Data Table in SQL for our users:
CREATE TABLE users (
id INT(11) NOT NULL AUTO_INCREMENT,
username VARCHAR(30) NOT NULL,
pwd VARCHAR(255) NOT NULL,
email VARCHAR(100) NOT NULL,
created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
PRIMARY KEY (id)
);

// Create another Table in SQL for comments
CREATE TABLE comments (
id INT(11) NOT NULL AUTO_INCREMENT,
username VARCHAR(30) NOT NULL,
comment_text TEXT NOT NULL,
created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
users_id INT(11),
PRIMARY KEY (id),
FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
);

// Closing argumnents:
// id is our PRIVATE KEY what means, it cant be duplicated
// it is defined in the the line which sais: PRIMARY KEY (id)
// in the comments table we created a connection to the users table
// we did this with defining users_id as an INT
// second we defined a FOREIGN KEY and referenced to the created users_id
// last we made the cross table connection on users (id)
// we also defined that, in case of deletion, we replace the id with NULL

// Insert data to SQL
INSERT INTO users (username, pwd, email) VALUES ('Krossing', 'dani123', 'johndoe@gmail.com');
INSERT INTO users (username, pwd, email) VALUES ('Basse', 'basse123', 'basse@gmail.com');

// update data in SQL
UPDATE users SET username = 'BasseIsCool', pwd = 'basse456' WHERE id = 2

// delete data in SQL
DELETE FROM users WHERE id = 1;

// insert into comments
INSERT INTO comments (username, comment_text, users_id) VALUES ('Krossing', 'This is a comment on a website!', 3);

// select data from SQL
SELECT username, email FROM users WHERE id = 3;
SELECT username, comment_text FROM comments WHERE users_id = 3;
SELECT \* FROM comments WHERE users_id = 3;

// grab data from multiple tables via Foreign Key in SQL
SELECT _ FROM users INNER JOIN comments ON users.id = comments.users_id;
SELECT users.username, comments.comment_text, comments.created_at FROM users INNER JOIN comments ON users.id = comments.users_id;
SELECT _ FROM users LEFT JOIN comments ON users.id = comments.users_id;
SELECT \* FROM users RIGHT JOIN comments ON users.id = comments.users_id;
