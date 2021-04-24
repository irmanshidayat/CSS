<!DOCTYPE html>
<html>
<head>
	<title>Box Model</title>
	<style type="text/css">
		p{
			background-color: blue;
			width: 300px;
			height: 150px;
			color: white;
			border: 5px solid red;
			/*padding angka 30 menunjukkan bagian atas&bawah, amgka 20 menunjukkan bagian kiri&kanan*/
			padding: 30px 20px;
			overflow: scroll;
			margin: auto;
		}

		.kotak{
			background-color: pink;
			width: 300px;
			height: 300px;
			border-top: 2px dotted red;
			border-right: 5px dashed blue;
			border-bottom: 2px double green;
			border-left: 5px solid yellow;
			margin: 200px;
		}
	</style>
</head>
<body>

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

	<div class="kotak">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

</body>
</html>