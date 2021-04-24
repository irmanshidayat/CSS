<!DOCTYPE html>
<html>
<head>
	<title>Position Pada CSS</title>
	<style type="text/css">
		
		.satu{
			background-color: purple;
			width: 300px;
			height: 300px;
			position: static;
			top: 100px;
			left: 100px;
		}

		.dua{
			background-color: green;
			width: 300px;
			height: 300px;
			top: 100px;
			left: 100px;
			position: relative;	
		}

		.tiga{
			background-color: blue;
			width: 300px;
			height: 300px;
			position: absolute;
			top: 200px;
			left: 200px;	
		}

		.empat{
			background-color: pink;
			width: 300px;
			height: 300px;
			left: 200px;
			top: 200px;	
			/*posisi untuk menetap*/
			position: fixed;
		}
	</style>
</head>
<!-- body itu sebagai parent -->
<body>

	<div class="satu"></div>

	<div class="dua"></div>

	<div class="tiga"></div>

	<div class="empat"></div>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>