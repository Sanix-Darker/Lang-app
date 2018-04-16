# Lang-app **RUBY**
Config a multi lang in your app

## How it work?
Once the request to access a page is made, if the user didn't select any language, a default one is selected(french actually). Considering the user selected a language before, next requests will just reuse his choice which is even saved in the session.

**All is contextual, meaning the visitor will remain on the same page with a different language.**
### > lang/config_lang.rb
```ruby
  load 'En.rb'
  load 'Fr.rb'

  @_lang = "en"


  if @_lang == "en"

     MENU_PREMIER = En::MENU_PREMIER
     MENU_DEUXIEME = En::MENU_DEUXIEME
     MENU_TROISIEME = En::MENU_TROISIEME
     SELECT_LANGUE_FR = En::SELECT_LANGUE_FR
     SELECT_LANGUE_EN = En::SELECT_LANGUE_EN
     SELECT_LANGUE_SP = En::SELECT_LANGUE_SP
     MENU_PREMIER = En::MENU_PREMIER
     MENU_PREMIER = En::MENU_PREMIER
     MENU_PREMIER = En::MENU_PREMIER
     LIBELLE_PAGE = En::LIBELLE_PAGE

  elsif @_lang == "fr"

     MENU_PREMIER = Fr::MENU_PREMIER
     MENU_DEUXIEME = Fr::MENU_DEUXIEME
     MENU_TROISIEME = Fr::MENU_TROISIEME
     SELECT_LANGUE_FR = Fr::SELECT_LANGUE_FR
     SELECT_LANGUE_EN = Fr::SELECT_LANGUE_EN
     SELECT_LANGUE_SP = Fr::SELECT_LANGUE_SP
     MENU_PREMIER = Fr::MENU_PREMIER
     MENU_PREMIER = Fr::MENU_PREMIER
     MENU_PREMIER = Fr::MENU_PREMIER
     LIBELLE_PAGE = En::LIBELLE_PAGE
  end

```
## How to use it?

### > test.rb
```ruby

  #include the lang config file
  load 'lang/config_lang.rb' 

  #Build the page
  @result_page = '
    <!DOCTYPE html>
            ...
              <ul>
                <li > '+MENU_PREMIER+'</li>
                <li > '+MENU_DEUXIEME+' </li>
                <li > '+MENU_TROISIEME+' </li>

```

<img src="img/capture.png" >
