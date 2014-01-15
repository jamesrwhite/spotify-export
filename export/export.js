var sp = getSpotifyApi(1);

exports.run = function() {

	var models = sp.require('sp://import/scripts/api/models');
	var library = models.library.tracks;
	var tracks = [],
		html = '';

	// Generate the string of HTML for the list of tracks
	html = library.reduce(function(previous, current, index, array) {

		return previous + '<li><a href="' + current.uri + '">' + current + '</a></li>';

	});

	// Convert the track data to a massive JSON string
	$('#json').text(JSON.stringify(library));

	// Append all the tracks to the <ul>
	$('#tracks').append(html);

	// Toggle off the loading indicator
	$('#loading, #content').toggle();

};
