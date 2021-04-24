<!DOCTYPE html>
<html>
<head>
	<title>Latihan Layout Website</title>
	<style type="text/css">
	
	.header{
		background-color: red;
		width: 100%;
		height: 50px;
		display: block;
		box-sizing: border-box;
		padding: 1px;
	}
	.header p{
		text-align: center;
		height: 20px;
	}


	.navigation_bar{
		background-color: red;
		width: 100%;
		height: 25px;
		margin-bottom: 10px;
	}
	.navigation_bar p{
		text-align: center;
		padding-top: 4px;
	}

	.main_content{
		float: left;
		background-color: red;
		height: 300px;
		width: 100%;	
	}
	.main_content p{
		text-align: center;
		padding-top: 100px;	
	}

	.footer{
		background-color: red;
		width: 100%;
		height: 50px;
		margin-top: 17%;
	}
	.footer p{
		text-align: center;
		padding-top: 15px;
	}

	</style>
</head>
<body>

	<div class="header"><p>HEADER</p></div>

	<div class="navigation_bar"><p>NAVIGATION BAR</p></div>

	<div class="main_content"><p>MAIN CONTENT</p></div>

	<div class="footer"><p>FOOTER</p></div>

</body>
</html>