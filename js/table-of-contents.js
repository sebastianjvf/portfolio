(function() {
	// Save function value in variable to properly remove the event listener later
	let updateTableOfContents;
	
	// Cross browser getStyle function for a property
	function getStyle(element, property) {
	    if (element.currentStyle) {
	    	return el.currentStyle[property];
	    }
	    
	    if(window.getComputedStyle(element, null)[property]) {
	    	return window.getComputedStyle(element, null)[property];	
	    }
	    
	    return '';
	}
	
	function buildTableOfContents() {
		
		// Find all headings
		let headings = Array.from(document.getElementsByClassName('section-header'));
		
		// Fill elements with their offset before position sticky
		headings = headings.map(function (element) {
				return {dom: element, from: element.offsetTop, to: element.offsetTop + element.offsetHeight};
		});
		
		// Add an id to every heading
		headings.forEach(function (element) {
			element.dom.id = element.dom.innerText.toLowerCase().replace(' ', '-').replace('\n', '');
			element.id = element.dom.id;
		});
		
		// Create a nav tag and add it to the dom
		let nav = document.createElement('nav');
		document.body.appendChild(nav);
		
		// Copy their styles and content and create an a tag for them
		// Change their position to fixed
		// Stack them on top of each other
		let tableOfContents = headings.map(function(element, i) {
			let newElement = document.createElement('a');
			let innerDiv = document.createElement('div');
			innerDiv.classList.add('inner');
			innerDiv.innerText = element.dom.innerText;
			newElement.appendChild(innerDiv);
			
			// Read out the background colour and colour after stylesheets are parsed
			newElement.style.backgroundColor = getStyle(element.dom, 'backgroundColor');
			newElement.style.color = getStyle(element.dom, 'color');
			
			// Add a z-index to each element, last elements have a higher one.
			// Add 20 to allow for enough space for z-index values in the content
			newElement.style.zIndex = (20 + i) + "";
			
			// Add page link to the ids set earlier
			newElement.setAttribute('href', "#" + element.id);
			newElement.classList.add('toc-item');
			
			return newElement;
		});
		
		// Add the elements to the DOM and updated the computed height including inner elements
		tableOfContents.forEach(function(element, i) {
			nav.appendChild(element);
			
			// Update height
			element.style.bottom = (headings.length - i-1) * element.offsetHeight+ "px";
		});
		
		// If one has surpassed their corresponding heading, make it disappear
		// offsetTop will be fixed for the element so calculate the static headings relative to the viewport and compare those
		updateTableOfContents = function (event) {	
			tableOfContents.forEach(function(element, i) {
		
				// console.log(element.offsetTop + " >= " + (headings[i].from - window.pageYOffset));
					
				// Set visibility to hidden and not to display block = leads to calculation toggle issues
				if (element.offsetTop >= (headings[i].from - window.pageYOffset)) {
					element.classList.add('hidden');
				} else {
					element.classList.remove('hidden');
				}
						
			});
		}
		
		// Call the function once on load
		updateTableOfContents();
		
		// Update the values of headings and table of contents
		window.addEventListener('scroll', updateTableOfContents);
	}
	
	function reloadTableOfContents() {
		// Remove the old event listener on scroll
		window.removeEventListener('scroll', updateTableOfContents);
		
		// Remove the old nav
		let nav = document.getElementsByTagName('nav')[0];
		document.body.removeChild(nav);
		
		// Build it again
		buildTableOfContents();
	}
	
	// LOAD ON LOAD
	window.addEventListener('load', buildTableOfContents);

	// RECALCULATE ON RESIZE
	// Update the values when resizing is done
	let resizeTimer;
	
	window.addEventListener('resize', function() {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function() {
	    	// console.log('resized');
	    	
	    	reloadTableOfContents();
	            
		}, 200);
	});
	
})();