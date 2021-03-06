<!DOCTYPE html>
<html>
<head>
	<title>Latihan Website</title>
	<link rel="stylesheet" type="text/css" href="latihan_website.css">

</head>
<body>
	<!-- header -->
	<div class="box">
		<div class="content">
			<p>Irman Syarif Hidayat</p>
		</div> 
	</div>
	<!-- Menu Navigasi -->
	<div class="menu">
		<ul type="none">
			<li>
				<a href="#home" style="text-decoration: none;">Home</a>
			</li>
			<li>
				<a href="https://en.wikipedia.org/wiki/B._J._Habibie" target="blank_" style="text-decoration: none;">About</a>
			</li>
			<li>
				<a href="http://localhost/Irman/CSS/form_kontak.php" style="text-decoration: none;" target="_blank">Contact</a>
			</li>
			<li>
				<div class="dropdown">
					  <span>Produk</span>
					  	<div class="dropdown-content">
					    	<ul type="circle"> 
								<li><a href="https://food.detik.com/info-kuliner/d-4914019/macam-macam-kopi-yang-harus-kamu-tahu-agar-tak-salah-pesan" target="_blank">Kopi</a></li>
								<li><a href="https://cimory.com/2016/10/14/susu-segar-ya-susu-cimory-fresh-milk-beraneka-rasa-murni/" target="_blank">Susu</a></li>
								<li><a href="https://lifestyle.kompas.com/read/2020/07/01/105344520/bisa-bantu-diet-kapan-waktu-terbaik-minum-teh-hijau?page=all" target="_blank">Teh</a></li>
								<li><a href="https://tabloidsinartani.com/detail/indeks/agri-profil/8421-Tanam-Jahe-Off-Season-Asep-Raih-Omzet-Rp-40-Juta" target="_blank">Jahe</a></li>
					  		</ul>
					  	</div>
  				</div>
			</li>
			<li><form>
  				<input class="search" type="text" placeholder="Cari..." required>	
 				<input class="button" type="button" value="Cari">		
				</form>
			</li>
		</ul>
	</div>


