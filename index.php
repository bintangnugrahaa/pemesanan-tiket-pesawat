<?php 
session_start();
if(isset($_SESSION["username"])){
}else{
	echo header("location:login.php");
	
}
include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
	<div class="content">
		<marquee style="background: #07A0DC; padding:5px; color: #fff;">Selamat Datang di airline penerbangan kami offline</marquee>
		<div id="profile">
			<img src="foto/ina.jpeg" alt="" class="animated flipInY">
			<center>
				<h2>TIKET PESAWAT</h2>
				<hr/>
			</center>
			

		</div>
		<hr/>

		<br />
		<br />
		<br />
	</div>
</div>


<?php include('template/footer.php'); ?>