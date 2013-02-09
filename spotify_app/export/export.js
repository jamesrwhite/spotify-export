var sp = getSpotifyApi(1);

exports.run = function() {

	var models = sp.require('sp://import/scripts/api/models');
	var playlists = sp.require("sp://export/playlists");
	var tracks = [];
	var html = "";

	playlists = playlists.get();

	for (var index in playlists) {

		var playlist = models.Playlist.fromURI(playlists[index], function(playlist) {

			var playlist_tracks = playlist.data.all();

			for (var index in playlist_tracks) {

				var track = models.Track.fromURI(playlist_tracks[index], function(track) {

					tracks.push(track);
					html += "<li><a href='" + track.data.uri + "'>" + track + "</a></li>";

				});

			}

		});

	}

	$("#json").text(JSON.stringify(tracks));
	$("#tracks").append(html);
	$("#loading, #content").toggle();

};