<!-- konten -->
	<div class="content1">
			<div class="imageflower">
				<h3>Sun Flower</h3>
				<img src="../html/aset/flower.jpg">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut 	enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					</p> 
					<div class="berita2">
						<h3>Camera</h3>
						<img src="../html/aset/konica.jpg">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut 	enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</p>
					</div> 
					<div class="imageleaves">
						<h3>Kaktus</h3>
						<img src="../HTML/aset/kaktus.jpg">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut 	enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</p>
					</div>	

					<div>
						
					</div>
			</div>


			<!-- profil dan medsos -->
			<div class="imageirman">
				<div class="fotoirman">
					<img src="../HTML/aset/irman.jfif"> 
					<p>Irman Syarif Hidayat</p>
				</div>


				<div class="medsos">
					<a href="https://twitter.com/login?lang=en" target="_blank">
					<img src="../HTML/aset/tw.png">
					</a>

					<a href="https://www.instagram.com/" target="_blank">
					<img src="../HTML/aset/ig.png">
					</a>

					<a href="https://www.linkedin.com/" target="_blank">
					<img src="../HTML/aset/icon/linkedin.png">
				</a>
				</div> <br><br>

				<!-- jam dinding -->
				<div class="jam">
					<canvas id="mycanvas" width="400" height="400"
						style="background-color:##f1f1f1">
						</canvas>
						<script>
						var canvas = document.getElementById("mycanvas");
						var ctx = canvas.getContext("2d");
						var radius = canvas.height / 2;
						ctx.translate(radius, radius);
						radius = radius * 0.90
						setInterval(gambarjam, 1000);
						function gambarjam() {
						  drawFace(ctx, radius);
						  angkajam(ctx, radius);
						  drawTime(ctx, radius);
						}
						function drawFace(ctx, radius) {
						  var grad;
						  ctx.beginPath();
						  ctx.arc(0, 0, radius, 0, 2*Math.PI);
						  ctx.fillStyle = 'white';
						  ctx.fill();
						  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
						  grad.addColorStop(0, '#00ff');
						  grad.addColorStop(0.5, 'white');
						  grad.addColorStop(1, '#00ff');
						  ctx.strokeStyle = grad;
						  ctx.lineWidth = radius*0.1;
						  ctx.stroke();
						  ctx.beginPath();
						  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
						  ctx.fillStyle = '#00ff';
						  ctx.fill();
						}
						function angkajam(ctx, radius) {
						  var ang;
						  var num;
						  ctx.font = radius*0.15 + "px arial";
						  ctx.textBaseline="middle";
						  ctx.textAlign="center";
						  for(num = 1; num < 13; num++){
						    ang = num * Math.PI / 6;
						    ctx.rotate(ang);
						    ctx.translate(0, -radius*0.85);
						    ctx.rotate(-ang);
						    ctx.fillText(num.toString(), 0, 0);
						    ctx.rotate(ang);
						    ctx.translate(0, radius*0.85);
						    ctx.rotate(-ang);
						  }
						}
						function drawTime(ctx, radius){
						    var now = new Date();
						    var hour = now.getHours();
						    var minute = now.getMinutes();
						    var second = now.getSeconds();
						    //hour
						    hour=hour%12;
						    hour=(hour*Math.PI/6)+
						    (minute*Math.PI/(6*60))+
						    (second*Math.PI/(360*60));
						    jarumjam(ctx, hour, radius*0.5, radius*0.07);
						    //minute
						    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
						    jarumjam(ctx, minute, radius*0.8, radius*0.07);
						    // second
						    second=(second*Math.PI/30);
						    jarumjam(ctx, second, radius*0.9, radius*0.02);
						}
						function jarumjam(ctx, pos, length, width) {
						    ctx.beginPath();
						    ctx.lineWidth = width;
						    ctx.lineCap = "round";
						    ctx.moveTo(0,0);
						    ctx.rotate(pos);
						    ctx.lineTo(0, -length);
						    ctx.stroke();
						    ctx.rotate(-pos);
						}
						</script>
				</div>

				<!-- video -->
		<video src="../HTML/aset/masako.mp4" controls="autoplay"></video>

				
			</div>							
		</div>

		<!-- testing -->
		<div class="block-grid">
			<div class="block-grid1" style="--text:left; --align:flex-start; --justify:center; --position:2/3/3/6; --m-element-margin:0 0 16px 0; --element-z-index:3;">
				<div class="text-box"> <p class="body"><strong><span style="color: var(--colors-light)">OUR ADDRESS</span></strong></p>
				</div>
			</div>

			<div class="block-grid-item use-m-margin grid__item" style="--text:left; --align:flex-start; --justify:flex-start; --position:3/3/5/6; --m-element-margin:0 0 32px 0; --element-z-index:4;">
				<div class="text-box"> <p class="body"><span style="color: var(--colors-light)">Cevest, Bekasi</span></p>
				</div>
			</div>

			<div class="block-grid-item use-m-margin grid__item" style="--text:left; --align:flex-start; --justify:center; --position:2/7/3/10; --m-element-margin:0 0 16px 0; --element-z-index:5;">
				<div class="text-box"><p class="body"><strong><span style="color: var(--colors-light)">CONTACT US</span></strong></p>
				</div>
			</div>

			<div class="block-grid-item use-m-margin grid__item" style="--text:left; --align:flex-start; --justify:flex-start; --position:3/7/5/10; --m-element-margin:0 0 32px 0; --element-z-index:6;">
				<div class="text-box" id="oi-mcy-b4"><p class="body"><span style="color: var(--colors-light)"><a href="mailto:info@wells.com" target="_blank">irmansyarifhidayat@gmail.com</a><br><a href="tel:(917)365-8863" target="_blank">(021) 365-8863</a></span></p>
				</div>
			</div>

			<div class="block-grid-item use-m-margin grid__item" style="--text:left; --align:flex-start; --justify:center; --position:2/11/3/14; --m-element-margin:0 0 16px 0; --element-z-index:7;">
				<div class="text-box"><p class="body"><strong><span style="color: var(--colors-light)">WORKING HOURS</span></strong></p>
				</div>
			</div>

			<div class="block-grid-item use-m-margin grid__item" style="--text:left; --align:flex-start; --justify:flex-start; --position:3/11/5/14; --m-element-margin:0 0 16px 0; --element-z-index:8;">
				<div class="text-box" id="8X-w6spqn"><p class="body"><span style="color: var(--colors-light)">Mon - Fri: 9:00 - 18:00<br>Sat: 10:00 - 16:00<br>Sun: Closed</span></p>
				</div>
			</div>
		</div>


		<!-- footer -->
		<footer>
  			<p align="center">Copyright @ 2021</p>
 		 	<p align="center">Creator Of Web Developer BBPLK Cevest Bekasi</p>
		</footer>


</body>
</html>