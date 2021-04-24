<!DOCTYPE html>
<html>
<head>
	<title>Latihan Layout Website</title>
	<style type="text/css">
	body{
		text-align: center;
	}	
	.header{
		width: 100%;
		height: 20%;
		background-color: red;
		margin: auto;
		padding: 5px;
		border: 2px solid white;
		margin-bottom: 10px;
	}
	.header p{
		text-align: center;
	}

	.navigation_bar{
		width: 100%;
		height: 30px;
		background-color: red;
		margin: auto;
		/*padding: 10px;*/
		border: 2px solid white;
		margin-bottom: 10px;
	}
	.navigation_bar{
		text-align: center;
		
	}

	.konten{
		display: flex;
	}

	.content_left{
		width: 25%;
		height: 300px;
		background-color: red;
		margin-right: 10px;
	}
	.content_left p{
		text-align: center;
		padding-top: 4px;
	}

	.main_content{
		width: 50%;
		height: 300px;
		background-color: red;
		margin-right: 10px;
	}
	.main_content p{
		text-align: center;
		padding-top: 4px;
	}

	.content_right{
		width: 25%;
		height: 300px;
		background-color: red;
		margin-left: : 10px;
		margin-bottom: 10px;
	}
	.content_right p{
		text-align: center;
		padding-top: 4px;
	}

	.footer{
		width: 100	%;
		height: 20px;
		background-color: red;
		margin: auto;
		padding: 20px;
		border: 2px solid white;
	}
	.footer p{
		text-align: center;
		padding-top: 4px;
	}
	</style>
</head>
<body>

	<div class="header"><p>HEADER</p></div>

	<div class="navigation_bar"><p>NAVIGATION BAR</p></div>

	<div class="konten">
		<div class="content_left"><p>CONTENT</p></div>
		<div class="main_content"><p>MAIN CONTENT</p></div>
		<div class="content_right"><p>CONTENT</p></div>
	</div>

	<div class="footer"><p>FOOTER</p></div>

</body>
</html>