<?php
	
	// get team from twitch API
	$team = file_get_contents("http://api.twitch.tv/api/team/familia/live_channels.json");

	//decode json file in to array
	$streams = json_decode($team, true);

	//create easier to use array
	$streams = $streams["channels"];

	//used to store html
	$final = "";

	// hold amount of streams displayed and max shown
	$count = 0;
	$max_iter = 3;

	// loop through streams array
	foreach ($streams as $stream) {
		
		// if streams added is less than max
		if ($count < $max_iter) {

				// make array easier to use
				$stream = $stream["channel"];

				// start stream block
				$final .= "<div class='col-md-4 col-centered streamer'>
					<a href='http://www.twitch.tv/" . $stream["name"] . "'>
						<div class='thumbDesc'><p class='nameGame'><span style='font-weight:bold'>" . $stream["display_name"] . "</span></p>";
	
				// if stream is offline
				if ($stream["status"] == "offline") {
					// display: is offline
					$final .= "<p class='title'>is <span style='font-style:oblique'>offline</span></p>";
				} else {
					// display: playing {game}
					$final .= "<p class='title'>playing <span style='font-style:oblique'>" . $stream["meta_game"] . "</span></p>";
				}
				
				// finish stream block
				$final .= "</div>
						<div class='stream-preview'><img class='img-responsive' src='http://static-cdn.jtvnw.net/previews/live_user_" . $stream["name"] . "-592x333.jpg' alt='Stream Preview'></div>
						<img class='img-circle stream-profile' src='" . $stream["image"]["size70"] . "'>
					</a>
				</div>";

				// add stream to main array and increment count
				$count++;

		} else {
			break;
		}

	}

	// display streams
	echo $final;
?>