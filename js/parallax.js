(function() {
	
	window.addEventListener('load', function(event) {
		
		let lines = document.getElementById('lines');
		
		window.addEventListener('scroll', function(event) {
			
			let scrollPos = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;
			
			console.log('Scroll!');
			lines.style.top = scrollPos * - 0.2 + 'px';
			
		});

	});
	
})();