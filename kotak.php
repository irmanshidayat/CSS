<!DOCTYPE html>
<html>
<head>
	<title>Box Sizing: Border Box</title>
	<style type="text/css">
		.satu{
			width: 300px;
			height: 200px;
			background-color: pink;
			margin: auto;
		} 

		.dua{
			width: 300px;
			height: 200px;
			background-color: pink;
			margin: auto;width: 300px;
			height: 200px;
			background-color: green;
			margin: auto;
			padding: 30px;
			border: 2px solid red;
		}

		.tiga{
			width: 300px;
			height: 200px;
			background-color: pink;
			margin: auto;
			width: 300px;
			height: 200px;
			background-color: green;
			margin: auto;
			padding: 30px;
			border: 2px solid red;
			/*box sizing digunakan agar tidak merubah ukuran yang disebabkan oleh padding*/
			box-sizing: border-box;
			/*overflow digunakan agar tulisan dapat di scroll*/
			overflow: scroll;	
		}

		a{
			width: 200px;
			height: 100px;
			background-color: lightgreen;
			display: block;
		}
	</style>
</head>
<body>

	<div class="satu">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div> <br><br>

	<div class="dua">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div> <br><br>

	<div class="tiga">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

	<a href="">Link Satu</a>

</body>
</html>