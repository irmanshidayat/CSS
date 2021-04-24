<!DOCTYPE html>
<html>
<head>
	<title>Pseudo Class</title>
	<style type="text/css">
		ul li a{
			text-decoration: none;
		}
		ul li a:link{
			color: green;
		}

		ul li a:hover{
			font-size: 24px;
			color: yellow;
		}
		ul li a:active{
			color: blue;
		}
		ul li a:visited{
			color: red;
		}
	</style>
</head>
<body>

	<ul>
		<li><a href="#">Link Satu</a></li>
		<li><a href="#">Link Dua</a></li>
		<li><a href="#">Link Tiga</a></li>
		<li><a href="#">Link Empat</a></li>
		<li><a href="#">Link Lima</a></li>
	</ul>

</body>
</html>