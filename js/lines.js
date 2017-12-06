(function() {
	
	window.addEventListener('load', function(event) {
		
		let backgroundSection = document.getElementById('introduction');
		
		backgroundSection.addEventListener('mousemove', function(event) {
			
			// Mouse coordinates
			let mouseX = event.clientX;
			let mouseY	= event.clientY;
			
			// Selet all imgs in lines
			let waves = document.querySelectorAll('div#lines img');
			
			waves.forEach(function (element) {
				
				let imgX = element.offsetLeft + element.offsetWidth/2;
				let imgY = element.offsetTop + element.offsetHeight/2;
				
				let diffX = mouseX - imgX;
				let diffY = mouseY - imgY;
				
				let radians = Math.atan2(diffY, diffX);
				let angle = radians * 180 / Math.PI;
				
				element.style.transform = 'rotate(' + angle + 'deg)';
				
			});
		});


	});
	
})();