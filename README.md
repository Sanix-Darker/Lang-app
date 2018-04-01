# Lang-app
Config a multi lang in your app

## How it work?
Once the request to access a page is made, if the user didn't select any language, a default one is selected(french actually). Considering the user selected a language before, next requests will just reuse his choice which is even saved in the session.

**All is contextual, meaning the visitor will remain on the same page with a different language.**
### > lang/config_lang.php
```php
  <?php 
    // Session Declaration
    session_start();

    // default language is french
    $default_language = 'fr';

    // Create the session lang variable if it's not exist
    if(!isset($_SESSION['lang'])){
      $_SESSION['lang'] = $default_language;
    }

    // Checking the lang parameter and if the file exist
    if(isset($_REQUEST['lang']) && file_exists('lang/'.$_REQUEST['lang'].'.php')){

      include('lang/'.$_REQUEST['lang'].'.php');
    
      $_SESSION['lang'] = $_REQUEST['lang'];

      // For a particular redirection, ou can change this
      //header('Location: '.$_SERVER['HTTP_REFERER']);
    }else{

      // Choose the Default language
      include('lang/'.$_SESSION['lang'].'.php');
    }

    /**
     * [ifIsCurrentlangOrNot description]
     * @param  [type] $lang [The lang parameter in the select]
     * @return [type]       [description]
     * Just to check the current language selected
     */
    function ifIsCurrentlangOrNot($lang){
      return ((isset($_REQUEST['lang']) && $_REQUEST['lang']==$lang) || (isset($_SESSION['lang']) && $_SESSION['lang']==$lang))? true : false ;
    }

  ?>

```
## How to use it?

### > lang/en.php
```php
  <?php 
    // Defines constants in english config file
    define('EXPRESSION', 'There is an expression');
  
  ?>
```
### > lang/fr.php
```php
  <?php 
    // Defines constants in french config file
    define('EXPRESSION', 'Ceci est une expression');
  
  ?>
```

### > lang/sp.php
```php
  <?php 
    // Defines constants in spanish config file
    define('EXPRESSION', 'Esta es una expresión');
  
  ?>
```

### > index.php 
```php
  <?php 
    //Or anywhere in your code

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
