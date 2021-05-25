//HEADER BUAT LOCALHOST
let getUrl = window.location;
window.baseUrl = getUrl.protocol + '//' + getUrl.host + '/' + getUrl.pathname.split('/')[1] + '/';

//Check for empty value in form
window.checkEmptyForm = function(form) {
	let formValue = $(form).find(':input').not('button');
	let emptyCounter = 0;

	//Check for empty value section
	formValue.each(function(index) {
		let curValue = $(this).val();
		let curOptions = $(this).find(':selected').val();

		if (curValue.length == 0 || curOptions == 'none') {
			emptyCounter++;

			let siblingCount = $(this).siblings('.alert').length;

			if (siblingCount == 0) {
				$(this).after(`
                 <div class="mt-2 mb-2 alert alert-danger" role="alert">
                 Cannot be empty!
                 </div>
             `);
			}
		} else if (curValue.length != 0 || curOptions != 'none') {
			$(this).next('.alert').remove();
		}
	});

	if (emptyCounter != 0) {
		return false;
	} else if (emptyCounter == 0) {
		return true;
	}
};
