# Lang-app
Config a multi lang in your app
<h4>How to use it</h4>

### lang/en.php
```php
  <?php 
    // Defines constants in english config file
    define('EXPRESSION', 'There is an expression');
  
  ?>
```
### lang/fr.php
```php
  <?php 
    // Defines constants in french config file
    define('EXPRESSION', 'Ceci est une expression');
  
  ?>
```

### lang/sp.php
```php
  <?php 
    // Defines constants in spanish config file
    define('EXPRESSION', 'Esta es una expresión');
  
  ?>
```

### index.php //Or anywhere in your code
```php
  <?php 
    // In the head of your web page
    // The config file will read the language wish of user
    include('lang/config_lang.php');
  
  ?>
  ...
  <center>
    <h2><?=EXPRESSION?></h2>
  </center>
```
<img src="img/capture.png" >
