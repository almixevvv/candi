import edjsHTML from 'editorjs-html';

//PARSE THE JSON VALUE
let jsonValue = document.getElementById('_field').textContent;
let jsonParse = JSON.parse(jsonValue);

const edjParser = edjsHTML();
let custom = edjParser.parse(jsonParse.contents);

let holder = document.getElementById('_holder');

//Clear the previous entry
holder.innerHTML = '';

custom.forEach(printOutput);

function printOutput(item, index) {
	holder.innerHTML += item;
}
