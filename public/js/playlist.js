$(document).ready(function() {
	(function(){
		var audioDiv = document.getElementById('audio-play');
		var arrSong = $('.media-body > .song-name > a');
		var maxIndex = arrSong.length - 1;
		var currentIndex = 0;
		arrSong.click(function(event) {
			event.preventDefault();
			loadSong(audioDiv, $(this));
		});

		$('#audio-play').on('ended',function() {
			nextSong(audioDiv);
		})

		var nextSong = function(audio) {
			currentIndex++;
			if(currentIndex > maxIndex) {
				currentIndex = 0;
			}

			console.log(currentIndex);

			var song = $(arrSong[currentIndex]);
			loadSong(audio,song);
		}

		var loadSong =  function(audio,song) {
			currentIndex =  song.data('index');
			var name = $('.player-info .song-name');
			var artist = $('.player-info .song-singer');
			var image = $('.box-img .bgi');
			var genre = $('.tag .list-inline li a');
			var view = $('.pm-statistic .list-inline li:first-child');
			var objSong = {};
			var arrAttr = ["id", "name", "link", "artist", "view", "genre", "image"];
			$.each(arrAttr, function(index) {
				objSong[arrAttr[index]] = song.data(arrAttr[index]);
			});

			console.log(objSong);

			name.html(objSong["name"]);
			artist.html(objSong["artist"]);
			image.attr('src', objSong["image"]);
			genre.html(objSong["genre"]);
			view.html(objSong["view"]);
			audio.firstElementChild.src = objSong['link'];
			audio.load();
			audio.play();
			audio.onerror = function(e) {
				console.log(e.code);
			}
		}
	})();
}
);
