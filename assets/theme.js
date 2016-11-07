
/**
 * Dropdown component.
 */
window.addEventListener('load', function () {

	function toggle(event) {
		var classList = event.target.parentNode.classList;

		if (classList.contains('active')) {
			classList.remove('active');
		} else {
			classList.add('active');
		}
	}

	// Bind event listeners
	var forEach = Array.prototype.forEach,
		dropdowns = document.querySelectorAll('*[data-component="dropdown"]');

	forEach.call(dropdowns, function (dropdown) {
		console.log(dropdown);
		dropdown.children[0].addEventListener('click', toggle);
	});


	console.log('hei');
});
