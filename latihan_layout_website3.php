<!DOCTYPE html>
<html>
<head>
	<title>Latihan Layout Website</title>
	<style type="text/css">
	
	.satu{
		background-color: red;
		width: 100%;
		height: 50px;
		display: block;
		box-sizing: border-box;
		padding: 1px;
	}
	.satu p{
		text-align: center;
		height: 20px;
	}

	.dua{
		background-color: red;
		width: 100%;
		height: 25px;
		margin-bottom: 10px;
	}
	.dua p{
		text-align: center;
		padding-top: 4px;
	}
	.konten{
		display: flex;
	}


	.tiga{
		background-color: red;
		width: 75%;
		height: 300px;
		margin-right: 10px; 
		
	}
	.tiga p{
		text-align: center;
		margin-top: 9%;
	}
	.empat{
		background-color: red;
		width: 25%;
		height: 300px;		
	}
	.empat p{
		text-align: center;
		margin-top: 25%;
	}

	.lima{
		background-color: red;
		width: 100%;
		height: 50px;
	}
	.lima p{
		text-align: center;
		padding-top: 15px;
	}
	</style>
</head>
<body>

	<div class="satu"><p>HEADER</p></div>

	<div class="dua"><p>NAVIGATION BAR</p></div>

	<div class="konten">
		<div class="tiga"><p>MAIN CONTENT</p></div>
		<div class="empat"><p>CONTENT</p></div>
		
	</div>

	<div class="lima"><p>FOOTER</p></div>

</body>
</html>