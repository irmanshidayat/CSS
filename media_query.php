<!DOCTYPE html>
<html>
<head>
	<title>Media Query</title>
	<style type="text/css">
		body{
			max-width: 800px;
		}

		.button-group{
			display: flex;
		}

		button{
			font-size: 25px;
			width: 100%;
		}

		/*penerapan media query*/
		@media (max-width: 600px) {
			.button-group{
				display: flex;
				flex-direction: column;
		}
	}
	</style>
</head>
<body>

	<h1>Hello I'm Irman</h1>
	<img src="../HTML/aset/flower.jpg" width="100%">

	<div class="button-group">
		<button>Talk to Us</button>
		<button>Download Syllabus</button>
		<button>Be a Partner</button>
		<button>Join Class</button>
	</div>

</body>
</html>