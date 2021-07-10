$formElement = $('#kt_sign_in_form');

$formElement.submit(function(e) {
	e.preventDefault();

	let formCheck = checkEmptyForm($formElement);
	let formValue = $formElement.serialize();

	if (formCheck) {
		$.post(baseUrl + 'login', formValue, function(resp) {
			console.log(resp);

			if (resp.code == 401) {
				Swal.fire({
					text: 'Incorrect password/username please try again',
					icon: 'warning',
					buttonsStyling: !1,
					confirmButtonText: 'Close',
					customClass: { confirmButton: 'btn btn-primary' }
				}).then(function(t) {
					if (t.isConfirmed) {
						$('input[name="username"').val('');
						$('input[name="password"').val('');
						location.reload();
					}
				});
			} else if (resp.code == 200) {
				Swal.fire({
					text: 'You have successfully logged in!',
					icon: 'success',
					buttonsStyling: !1,
					confirmButtonText: 'Continue',
					customClass: { confirmButton: 'btn btn-primary' }
				}).then(function(t) {
					if (t.isConfirmed) {
						$('input[name="username"').val('');
						$('input[name="password"').val('');
						window.location.replace(baseUrl + '');
					}
				});
			} else {
				Swal.fire({
					text: 'Network error, please try again later',
					icon: 'error',
					buttonsStyling: !1,
					confirmButtonText: 'Close',
					customClass: { confirmButton: 'btn btn-primary' }
				}).then(function(t) {
					if (t.isConfirmed) {
						$('input[name="username"').val('');
						$('input[name="password"').val('');
						location.reload();
					}
				});
			}
		});
	}
});
