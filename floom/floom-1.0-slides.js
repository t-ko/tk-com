window.addEvent('domready', function(e) {	
			
			// option 1
			
			var slides = [
				{
					image: 'brightbox.png',
					caption: 'BrightBox Learning | Business Pitch'
				},
				{
					image: 'smart_kidney.png',
					caption: 'SMArt Kidney | Technology Presentation'
				},
				{
					image: 'tigercuts_web.jpg',
					caption: 'TigerCuts | Web Design'
				},
				{
					image: 'Untitled-40.jpg',
					caption: 'Kicks on a fielding'
				},
				{
					image: 'Untitled-42.jpg',
					caption: 'Untitled'
				},
				{
					image: 'Untitled-56.jpg',
					caption: 'Untitled'
				},
			];

			
			// option 2
			// var slides = $$('#blinds img');

			$('blinds').floom(slides, {
				slidesBase: 'slides/',
				sliceFxIn: {
					top: 20
				}
			});
			
		});