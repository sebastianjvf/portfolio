(function() {
	
	window.addEventListener('load', function(event) {
		
		let circleDiv = document.getElementById('circle');
		let locationDiv = document.getElementById('location');
		let timeSpan = document.getElementById('time');
		
		let currentTime = '00:00:00';
		let hour = '';
		
		function updateTime() {
			currentTime = moment().tz('Europe/Stockholm').format('HH:mm:ss');
			hour = parseInt(moment().tz('Europe/Stockholm').format('H'));
			
			// Set the current time
			timeSpan.innerHTML = currentTime;
			
			if(10 < hour && hour < 15) {
				console.log('1');
				circleDiv.style.background = 'linear-gradient(to bottom right, #E0F3FE 50%, #EDFDF9 100%)';
			} else if(8 < hour && hour < 10 || 15 < hour && hour < 18) {
				console.log('2');
				circleDiv.style.background = 'linear-gradient(to bottom right, #fbd8bd 50%, #fdf7ed 100%)';
			} else {
				console.log('3');
				circleDiv.style.background = 'linear-gradient(to bottom right, #9CD8F8 50%, #fdf7ed 100%)';
			}
			
			setTimeout(updateTime, 1000);
		}
		
		updateTime();
		
		circleDiv.addEventListener('mouseover', function(event) {
			
			locationDiv.style.opacity = '1';
			
		});
		
		circleDiv.addEventListener('mouseout', function(event) {
			
			locationDiv.style.opacity = '0';
			
		});
		
	});
	
})();