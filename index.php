<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script scr="main.js"></script>
</head>
<?php
session_start();
if (!isset($_SESSION['username'])){
header("Location: Login.php");}
?>
<body>
<div class="sticky">
<div class="Logo">
	<img id="logo" src="logokomnet.png" alt="LogoKomnet" width="200" height="100">
	<div><h1 style="font-weight:bold">UKM KOMPUTASI.NET <br><h6 class="desc" style="line-height:100%">Jl. Otto Iskandardinata No.64C Jakarta 13330<br> Telepon: 089529850208 &nbsp;&nbsp; Email:komputasi.net@stis.ac.id</h6></h1>
	</div>
</div>
<nav class="navlink">
	<a href="#">BERANDA</a>
	<a href="Kegiatan.php">KEGIATAN</a>
	<a href="Dokumen.php">DOKUMEN</a>
	<a href="Anggota.php">ANGGOTA</a>
</nav>
</div>
<h2> TENTANG KOMNET</h2>
<div class="TentangKomnet">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus ut est condimentum tempus. Duis imperdiet orci id nisl euismod, at maximus magna ultricies. Suspendisse eu ante tincidunt, feugiat urna eu, iaculis tellus. Duis euismod egestas arcu a sollicitudin. Quisque porttitor, nunc vulputate sollicitudin tristique, nulla ex fringilla erat, vitae pulvinar augue nunc sed erat. Nam orci nulla, vulputate et ipsum sit amet, dignissim mollis dui. Sed gravida, erat nec molestie blandit, lacus tellus pellentesque tortor, quis mattis felis odio vitae libero. Duis ex mauris, luctus quis faucibus quis, luctus a ante. Nullam eu dignissim ligula. Morbi suscipit velit at imperdiet efficitur. Nam vitae lacus risus. Curabitur id blandit purus. Integer vel nibh non diam imperdiet porttitor sit amet vel ante. Etiam quis felis fringilla, faucibus nisi sed, egestas nulla. Ut et porta nisl. Nullam convallis aliquet mi id laoreet.
<br>
Aenean at tellus velit. Cras faucibus vulputate quam, sed ullamcorper est malesuada in. Vivamus congue ante eu dictum fermentum. Vivamus faucibus pellentesque risus vel commodo. Aliquam dignissim molestie dui a tincidunt. Fusce lacinia lobortis turpis quis porta. Sed tincidunt sit amet purus non semper. Praesent eu pretium dolor. Morbi sollicitudin sed massa id imperdiet. Curabitur at nibh nec massa suscipit commodo ultrices nec ante. Nunc cursus mi lectus, id semper dolor congue sit amet.
<br>
Mauris tristique purus ut massa commodo, vitae congue neque facilisis. Praesent mollis aliquet tincidunt. Integer suscipit eget libero eu vulputate. Quisque id tempor massa. Ut scelerisque purus vitae maximus aliquet. Maecenas at lorem sed enim varius porta. Pellentesque ut erat eget eros ullamcorper sollicitudin.
<br>
Cras posuere finibus mauris eu interdum. Nullam ex orci, aliquet at bibendum eget, auctor consequat odio. Curabitur consectetur viverra magna vel rhoncus. Integer commodo leo vitae fringilla sagittis. Duis maximus erat vitae risus condimentum vestibulum. In viverra sollicitudin arcu vitae luctus. Nulla lorem enim, commodo eget orci ac, pharetra euismod erat. Pellentesque cursus lectus nec dolor placerat, et feugiat turpis laoreet. Suspendisse aliquet dolor nisi, vitae imperdiet ligula varius non. Nam efficitur, diam sed commodo volutpat, sapien justo pellentesque turpis, quis dignissim lorem arcu et mi. Suspendisse hendrerit vulputate ultrices. Curabitur ultrices nisi velit, posuere sollicitudin enim euismod eu. Nunc pulvinar vulputate lorem ut malesuada. In pharetra, dolor congue volutpat gravida, ante metus dictum erat, eget elementum elit ante sed risus.
<br>
Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut fringilla nec lectus a lacinia. Aliquam convallis neque at magna gravida, bibendum volutpat tortor dictum. Mauris sit amet libero est. Vivamus non convallis nisi, id pellentesque ante. Duis posuere tortor vitae arcu tristique pulvinar. Nullam scelerisque dignissim nulla, commodo elementum risus laoreet nec. Mauris fermentum libero ac felis pulvinar, et consequat tellus rutrum. Suspendisse nisl tortor, mattis id vehicula posuere, tristique euismod ex. Quisque sed diam eu massa ornare elementum. Curabitur quam nibh, posuere iaculis neque in, efficitur vehicula mi. Suspendisse potenti. Integer lobortis, justo eu condimentum interdum, mi orci pharetra tellus, quis pretium urna nunc at odio. Curabitur et vestibulum nisl, sed aliquam lectus.
</p>


