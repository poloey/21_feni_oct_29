# [:house: Feni Batch Home Page](http://poloey.github.io/feni)

# Class 21 

##  HOME work

Build a html template using help of php

## `get` `post` `$_GET` `$_POST` `$_REQUEST` `$_SERVER` `$GLOBALS` `var_dump()` `print_r()`

in order to passing data to server using `url` (address bar) we will use `get` method. 
~~~html
<form action="page.php" method='get'>
~~~
to passing data to server without usign `url` we will use `post` method. 
~~~html
<form action="page.php" method='get'>
~~~

When we use method `get`, we can access `name` value by `$_GET` super global array.      
~~~php
$email = $_GET['email'];
~~~
When we use method `post`, we can access `name` value by `$_POST` super global array. 

~~~php
$email = $_POST['email'];
~~~
if we use `$_REQUEST` super global array we can access both `get` and `post` method name value

~~~php
$email = $_REQUEST['email'];
~~~

