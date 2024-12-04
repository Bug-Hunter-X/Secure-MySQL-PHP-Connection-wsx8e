This improved version uses the MySQLi extension, which is secure, and provides better error handling.
```php
<?php
$mysqli = new mysqli('localhost', 'user', 'password', 'database');
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
exit();
}
echo 'Connected successfully';
$mysqli->close();
?>
```
This version also demonstrates how to use prepared statements to avoid SQL injection issues when dealing with user-provided data.  Always sanitize and validate user input, regardless of the database access method.