<h2> PROGRAM KERJA KOMNET</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus ut est condimentum tempus. Duis imperdiet orci id nisl euismod, at maximus magna ultricies. Suspendisse eu ante tincidunt, feugiat urna eu, iaculis tellus. Duis euismod egestas arcu a sollicitudin. Quisque porttitor, nunc vulputate sollicitudin tristique, nulla ex fringilla erat, vitae pulvinar augue nunc sed erat. Nam orci nulla, vulputate et ipsum sit amet, dignissim mollis dui. Sed gravida, erat nec molestie blandit, lacus tellus pellentesque tortor, quis mattis felis odio vitae libero. Duis ex mauris, luctus quis faucibus quis, luctus a ante. Nullam eu dignissim ligula. Morbi suscipit velit at imperdiet efficitur. Nam vitae lacus risus. Curabitur id blandit purus. Integer vel nibh non diam imperdiet porttitor sit amet vel ante. Etiam quis felis fringilla, faucibus nisi sed, egestas nulla. Ut et porta nisl. Nullam convallis aliquet mi id laoreet.
<br>
Aenean at tellus velit. Cras faucibus vulputate quam, sed ullamcorper est malesuada in. Vivamus congue ante eu dictum fermentum. Vivamus faucibus pellentesque risus vel commodo. Aliquam dignissim molestie dui a tincidunt. Fusce lacinia lobortis turpis quis porta. Sed tincidunt sit amet purus non semper. Praesent eu pretium dolor. Morbi sollicitudin sed massa id imperdiet. Curabitur at nibh nec massa suscipit commodo ultrices nec ante. Nunc cursus mi lectus, id semper dolor congue sit amet.
<br>
Mauris tristique purus ut massa commodo, vitae congue neque facilisis. Praesent mollis aliquet tincidunt. Integer suscipit eget libero eu vulputate. Quisque id tempor massa. Ut scelerisque purus vitae maximus aliquet. Maecenas at lorem sed enim varius porta. Pellentesque ut erat eget eros ullamcorper sollicitudin.
<br>
Cras posuere finibus mauris eu interdum. Nullam ex orci, aliquet at bibendum eget, auctor consequat odio. Curabitur consectetur viverra magna vel rhoncus. Integer commodo leo vitae fringilla sagittis. Duis maximus erat vitae risus condimentum vestibulum. In viverra sollicitudin arcu vitae luctus. Nulla lorem enim, commodo eget orci ac, pharetra euismod erat. Pellentesque cursus lectus nec dolor placerat, et feugiat turpis laoreet. Suspendisse aliquet dolor nisi, vitae imperdiet ligula varius non. Nam efficitur, diam sed commodo volutpat, sapien justo pellentesque turpis, quis dignissim lorem arcu et mi. Suspendisse hendrerit vulputate ultrices. Curabitur ultrices nisi velit, posuere sollicitudin enim euismod eu. Nunc pulvinar vulputate lorem ut malesuada. In pharetra, dolor congue volutpat gravida, ante metus dictum erat, eget elementum elit ante sed risus.
<br>
Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut fringilla nec lectus a lacinia. Aliquam convallis neque at magna gravida, bibendum volutpat tortor dictum. Mauris sit amet libero est. Vivamus non convallis nisi, id pellentesque ante. Duis posuere tortor vitae arcu tristique pulvinar. Nullam scelerisque dignissim nulla, commodo elementum risus laoreet nec. Mauris fermentum libero ac felis pulvinar, et consequat tellus rutrum. Suspendisse nisl tortor, mattis id vehicula posuere, tristique euismod ex. Quisque sed diam eu massa ornare elementum. Curabitur quam nibh, posuere iaculis neque in, efficitur vehicula mi. Suspendisse potenti. Integer lobortis, justo eu condimentum interdum, mi orci pharetra tellus, quis pretium urna nunc at odio. Curabitur et vestibulum nisl, sed aliquam lectus.
</p>

<div class="account">
	
	<img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png" alt="instagram" width="30" height="30" >
	<a href="https://www.instagram.com/komnetstis/">komnetstis</a>
	<img src="https://www.freeiconspng.com/thumbs/logo-facebook-png/logo-facebook-png-transparent-image-28.png" alt="instagram" width="30" height="30" >
	<a href="https://www.instagram.com/komnetstis/">Komputasi Net</a>
	<img src="https://www.pngkey.com/png/full/2-27646_twitter-logo-png-transparent-background-logo-twitter-png.png" alt="instagram" width="30" height="30" >
	<a href="https://www.instagram.com/komnetstis/">komnetstis</a>
	
</div>


</body>

</html>
