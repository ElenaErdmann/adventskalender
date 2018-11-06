// A javascript-enhanced crossword puzzle [c] Jesse Weisbeck, MIT/GPL 
(function($) {
	$(function() {
		// provide crossword entries in an array of objects like the following example
		// Position refers to the numerical order of an entry. Each position can have 
		// two entries: an across entry and a down entry
		var puzzleData = [
				{
					clue: "3. RStudio is an ___ for the programming language R",
					answer: "ide",
					position: 1,
					orientation: "across",
					startx: 9,
					starty: 3
				},
				{
					clue: "4. File format for tabular data in which cells are separated by commas",
					answer: "csv",
					position: 4,
					orientation: "across",
					startx: 3,
					starty: 4
				},
				{
					clue: "6. Websites that change their layout depending on the screen size",
					answer: "responsive",
					position: 6,
					orientation: "across",
					startx: 5,
					starty: 6
				},
				{
					clue: "7. Sequence of actions used to solve problems",
					answer: "algorithm",
					position: 7,
					orientation: "across",
					startx: 5,
					starty: 8
				},
				{
					clue: "8. Measure of statistical certainty that is used in hypothesis testing",
					answer: "significance",
					position: 8,
					orientation: "across",
					startx: 1,
					starty: 10
				},
				{
					clue: "11. Converting address data into coordinates",
					answer: "geocoding",
					position: 11,
					orientation: "across",
					startx: 6,
					starty: 12
				},
				{
					clue: "13. GitHub but different",
					answer: "bitbucket",
					position: 13,
					orientation: "across",
					startx: 1,
					starty: 17
				},
				{
					clue: "14. Language used to build the basic structure of a website.",
					answer: "html",
					position: 14,
					orientation: "across",
					startx: 8,
					starty: 19
				},
				{
					clue: "1. The value exactly in the middle of a sorted row of values",
					answer: "median",
					position: 1,
					orientation: "down",
					startx: 10,
					starty: 1
				},
				{
					clue: "2. Automatically extracting data from the internet",
					answer: "scraping",
					position: 2,
					orientation: "down",
					startx: 3,
					starty: 3
				},
				{
					clue: "5. The most commonly known mean",
					answer: "arithmetic",
					position: 5,
					orientation: "down",
					startx: 12,
					starty: 4
				},
				{
					clue: "7. Way of communication between a program and a third-party service",
					answer: "api",
					position: 7,
					orientation: "down",
					startx: 5,
					starty: 8
				},
				{
					clue: "9. Name of a common statistical distribution",
					answer: "normal",
					position: 9,
					orientation: "down",
					startx: 4,
					starty: 10
				},
				{
					clue: "10. A map with areas colored depending on a data variable",
					answer: "choropleth",
					position: 10,
					orientation: "down",
					startx: 8,
					starty: 10
				},
				{
					clue: "12. Type of search that matches patterns approximately rather than exactly",
					answer: "fuzzy",
					position: 12,
					orientation: "down",
					startx: 5,
					starty: 16
				}
			];
	
		$('#puzzle-wrapper').crossword(puzzleData);
		
	});
	
})(jQuery);
