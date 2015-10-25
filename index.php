<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<title>Twitch Familia</title>
		<style>

			/* STREAMS */

			#streamWrapper {
				margin-top: 15px;
				margin-bottom: 10px;
			}

			/* centered columns styles */
			.row-centered {
			    text-align:center;
			}

			.col-centered {
			    display:inline-block;
			    float:none;
			    /* reset the text-align */
			    text-align:left;
			    /* inline-block space fix */
			    margin-right:-4px;
			}

			#streamsLoading {
				height: 75px;
				margin-top: 30px;
			}

			.streamer {
				margin-top: 15px;
				max-width: 100%;
			}

			.stream-profile {
				position: absolute;
				left: 0;
				top: 5px;
				height: 80px;
				box-shadow: 0 3px 2px #142328;
			}

			.thumbDesc {
				margin-top: 5px;
				padding-left: 5px;
				margin-left: 70px;
				color: #303030;
			}

			.thumbDesc p {
				text-decoration: none;
			}

			.title, .nameGame {
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				margin: 0;
				padding: 0;
				
			}

			.stream-preview {
				margin-left: 25px;
			}

			/* END STREAMS */
		
		</style>
	</head>
	<body>

		<div class="wrapper">

			<?php include "template/header.php"; //display header ?>

			<div class="row-centered" id="streamWrapper">

				<img id="streamsLoading" src="img/loading.gif">

			</div>

		</div>

	</body>

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script type="text/javascript">

		// load streamers
		$("#streamWrapper").load("template/getStreamers.php");

	</script>
</html>
