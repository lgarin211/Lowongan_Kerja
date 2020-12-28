// TEXT 
$('input[type="file"]' ).on('change' , function () {
	let filenames = [];
		let files = document.getElementById('upload_foto').files;

		for (let i in files) {
			if (files.hasOwnProperty(i)) {
				filenames.push(files[i].name);
			}
		}

		$(this).next('.custom-file-label' ).addClass( "selected" ).
		html(filenames.join(',   '));

});