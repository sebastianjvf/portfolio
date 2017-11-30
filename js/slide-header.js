(function() {
	
	window.addEventListener('load', toggleHeader);
	window.addEventListener('scroll', toggleHeader);
	
	function toggleHeader() {
		
		var header = document.getElementsByTagName('header')[0];
		header.addEventListener('click', function() {
			scrollIt(0);
		});
		
		if (window.pageYOffset > header.offsetHeight) {
			header.style.top = '0';
		} else {
			header.style.top = '-50%';
		}
	}
	
})();