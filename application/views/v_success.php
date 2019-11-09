<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="http://admin.i-confident.com/assets/css/material-dashboard.css?v=2.1.1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>
			I-Confident.com - Registration Successfull!!
		</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
		<link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Yellowtail&display=swap" rel="stylesheet">
		<style type="text/css">
			.success
			{
			font-size: 43px;
			font-weight: bold;
			text-align: center;
			font-family: 'Yellowtail', cursive;
			}
			.desc
			{
			text-align: center;
			}
			.next-action
			{
			margin-top:10px;
			margin-bottom:20px;
			}
			.logo
			{
			width: 150px;
			height: auto;
			margin-top: 30px;
			}
		</style>
                                        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '608140386061932');
            fbq('track', 'Customer');

        </script>
	</head>
	
	<body class=""> 
		<div class="wrapper ">
			<div class="content">
				<div class="container-fluid">
					<div class="text-center">
						<img class="logo" src="/assets/images/I_confident_logo_16_May_2019.png" />
						<div class="success"> 
							Tahniah!!
						</div>
						<div class="desc">
							Anda telah berjaya didaftarkan untuk kelas urut! 
						</div>
						<hr />
						<div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left !important">
						<p>Dah bersedia nak pergi kursus? Alhmdulillah.. anda dah buat pilihan yang terbaik untuk <b>IMPROVE</b> diri menjadi seorang terapis. Kami doakan semua urusan anda dimudahkan Allah s.w.t.. amiin.</p>
							<p>Apa yang <b>perlu dibawa semasa kursus:</b></p>
							<ol style="font-weight:bold">
								<li>Kain batik berjahit x 2</li>
								<li>Tuala sederhana x 1 </li>
								<li>Alat tulis </li>
							</ol>
							<p>*Semua barang-barang di atas adalah untuk <b>kegunaan sendiri</b> semasa praktikal urutan.</p>
							<p>Adakah anda rasa kursus ni patut dikongsi bersama rakan-rakan anda? Kalau ya.. <b>COPY</b> link di bawah, dan <b>SHARE</b> kan kepada group-group whatsapp / telegram / facebook sekarang!!</p>
							<p>&nbsp;</p>
							<h3 style="text-align:center; font-weight:bold;"><a target="_blank" href="http://i-confident.com/?ref=<?= $this->input->get('ref'); ?>">http://i-confident.com/?ref=<?= $this->input->get('ref'); ?></a></h3>
							<p>&nbsp;</p>
							<p>Link ini adalah khas untuk anda <b>share</b> dalam media sosial.
							<br />Setiap <b>1 orang yang berjaya daftar</b> kursus in sha Allah kami bagi <b>RM 50</b> kepada anda.. just share je.. kami yang akan hubungi mereka nanti.
						</div>
						<hr />
						<div class="next-action">
							<a class="btn btn-info btn-sm" href="https://www.facebook.com/groups/2053290368263581" >Join group Facebook <br/> <b>I-Confident Community</b></a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
