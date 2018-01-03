(function() {
	
	window.addEventListener('load', function(event) {
		
		let lines = document.getElementById('waves');
		
		window.addEventListener('scroll', function(event) {
			
			let scrollPos = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;
			
			lines.style.top = scrollPos * - 0.2 + 'px';
			
		});

	});
	
})();