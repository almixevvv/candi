import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import List from '@editorjs/list';
import Embed from '@editorjs/embed';
import Checklist from '@editorjs/checklist';
import SimpleImage from '@editorjs/simple-image';
import Quote from '@editorjs/quote';
import Marker from '@editorjs/marker';
import Delimiter from '@editorjs/delimiter';

//HEADER BUAT LOCALHOST
let getUrl = window.location;
window.baseUrl = getUrl.protocol + '//' + getUrl.host + '/' + getUrl.pathname.split('/')[1];

let jsonValue = $('#_field').text();
let jsonParse;

if ($('#_field').text().trim().length == 0) {
	jsonParse = '';
} else {
	// console.log('kosong');
	jsonParse = JSON.parse(jsonValue);
}

const editor = new EditorJS({
	holder: 'whoareweEditor',
	tools: {
		header: {
			class: Header,
			shortcut: 'CMD+SHIFT+H',
			inlineToolbar: true,
			config: {
				placeholder: 'Enter a header',
				levels: [ 2, 3, 4 ],
				defaultLevel: 3
			}
		},
		image: SimpleImage,
		delimiter: Delimiter,
		quote: {
			class: Quote,
			inlineToolbar: true,
			shortcut: 'CMD+SHIFT+O',
			config: {
				quotePlaceholder: 'Enter a quote',
				captionPlaceholder: "Quote's author"
			}
		},
		marker: {
			class: Marker,
			shortcut: 'CMD+SHIFT+M'
		},
		checklist: {
			class: Checklist,
			shortcut: 'CMD+SHIFT+K',
			inlineToolbar: true
		},
		list: {
			class: List,
			shortcut: 'CMD+SHIFT+L',
			inlineToolbar: true
		},
		embed: {
			class: Embed,
			shortcut: 'CMD+SHIFT+E`',
			inlineToolbar: true
		}
	},
	placeholder: 'Let`s write an awesome story!',
	data: jsonParse.contents
});

$('#btnSave').on('click', function() {
	editor
		.save()
		.then((outputData) => {
			console.log(outputData);

			$.post(
				baseUrl + '/whoarewe',
				{
					_token: $('#token').val(),
					contents: outputData
				},
				function(resp) {
					Swal.fire({
						text: 'Page Saved',
						icon: 'success',
						confirmButtonText: 'Close',
						customClass: { confirmButton: 'btn btn-primary' }
					}).then(function(t) {
						location.reload();
					});
					// console.log(resp);
				}
			);
		})
		.catch((error) => {
			console.log('Error!: ' + error);
		});
});
