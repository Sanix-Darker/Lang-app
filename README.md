# Lang-app
Config a multi lang in your app

## How it work?
Once the request to access a page is made, if the user didn't select any language, a default one is selected(french actually). Considering the user selected a language before, next requests will just reuse his choice which is even saved in the session.

**All is contextual, meaning the visitor will remain on the same page with a different language.**

## How to use it?

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
