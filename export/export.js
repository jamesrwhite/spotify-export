var sp = getSpotifyApi(1);

exports.run = function() {

	var models = sp.require('sp://import/scripts/api/models');
	var library = models.library.tracks;
	var tracks = [],
	    track,
	    html = "";

	for (var index in library) {

		track = new models.Track(library[index].data);
		tracks.push(track);

		html += "<li><a href='" + track.uri + "'>" + track + "</a></li>";

	}

	$("#json").text(JSON.stringify(tracks));
	$("#tracks").append(html);
	$("#loading, #content").toggle();

};
