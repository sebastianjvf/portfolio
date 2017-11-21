(function() {
	
	window.addEventListener('load', smoothScroll);
	window.addEventListener(labelSmoothScroll, smoothScroll);

	function smoothScroll() {
		// Find all a tags which link to an anchor on the page
		let anchors = document.querySelectorAll('a[href*=\"#\"]');
		console.log(anchors);
		
		/*
			Adapted, from Pawel Grzybek (https://pawelgrzybek.com/)
		*/
		function scrollIt(destination, duration = 300, callback) {

			function easeOutQuad(time) {
				return time * (2 - time);
			}
			
		    const start = window.pageYOffset;
		    const startTime = 'now' in window.performance ? performance.now() : new Date().getTime();
		    
		    const documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
		    const windowHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
		    // Adapt scroll target position by the height of the header navigation
		    const destinationOffset = typeof destination === 'number' ? destination : (destination.offsetTop - document.getElementsByTagName('header')[0].offsetHeight);
		    const destinationOffsetToScroll = Math.round(documentHeight - destinationOffset < windowHeight ? documentHeight - windowHeight : destinationOffset);
		
		    if ('requestAnimationFrame' in window === false) {
		        window.scroll(0, destinationOffsetToScroll);
		        if (callback) {
		            callback();
		        }
		        return;
		    }
		
		    function scrollHelper() {
		        const now = 'now' in window.performance ? performance.now() : new Date().getTime();
		        const time = Math.min(1, ((now - startTime) / duration));
		        const timeFunction = easeOutQuad(time);
		        window.scroll(0, Math.ceil((timeFunction * (destinationOffsetToScroll - start)) + start));
		
		        if (window.pageYOffset === destinationOffsetToScroll) {
		            if (callback) {
		                callback();
		            }
		            return;
		        }
		
		        requestAnimationFrame(scrollHelper);
		    }
		
		    scrollHelper();
		}
		
		anchors.forEach(function(element) {
			// Find the event we need to scroll to
			let scrollTarget = document.getElementById(element.getAttribute('href').replace('#', ''));
			
			element.addEventListener('click', function(event) {
				event.preventDefault();
				scrollIt(scrollTarget);
			});
		});
		
	}
	
})();