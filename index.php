<?php
    $data = null;
    
    $title = null;
    $content = null;
    $img_url = null;
    $url = "http://kusebar.info/";
    
    if (isset($_GET["id"])) {
        
        /*
            JSON EXAMPLE
            {
                title: "TITLE",
                content: "CONTENT",
                img_url: "IMAGE URL"
            }
        */
        $url .= "?id=" . $_GET["id"];
        $decoded_string = base64_decode($_GET["id"]);
        $data = json_decode($decoded_string, true);
        
        $title = $data["title"];
        $content = $data["content"];
        $img_url = $data["img_url"];
    }
?>

<!DOCTYPE html>
<html>

<head>
	<title><?= $title ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
  
	<link rel="icon" href="<?= $img_url ?>" type="image/x-icon" />
  
    <meta name="description"               content="Kunjungi halaman untuk info lebih lanjut." />
  
	<!-- Facebook OG -->
	<meta property="og:url"                	content="<?= $url ?>" />
	<meta property="og:type"               	content="article" />
	<meta property="og:description"        	content="Kunjungi halaman untuk info lebih lanjut." />
	<meta property="og:title"              	content="<?= $title ?>" />
	<meta property="og:image"              	content="<?= $img_url ?>" />
	<meta property="og:site_name" 			content="Kusebar Info">
	
	<!-- Twitter -->
	<meta name="twitter:title" 				content="<?= $title ?>">
	<meta name="twitter:description" 		content="Kunjungi halaman untuk info lebih lanjut.">
	<meta name="twitter:image" 				content="<?= $img_url ?>">
	<meta name="twitter:card" 				content="summary_large_image">
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	<style>
		input {
			width: 400px;
            max-width: 100%;
		}
        
        * {
			box-sizing: border-box;
		}
	</style>
</head>

<body style="width: 100%; height: 100%; text-align: center; background-color: rgb(210, 210, 210); font-family: 'Roboto', sans-serif; font-size: 1em; padding: 24px;">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-101360903-1', 'auto');
      ga('send', 'pageview');

    </script>

	<h1 style="margin-bottom: 8px;">KUSEBAR.INFO</h1>
	<h5 style="margin-top: 0;">Website yang memberikan informasi-informasi tidak penting dan diciptakan oleh para netizen yang amat sangat kreatif.</h5>
    
    <!-- vmadya_footer-2-2_AdSense2_1x1_as -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7760726841047769"
         data-ad-slot="7595967159"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
	
	<br/><br/>
    
    <?php if ($data !== null) { ?>
	
        <h3><?= $title ?></h3>
        <h1 style="font-size: 3em;"><?= $content ?></h1>
        
        <div style="margin: auto; background-image: url('/smiley.jpg'); width: 200px; height: 200px; box-shadow: 0 0 8px 8px rgb(210, 210, 210) inset; background-repeat: no-repeat; background-size: contain;">
        </div>
    
    <?php } ?>
	<p style="margin-top: -32px;">
    
        <?php if ($data !== null) { ?>
            <b><?= floor((time() / 60) - 24960000) ?></b> orang telah terhibur di website ini.<br/>
            Ayo sebarkan info "penting" ini ke teman-temanmu supaya mereka tidak ketinggalan!
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true">
                <a target="_blank" class="facebook-share-button fb-xfbml-parse-ignore" href="https://www.facebook.com/sharer/sharer.php?u=<?= $url ?>"><img style="max-width: 250px;" src="http://www.tutorialstutor.com/uploads/facebook/Facebook-share-button.png"/></a>
            </div>
        <?php } ?>
		
		Sukai halaman facebook kami untuk mendapatkan update berita-berita penting setiap harinya
		<br/><br/>
		<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fkusebar&width=200&layout=standard&action=like&size=large&show_faces=false&share=false&height=35&appId=1629662793959481" width="200" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	
		<br/><br/>
		
		Sebarkan info-mu melalui website ini:<br/><br/>
		Judul: <input id="input-title" placeholder=" Ukuran tubuhnya sangat mungil! Ternyata dia..." /><br/>
		<span style="font-size: 0.8em;" class="tip">Usahakan judul memiliki panjang kurang dari 60 karakter</span><br/><br/>
		Konten: <input id="input-content" placeholder=" Adalah bayi!"/><br/><br/>
		Alamat gambar: <input id="input-image" placeholder=" https://cdn.pixabay.com/photo/alamat-gambar-mu.jpg"/><br/><br/>
		<button id="create-page">Ciptakan Halaman</button>
		<br/>
		<span style="color: red;" id="warning"></span>
		<br/>
		<span id="loading" style="display: none;">Halaman sedang diciptakan...</span>
		<span id="share-other-link" style="display: none;">
			<a id="share-other-link-a" target="_blank" class="facebook-share-button fb-xfbml-parse-ignore" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Bagikan</a> alamat berikut ini kepada teman-temanmu:
		</span>
		<br/><br/>
		<span id="other-link-wrapper" style="display: none;">
			<input id="other-link" disabled style="cursor: pointer;"/>
		</span>
	</p>
	
	<p>
		<h4 style="margin-bottom: 8px;">Syarat & Ketentuan:</h4>
		Kami (pemilik dan pembuat website) <b>tidak bertanggung jawab</b> atas content apapun yang disebarkan melalui website ini<br/>
		<b>DILARANG</b> menyebarkan info-info yang mengandung isu sensitif seperti politik, SARA, atau isu-isu lainnya<br/>
		Website ini dibuat hanya untuk <b>hiburan</b> semata<br/> Semoga masyarakat tidak mudah termakan oleh judul yang hanya memancing pembaca.
	</p>
    
    <!-- vmadya_footer-2-2_AdSense2_1x1_as -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7760726841047769"
         data-ad-slot="7595967159"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

	
	<script>
		$(document).ready(function(){
		
			$(".facebook-share-button").click(function(e){
				e.preventDefault();
				var href = $(this).attr('href');
				window.open(href, "Facebook", "height=269,width=550,resizable=1");
			});
			
			$("#other-link-wrapper").click(function(e){
				window.open("https://www.facebook.com/sharer/sharer.php?u=" + $("#other-link").val(), "Facebook", "height=269,width=550,resizable=1");
			});
			
			$("#create-page").click(function(){
				$("#warning").html("");
				$("#other-link-wrapper").css('display', 'none');
				$("#share-other-link").css('display', 'none');
				var title = $("#input-title").val() || "";
				if (!title) {
					$("#warning").html("Kamu belum memasukkan judul!");
					return;
				}
				var content = $("#input-content").val() || "";
				if (!content) {
					$("#warning").html("Kamu belum memasukkan konten!");
					return;
				}
				var imgUrl = $("#input-image").val() || "";
				if (!imgUrl) {
					$("#warning").html("Kamu belum memasukkan alamat gambar!");
					return;
				}
				
				$("#loading").css({
					display: 'block'
				});
				
				setTimeout(function(){
					var json = {
						title: title,
						content: content,
						img_url: imgUrl
					};
					var strJson = JSON.stringify(json);
					
					var newUrl = "http://kusebar.info?id=" + btoa(strJson);
					$("#share-other-link").css('display', 'inline-block');
					$("#other-link-wrapper").css('display', 'inline-block');
					$("#other-link").val(newUrl);
					
					$("#share-other-link-a").attr("href", "https://www.facebook.com/sharer/sharer.php?u=" + newUrl);
					
					$("#loading").css({
						display: 'none'
					});
				}, 3000);
			});
		
		});
	</script>
</body>

</html>
