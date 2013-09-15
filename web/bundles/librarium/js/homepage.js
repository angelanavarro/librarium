(function() {
	var aboutMeQuotes = new Array(
		"I am a life loving pseudo nerd", 
        "I love nature and like turtles",
        "I am a girl with a black dog",
        "I ride bikes and I take pictures",
		"I like cookies but not cream",
		"I like books and sometimes movies",
		"I love jumping in the lake",
		"I like cooking but not cleaning",
		"I come from the mountains and live by the ocean",
		"I am a ramblin' wreck from Georgia Tech");
	
	var initQuote = function(quotes) {
		newQuote = quotes[Math.floor(Math.random() * quotes.length)];
		$('#aboutme_quote').text(newQuote);
	};
	
	var quoteAnimation = function(quotes) {
		newQuote = quotes[Math.floor(Math.random() * quotes.length)];
		var $aboutMeQuote = $('#aboutme_quote');
		$aboutMeQuote.fadeToggle(1500, function() {
			currentQuote = $(this).text(); 
			while(currentQuote == newQuote) {
				newQuote = quotes[Math.floor(Math.random() * quotes.length)];
			}
			$(this).text(newQuote).fadeToggle(1500);
		});
	};
	
	initQuote(aboutMeQuotes);
	setInterval(function(){quoteAnimation(aboutMeQuotes)}, 7000);
}());

