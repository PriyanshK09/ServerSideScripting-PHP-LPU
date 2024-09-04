# ServerSideScripting-PHP-LPU
This repository contains all codes and notes shared during Class Hours. This repository and course Server Side Scripting focuses on PHP from Basics

## PHP Introduction
- PHP is a server side scripting language
- PHP is used to develop web applications

## Class Files (LPU)
- [Class 1](PHP1-Class1.php) - Introduction to PHP, PHP Syntax, Variables, Constants, Operators (Aug 18, 2024)
- [Class 2](PHP2-Class2.php) - Read and Write PHP, Data Types, Constants, Operators (Aug 23, 2024)
- [Class 3](PHP3-Class3.php) - Control Structure (Aug 28, 2024)
- [Class 4](PHP4-Class4.php) - Loops (Aug 30, 2024)
- [Class 5](PHP5-Class5.php) - Array (Sep 4, 2024)

## Class Tasks
- [Task 1](Task1) - E Commerce HTML Page in 30 min
- [Task 2](Task2) - Operators in PHP
- [Task 3](Task3) - Ternary Operator in PHP
- [Task 4](Task4) - Control Structure in PHP
- [Task 5](Task5) - Loops in PHP
- [Task 6](Task6) - Array in PHP


## PHP Basics
- PHP stands for Hypertext Preprocessor
- PHP is a server side scripting language
- PHP is used to develop dynamic web applications
- PHP is an open source scripting language
- PHP scripts are executed on the server
- PHP supports many databases (MySQL, Informix, Oracle, Sybase, Solid, PostgreSQL, Generic ODBC, etc.)
- PHP is an object oriented language

## PHP Installation
- PHP is a server side scripting language. It is used to develop web applications.
- PHP is open source and free to download and use.
- PHP is a server side scripting language. That means it is executed on the server.
- PHP is platform independent. It will run on most of the platforms.
- PHP is compatible with almost all servers used today (Apache, IIS, etc.)
- PHP supports many databases like MySQL, Oracle, Sybase, PostgreSQL, etc.
- PHP is easy to learn and runs efficiently on the server side.

## PHP Syntax
- A PHP script can be placed anywhere in the document.
- A PHP script starts with `<?php` and ends with `?>`.
- PHP statements end with a semicolon (;).
- PHP files have a file extension of ".php".

## PHP Variables
- A variable starts with the $ sign, followed by the name of the variable   
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive ($age and $AGE are two different variables)

## PHP Data Types
- PHP supports the following data types:
  - String
  - Integer
  - Float (floating point numbers - also called double)
  - Boolean
  - Array
  - Object
  - NULL
  - Resource

## PHP Constants
- Constants are similar to variables except that once they are defined they cannot be changed or undefined.
- A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
- A valid constant name starts with a letter or underscore (no $ sign before the constant name).
- Note: Unlike variables, constants are automatically global across the entire script.

## PHP Operators
- Operators are used to perform operations on variables and values.
- PHP divides the operators in the following groups:
  - Arithmetic operators
  - Assignment operators
  - Comparison operators
  - Increment/Decrement operators
  - Logical operators
  - String operators
  - Array operators

## PHP Conditional Statements (Control Structures)
- Conditional statements are used to perform different actions based on different conditions.
- Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.
- In PHP we have the following conditional statements:
  - if statement - executes some code if one condition is true
  - if...else statement - executes some code if a condition is is true and another code if that condition is false
  - if...elseif....else statement - executes different codes for more than two conditions
  - switch statement - selects one of many blocks of code to be executed

## PHP Loops
- Loops are used to execute the same block of code again and again, as long as a certain condition is true.
- In PHP, we have the following loop types:
  - while - loops through a block of code as long as the specified condition is true
  - do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
  - for - loops through a block of code a specified number of times
  - foreach - loops through a block of code for each element in an array

## PHP Functions
- A function is a block of statements that can be used repeatedly in a program.
- A function will not execute immediately when a page loads.
- A function will be executed by a call to the function.
- You can pass data, known as parameters, into a function.
- A function can return data as a result.

## PHP Arrays
- An array stores multiple values in one single variable.
- In PHP, there are three types of arrays:
  - Indexed arrays - Arrays with a numeric index
  - Associative arrays - Arrays with named keys
  - Multidimensional arrays - Arrays containing one or more arrays

## PHP Superglobals
- PHP superglobals are built-in variables that are always available in all scopes.
- PHP superglobals are used to collect form data, cookies, and server variables.
- In PHP, there are several predefined variables which are called superglobals.
  - $GLOBALS
  - $_SERVER
  - $_REQUEST
  - $_POST
  - $_GET
  - $_FILES
  - $_ENV
  - $_COOKIE
  - $_SESSION

## PHP Forms
- The PHP superglobals $_GET and $_POST are used to collect form-data.
- The PHP $_REQUEST variable can be used to collect the data sent through both GET and POST methods.
- The PHP $_REQUEST variable can also collect the data sent through the URL.
- The following table summarizes the methods to collect the form data:
  - GET - The GET method sends the encoded user information appended to the page request. The page and the encoded information are separated by the ? character.
  - POST - The POST method transfers information via HTTP headers. The information is encoded as described in case of GET method and put into a header called QUERY_STRING.
  - REQUEST - The REQUEST method can be used to collect data sent from both GET and POST methods.
