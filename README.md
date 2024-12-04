# Insecure PHP MySQL Connection

This repository demonstrates a common, yet insecure, way to connect to a MySQL database in PHP using the now deprecated `mysql_*` functions.  The code lacks essential error handling and is vulnerable to SQL injection attacks.

The `bug.php` file shows the insecure code.  The `bugSolution.php` file provides a secure alternative using the MySQLi extension or PDO.

**Why is this insecure?**

* **Deprecated Functions:** The `mysql_*` functions are deprecated and no longer supported.  Using them is considered bad practice.
* **SQL Injection Vulnerability:** The code is susceptible to SQL injection attacks if user input is directly used in database queries.
* **Insufficient Error Handling:** The error handling is inadequate, preventing proper debugging and potential security issues.

**Solution:**

Always use the MySQLi extension or PDO for secure database interactions.  Use parameterized queries to prevent SQL injection.