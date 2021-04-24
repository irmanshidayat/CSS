<!DOCTYPE html>
<html>
<head>
	<title>Float Pada CSS</title>
	<style type="text/css">
		
	.satu{
		background-color: pink;
		width: 50%;
		height: 100px;
		float: left;
	}

	.dua{
		background-color: lightblue;
		width: 50%;
		height: 100px;
		float: right;
	}

	.tiga{
		background-color: lightgreen;
		width: 100%;
		height: 100px;
		/*clear juga bisa digunakan lsg pada file tanpa perlu membuat div.class baru*/
		/*clear: both;*/
	}
	/*clear digunakan agar float tidak menyebabkan berantakan pada bagian lainnya*/
	.clear{
		clear: both;
	}

	</style>
</head>
<body>

	<div class="satu">Float Left</div>
	<div class="dua">Float Right</div>
	<div class="clear"></div>
	<div class="tiga">Bukan Float</div>
</body>
</html>