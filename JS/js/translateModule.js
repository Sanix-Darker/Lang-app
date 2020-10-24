/**
 * [Lang_app]
 * Just the small js module
 * 
 * Author Sanix-darker
 */


/**
 * This method will just set a default lang
 * at the localStorage
 * then it will loop all over the webpage to replace each element
 * by it's correspondant in JS
 * 
 * @param {*} lang 
 */
const translateModule = (lang="en") => {
	langSet = lang;

	// if the langCOde provide is in our array
	if(langArray.includes(lang) || (localStorage.getItem("lang_app") === null && langArray.includes(lang))){
		// We save that in the browser as a defalt setting
		localStorage.setItem("lang_app", langSet);
	}else if (localStorage.getItem("lang_app") !== null){ 
		// if Not For the local storage
		langSet = localStorage.getItem("lang_app");
	}else{
		return;
	}
	
	document.getElementById('valueOflang').value = langSet;

	// We are gonna loop all over those node elements
	const nodesArray = [].slice.call(document.querySelectorAll("[translate]"));
	[].forEach.call(nodesArray, (element) => {
		element.innerHTML = langKeyValue[langArray.indexOf(langSet)][element.attributes.translate.nodeValue];
	});
}

translateModule(langSet);
