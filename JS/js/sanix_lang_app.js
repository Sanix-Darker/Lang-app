/**
 * [Lang_app description]
 * Author Sanix darker
 */
var url_string = window.location.href; //window.location.href
var url = new URL(url_string);
var lang = url.searchParams.get("lang");

// If the lang parameter exist
if(lang && lang.length>0){

	// To prevent false parameters that's not defined
	if(array_lang.includes(lang)){
		value_of_lang_you_want = lang;

		// On sauve dans le navigateur
		localStorage.setItem("Sanix_lang_app", value_of_lang_you_want);

		document.getElementById('valueOflang').value = value_of_lang_you_want;
	}
	
}else{ // if Not
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