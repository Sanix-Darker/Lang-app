# Lang-app translation Javascript
Config a multi lang in your app <a href="https://sanix-darker.github.io/Lang-app/JS/">DEMO HERE</a>

## How it work?
Once the request to access a page is made, if the user didn't select any language, a default one is selected(french actually). Considering the user selected a language before, next requests will just reuse his choice which is even saved in the session.

**All is contextual, meaning the visitor will remain on the same page with a different language.**
### > js/sanix_lang_app.js
```js
  var url_string = window.location.href; //window.location.href
  var url = new URL(url_string);
  var lang = url.searchParams.get("lang");

  if(lang && lang.length>0){

    // To prevent false parameters that's not defined
    if(array_lang.includes(lang)){
      value_of_lang_you_want = lang;

      // On sauve dans le navigateur
      localStorage.setItem("Sanix_lang_app", value_of_lang_you_want);

      document.getElementById('valueOflang').value = value_of_lang_you_want;
    }
    
  }else{
    // For the local storage
    if (typeof(Storage) !== "undefined") {
         
      value_of_lang_you_want = localStorage.getItem("Sanix_lang_app");

      document.getElementById('valueOflang').value = value_of_lang_you_want;
    }
  }

  var arr = document.querySelectorAll("[translate]");

  var nodesArray = [].slice.call(arr);

  [].forEach.call(nodesArray, function(element) {
    var value_to_translate = element.attributes.translate.nodeValue;

    element.innerHTML = array_lang_value[array_lang.indexOf(value_of_lang_you_want)][value_to_translate];
  });

```
## How to use it?

### > In your HTML, use translate as an attributes with specific value
```html
      ...
        <div id="menu">
          <ul>
            <li translate="MENU_PREMIER"></li>
            <li translate="MENU_DEUXIEME"></li>
      ...
      ...
    
        <script type="text/javascript" src="js/config_lang.js"></script>
        <script type="text/javascript" src="js/sanix_lang_app.js"></script>
      </body>
```
### > js/config_lang.js
```js
  // this parameter represent the default language you want
  var value_of_lang_you_want = "en";
  // this is the array of your languages
  var array_lang = [ "fr","en","sp"];

  // this is the arrays of your differents values
  var array_lang_value = [
    // fr : French
    {
      "MENU_PREMIER" : "Premier",
      "MENU_DEUXIEME" : "Deuxieme"
    },
    // en : English
    {
      "MENU_PREMIER" : "First",
      "MENU_DEUXIEME" : "Second"
    },
    // sp: spanish
    {
      "MENU_PREMIER" : "Uno",
      "MENU_DEUXIEME" : "Secondo"
    }
  ];

  // And all is done!
```
<img src="img/capture.png" >

## Author

- [Sanix-darker](https://github.com/sanix-darker)

## LICENSE

[MIT License](https://github.com/Sanix-Darker/Lang-app/blob/master/LICENSE)