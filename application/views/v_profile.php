<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	
	<title>I-Confident - <?= ucname(strtolower($therapist_data->therapist_fullname)) ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>

    <meta name="robots" content="index,follow">
    <meta name="description" content="I-Confident">
    <meta name="keywords" content="terapis urut i-confident, terapis urut, tukang urut, cari tukang urut, tukang urut wanita, mak bidan, bidan, wanita, kursus urut, urutan tradisional, kementerian kesihatan malaysia, kkm, gapera, jawatan kosong, peluang pekerjaan, kerja di kampung, wang besar, senang buat duit, family first, Suri Rumah, Jururawat, Juru Fisio, Pegawai Bank, doktor, kesihatan, sakit urat, post natal, wanita, majalah niaga, kuasa wanita, amalan tradisional, buat duit dengan senang, massage, stone massage, urutan bersalin, urutan selepas bersalin, penjagaan pantang, kursus, jpw, jabatan pembangunan wanita, bisnes modal kecil, bisnes tanpa modal, bisnes fleksibel, ilmu bermanfaat, manfaat akhir hayat, job lumayan,job senang, massage school, sekolah urut, kutw, kutw4u.com, kursus urut dayang, pening cari kerja, kerja mudah, hot-job, jobstreet, jawatan kosong, facial, mobile spa, jarimas">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	
	<link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style type="text/css">
	
    	.btn-info, .btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active, .show>.btn-info.dropdown-toggle {
            color: #fff;
            background-color: #e34099;
            border-color: #fd92cc;
        }
	
	    .corner-flora
	    {
	        position: absolute;
            top: -28px;
            left: -30px;
            z-index: 1;
	    }
	    #loading{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction:row;
            width:100%;
            height:100vh;
        }
        
        .card {
          background: #fff;
          border-radius: 2px;
          display: inline-block;
          min-height: 367px;
          margin: 1rem;
          position: relative;
          width: 300px;
        }
        
        .card-1 {
          box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
          transition: all 0.3s cubic-bezier(.25,.8,.25,1);
        }
        
        .card-1:hover {
          box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }
        
        .card-2 {
          box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        }
        
        .card-3 {
          box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }
        
        .card-4 {
          box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
          position: relative;
        }
        
        .card-5 {
          box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
        }
        
        
        .pakej-title
        {
            font-size: 50px;
            color: #696969;
            font-weight: bold;
            text-shadow: #b5b5b5 2px 0 1px;
            text-transform: uppercase;
            margin-bottom: 10px;
            margin-top: 22px;
        }
        
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300);
        @import url(https://fonts.googleapis.com/css?family=Squada+One);
        body {
          background: #eee url(https://subtlepatterns.com/patterns/extra_clean_paper.png);
        }
        #logo {
            font-family: 'Open Sans', sans-serif;
            color: #555;
            text-decoration: none;
            font-size: 50px;
            font-weight: 800;
            letter-spacing: -3px;
            line-height: 1;
            text-shadow: #EDEDED 3px 2px 0;
            position: relative;
        }
        #logo:after {
            content: "I-Confident";
            position: absolute;
            left: 1.2vw;
            top: 2.5vw;
        }
        #logo:after {
          /*background: url(https://subtlepatterns.com/patterns/crossed_stripes.png) repeat;*/
          background-image: -webkit-linear-gradient(left top, transparent 0%, transparent 25%, #555 25%, #555 50%, transparent 50%, transparent 75%, #555 75%);
          background-size: 4px 4px;
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          z-index: -5;
          display: block;
          text-shadow: none;
          width:100%;
        }
        #menu {
            width: auto;
            height: auto;
            list-style: none;
            margin: 2px 0 0 0;
            padding: 14px 10px;
            border-top: 4px double #AAA;
            border-bottom: 4px double #AAA;
            position: relative;
            text-align: center;
        }
        #menu li {
          display: inline-block;
          width: 173px;
          margin: 0 10px;
          position: relative;
          -webkit-transform: skewy(-3deg);
          -webkit-backface-visibility: hidden;
          -webkit-transition: 200ms all;
        }
        #menu li a {
          text-transform: uppercase;
          font-family: 'Squada One', cursive;
          font-weight: 800;
          display: block;
          background: #FFF;
          padding: 2px 10px;
          color: #d90075;
          font-size: 25px;
          text-align: center;
          text-decoration: none;
          position: relative;
          z-index: 1;
          text-shadow: 
        		1px 1px 0px #FFF, 
        		2px 2px 0px #999,
        		3px 3px 0px #FFF;
        	background-image: -webkit-linear-gradient(top, transparent 0%, rgba(0,0,0,.05) 100%);
        	-webkit-transition: 1s all;
        	background-image: -webkit-linear-gradient(left top, 
        		transparent 0%, transparent 25%, 
        		rgba(0,0,0,.15) 25%, rgba(0,0,0,.15) 50%, 
        		transparent 50%, transparent 75%, 
        		rgba(0,0,0,.15) 75%);
          background-size: 4px 4px;
        	box-shadow: 
        		0 0 0 1px rgba(0,0,0,.4) inset, 
        		0 0 20px -5px rgba(0,0,0,.4),
        		0 0 0px 3px #FFF inset;
        }
        #menu li:hover {
        	width: 203px;
        	margin: 0 -5px;
        }
        #menu a:hover {
          color: #ff008b;
        }
        #menu li:after,
        #menu li:before {
          content: '';
          position: absolute;
          width: 50px;
          height: 100%;
          background: #BBB;
          -webkit-transform: skewY(8deg);
          x-index: -3;
        	border-radius: 4px;
        }
        #menu li:after {
        	background-image: -webkit-linear-gradient(left, transparent 0%, rgba(0,0,0,.4) 100%);
          right: 0;
          top: -4px; 
        }
        #menu li:before {
          left: 0;
          bottom: -4px;
        	background-image: -webkit-linear-gradient(right, transparent 0%, rgba(0,0,0,.4) 100%);
        }
        
        
        .pakej-item
        {
            text-align:left !important;
            margin-top:15px;
        }
        
        .price-tag
        {
            text-align: left;
            margin-left: 24px;
        }
        
        .btn-secondary {
            color: #eaeaea;
            background-color: #3f3f3f;
            border-color: #6c757d;
        }
        .right-btn
        {
            text-align: right;
            margin-right: 7px;
        }
        .must-filled
        {
            color:#900;
            font-weight:bold;
        }
        .btn-card-action
        {
            position: absolute;
            right: -10px;
            bottom: 5px;
        }
        .on-demand{
            text-align: left;
            margin-left: 25px;
            font-size: 0.8em;
            font-style: italic;
        }

	</style>
	<!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '608140386061932');
      fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=608140386061932&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
	
</head>
<body style="background-color:#ecf1f2">

<div class="container">
    <div class="row" style="margin-top:50px;">
        <div class="col sm-12 text-center">
            <img src="https://graph.facebook.com/<?= $therapist_data->therapist_fbid ?>/picture?type=large" style="
                border: 4px solid #171300; max-width:250px; max-height:250px; border-radius: 50%;" />
        </div>
    </div>
  <div class="row">
      <div class="col-sm-12 text-center" style="font-size:22px; font-weight:normal; font-style:italic; padding-top:10px;">
          "Hi.. saya <b><?= ucname(strtolower($therapist_data->therapist_fullname)) ?></b>!! Kepakaran saya adalah membantu wanita-wanita yang selalu penat, lesu, tidak ceria, atau tiada keyakinan kerana kerja-kerja harian yang semakin bertambah ataupun kerana bersalin dengan <b>URUTAN TRADISIONAL</b> agar menjadi sentiasa lebih cergas, bertenaga, ceria dan berkeyakinan tinggi!! Anda nak sihat, ceria dan selalu bertenaga? Hubungi saya di <br/> <span style="font-size: 35px;"> <b><?= $therapist_data->therapist_phoneno ?></b></span> "
      </div>
  </div>
  <div class="row">
      <div style="text-align:center; width:100vw;">
          <p class="pakej-title">SERVIS</p>
      </div>
  </div>
  <div class="row" style="text-align:center;">
      <div class="col-lg-4 col-md-6 col-xs-6">
      <div class="card card-4">
          <div class="corner-flora">
              <img src="/assets/images/corner_flora_200x200.png" />
          </div>
          <ul id="menu">
            <li><a href="javascript:void(0)"><span>Pelbagai</span></a></li>
          </ul>
          
          <ul class="pakej-item">
              <li>Urut sebahagian badan RM 40</li>
              <li>Urut seluruh badan RM 80</li>
              <li>Urut + tungku RM 100</li>
              <li>Urut + tungku + scrub RM 120</li>
              <li>Urut + sengkak rahim + tungku + tangas RM 140</li>
              <li>Urut + tungku + tangas + mandi garam limau RM 150</li>
          </ul>
          
          <div class="btn-card-action">
              <div class="col">
                 <p class="price-tag">
                      <!--RM 7920-->
                      &nbsp;
                 </p> 
              </div>
              <div class="col right-btn">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-package="package-9" data-target="#subscribe-package">Whatsapp</button>
                  <!--<a type="button" href="http://wasap.my/60183954840/Pakej-Bersalin-44-Hari" target="_blank" class="btn btn-sm btn-secondary">Whatsapp</a>-->
              </div>
          </div>
      </div>
      
      
    </div>
    <div class="col-lg-4 col-md-6 col-xs-6">
      <div class="card card-4">
          <div class="corner-flora">
              <img src="/assets/images/corner_flora_200x200.png" />
          </div>
          <ul id="menu">
            <li><a href="javascript:void(0)"><span>3 Hari</span></a></li>
          </ul>
          <ul class="pakej-item">
              <li>Urutan Berpantang (3x)</li>
              <li>Tuam / Tungku (3x)</li>
              <li>Bengkung (*)</li>
              <li>Sapuan Param & Pilis (*)</li>
              <li>Pengurusan Bayi (3x)</li>
          </ul>
          <p class="on-demand">* Atas permintaan</p>
          <div class="btn-card-action">
              <div class="col">
                 <p class="price-tag">
                      RM 450
                      &nbsp;
                 </p> 
              </div>
              <div class="col right-btn">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-package="package-1" data-target="#subscribe-package">Whatsapp</button>
                  <!--<a type="button" href="http://wasap.my/60183954840/Pakej-Bersalin-3-Hari" target="_blank" class="btn btn-sm btn-secondary">Whatsapp</a>-->
              </div>
          </div>
          
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-6">
      <div class="card card-4">
          <div class="corner-flora">
              <img src="/assets/images/corner_flora_200x200.png" />
          </div>
          <ul id="menu">
            <li><a href="javascript:void(0)"><span>5 Hari</span></a></li>
          </ul>
          <ul class="pakej-item">
              <li>Urutan Berpantang (3x)</li>
              <!--<li>Urutan Relaxing (2x)</li>-->
              <li>Tuam / Tungku (5x)</li>
              <li>Mandi Herba (5x)</li>
              <li>Bengkung (*)</li>
              <li>Sapuan Param & Pilis (*)</li>
              <li>Pengurusan Bayi (5x)</li>
          </ul>
          <p class="on-demand">* Atas permintaan</p>
          <div class="btn-card-action">
              <div class="col">
                 <p class="price-tag">
                      RM 650
                      &nbsp;
                 </p> 
              </div>
              <div class="col right-btn">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-package="package-2" data-target="#subscribe-package">Whatsapp</button>
                  <!--<a type="button" href="http://wasap.my/60183954840/Pakej-Bersalin-5-Hari" target="_blank" class="btn btn-sm btn-secondary">Whatsapp</a>-->
              </div>
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-6">
      <div class="card card-4">
          <div class="corner-flora">
              <img src="/assets/images/corner_flora_200x200.png" />
          </div>
          <ul id="menu">
            <li><a href="javascript:void(0)"><span>7 Hari</span></a></li>
          </ul>
          <ul class="pakej-item">
              <li>Urutan Berpantang (5x)</li>
              <!--<li>Urutan Relaxing (2x)</li>-->
              <li>Tuam / Tungku (5x)</li>
              <li>Lulur (3x)</li>
              <li>Mandi Herba (7x)</li>
              <li>Bengkung (*)</li>
              <li>Sapuan Param & Pilis (*)</li>
              <li>Pengurusan Bayi (7x)</li>
          </ul>
          <p class="on-demand">* Atas permintaan</p>
          <div class="btn-card-action">
              <div class="col">
                 <p class="price-tag">
                      RM 1050
                      &nbsp;
                 </p> 
              </div>
              <div class="col right-btn">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-package="package-3" data-target="#subscribe-package">Whatsapp</button>
                  <!--<a type="button" href="http://wasap.my/60183954840/Pakej-Bersalin-7-Hari" target="_blank" class="btn btn-sm btn-secondary">Whatsapp</a>-->
              </div>
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-6">
      <div class="card card-4">
          <div class="corner-flora">
              <img src="/assets/images/corner_flora_200x200.png" />
          </div>
          <ul id="menu">
            <li><a href="javascript:void(0)"><span>10 Hari</span></a></li>
          </ul>
          <ul class="pakej-item">
              <li>Urutan Berpantang (7x)</li>
              <!--<li>Urutan Relaxing (3x)</li>-->
              <li>Tuam / Tungku (7x)</li>
              <li>Lulur (4x)</li>
              <li>Mandi Herba (10x)</li>
              <li>Bengkung (*)</li>
              <li>Sapuan Param & Pilis (*)</li>
              <li>Pengurusan Bayi (10x)</li>
          </ul>
          <p class="on-demand">* Atas permintaan</p>
          <div class="btn-card-action">
              <div class="col">
                 <p class="price-tag">
                      RM 1500
                      &nbsp;
                 </p> 
              </div>
              <div class="col right-btn">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-package="package-4" data-target="#subscribe-package">Whatsapp</button>
                  <!--<a type="button" href="http://wasap.my/60183954840/Pakej-Bersalin-10-Hari" target="_blank" class="btn btn-sm btn-secondary">Whatsapp</a>-->
              </div>
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-6">
      <div class="card card-4">
          <div class="corner-flora">
              <img src="/assets/images/corner_flora_200x200.png" />
          </div>
          <ul id="menu">
            <li><a href="javascript:void(0)"><span>14 Hari</span></a></li>
          </ul>
          <ul class="pakej-item">
              <li>Urutan Berpantang (10x)</li>
              <!--<li>Urutan Relaxing (4x)</li>-->
              <li>Tuam / Tungku (10x)</li>
              <li>Lulur (5x)</li>
              <li>Mandi Herba (13x)</li>
              <li>Mandi Bunga (1x)</li>
              <li>Bengkung (*)</li>
              <li>Sapuan Param & Pilis (*)</li>
              <li>Pengurusan Bayi (14x)</li>
          </ul>
          <p class="on-demand">* Atas permintaan</p>
          <div class="btn-card-action">
              <div class="col">
                 <p class="price-tag">
                      RM 2240
                      &nbsp;
                 </p> 
              </div>
              <div class="col right-btn">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-package="package-5" data-target="#subscribe-package">Whatsapp</button>
                  <!--<a type="button" href="http://wasap.my/60183954840/Pakej-Bersalin-14-Hari" target="_blank" class="btn btn-sm btn-secondary">Whatsapp</a>-->
              </div>
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-6">
      <div class="card card-4">
          <div class="corner-flora">
              <img src="/assets/images/corner_flora_200x200.png" />
          </div>
          <ul id="menu">
            <li><a href="javascript:void(0)"><span>21 Hari</span></a></li>
          </ul>
          <ul class="pakej-item">
              <li>Urutan Berpantang (15x)</li>
              <!--<li>Urutan Relaxing (5x)</li>-->
              <li>Tuam / Tungku (15x)</li>
              <li>Lulur (5x)</li>
              <li>Mandi Herba (18x)</li>
              <li>Mandi Bunga (3x)</li>
              <li>Bengkung (*)</li>
              <li>Sapuan Param & Pilis (*)</li>
              <li>Pengurusan Bayi (21x)</li>
          </ul>
          <p class="on-demand">* Atas permintaan</p>
          <div class="btn-card-action">
              <div class="col">
                 <p class="price-tag">
                      RM 3360
                      &nbsp;
                 </p> 
              </div>
              <div class="col right-btn">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-package="package-6" data-target="#subscribe-package">Whatsapp</button>
                  <!--<a type="button" href="http://wasap.my/60183954840/Pakej-Bersalin-21-Hari" target="_blank" class="btn btn-sm btn-secondary">Whatsapp</a>-->
              </div>
          </div>
          
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-6">
      <div class="card card-4">
          <div class="corner-flora">
              <img src="/assets/images/corner_flora_200x200.png" />
          </div>
          <ul id="menu">
            <li><a href="javascript:void(0)"><span>30 Hari</span></a></li>
          </ul>
          <ul class="pakej-item">
              <li>Urutan Berpantang (20x)</li>
              <!--<li>Urutan Relaxing (5x)</li>-->
              <li>Tuam / Tungku (20x)</li>
              <li>Lulur (7x)</li>
              <li>Mandi Herba (27x)</li>
              <li>Mandi Bunga (3x)</li>
              <li>Bengkung (*)</li>
              <li>Sapuan Param & Pilis (*)</li>
              <li>Pengurusan Bayi (30x)</li>
          </ul>
          <p class="on-demand">* Atas permintaan</p>
          <div class="btn-card-action">
              <div class="col">
                 <p class="price-tag">
                      RM 4500
                      &nbsp;
                 </p> 
              </div>
              <div class="col right-btn">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-package="package-7" data-target="#subscribe-package">Whatsapp</button>
                  <!--<a type="button" href="http://wasap.my/60183954840/Pakej-Bersalin-30-Hari" target="_blank" class="btn btn-sm btn-secondary">Whatsapp</a>-->
              </div>
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-6">
      <div class="card card-4">
          <div class="corner-flora">
              <img src="/assets/images/corner_flora_200x200.png" />
          </div>
          <ul id="menu">
            <li><a href="javascript:void(0)"><span>44 Hari</span></a></li>
          </ul>
          
          <ul class="pakej-item">
              <li>Urutan Berpantang (40x)</li>
              <!--<li>Urutan Relaxing (10x)</li>-->
              <li>Tuam / Tungku (40x)</li>
              <li>Lulur (7x)</li>
              <li>Mandi Herba (36x)</li>
              <li>Mandi Bunga (4x)</li>
              <li>Bengkung (*)</li>
              <li>Sapuan Param & Pilis (*)</li>
              <li>Pengurusan Bayi (44x)</li>
          </ul>
          <p class="on-demand">* Atas permintaan</p>
          <div class="btn-card-action">
              <div class="col">
                 <p class="price-tag">
                      RM 6500
                      &nbsp;
                 </p> 
              </div>
              <div class="col right-btn">
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-package="package-8" data-target="#subscribe-package">Whatsapp</button>
                  <!--<a type="button" href="http://wasap.my/60183954840/Pakej-Bersalin-44-Hari" target="_blank" class="btn btn-sm btn-secondary">Whatsapp</a>-->
              </div>
          </div>
      </div>
      
      
    </div>
  </div>

  <div class="row">
          <div style="text-align:center; width:100vw; margin-bottom:20px;">
              <p class="pakej-title">Minyak Urut</p>
          </div>
  </div>
  <div class="row">
      <div class="col sm-12 text-center">
            <img src="/assets/images/minyak_urut_oval.png"  style="
                border: 4px solid #171300; max-width:500px; max-height:500px; border-radius: 50%;" />
        </div>
  </div>
  <div class="row">
      <div class="col-lg-4 col-md-6 col-xs-6">
          <p>Khasiat:</p>
            <p>✅Mengesan gangguan jin dalam badan<br />✅Mengesan santau dan sihir<br />✅Merawat dan memulih.. In sha Allah</p>
            <p>Sesuai digunakan bagi yang mengalami:<br />✅Sakit-sakit badan <br />✅Sengal-sengal<br />✅Sakit urat<br />✅Gangguan sihir / jin <br />✅Hati tidak tenang<br />✅Perut kembung</p>
</div>
<div class="col-lg-4 col-md-6 col-xs-6"><p><br />Kesan:<br />*Berbeza bagi setiap orang<br />✅Meremang bulu roma<br />✅Sakit<br />✅Panas terbakar<br />✅Demam<br />✅Sakit/bengkak jadi surut dan lega</p>
            <p><br />Jika ada emosi tak stabil samaada:<br />✅Mudah sentap<br />✅Sedih<br />✅Panas baran</p>
</div>
<div class="col-lg-4 col-md-6 col-xs-6">            <p><br />Cara guna:<br />✅Baca al fatihah<br />✅Selawat 7x<br />✅Doa dengan niat untuk sembuh<br />✅Sapu dan urut di tempat yang sakit</p>
<p>Produk muslim</p>
<p>Harga: RM 25 (free postage)</p> <?= '';//$therapist_data->therapist_phoneno ?>
<p>Isipadu minima: 100ml</p><a target="_blank" href="http://wasap.my/60183954840/Nak+beli+minyak+urut+i-confident" type="button" class="btn btn-sm btn-info">Klik Sini Untuk Beli Minyak</a>
      </div>
  </div>
    <?php if($this->input->get('i')==1): ?>
    
        <div style="margin-top:100px;" class="text-center">
            <a href="/login">Login</a>
        </div>
    
    <?php endif; ?>
  
<!--  <div class="row">
          <div style="text-align:center; width:100vw; margin-bottom:20px;">
              <p class="pakej-title">Testimonials</p>
          </div>
  </div>
  <div class="row">
		<div class="row">
		    <?php for($t=1; $t<=20; $t++): ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="/assets/images/testimonials/<?= $t.'.jpg' ?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="/assets/images/testimonials/<?= $t.'.jpg' ?>"
                         alt="Another alt text">
                </a>
            </div>
            <?php endfor; ?>
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>-->
</div>
<br/>
<!--<div class="row">
    <div class="col-sm-12 text-center">
        <img src="/assets/images/comp-logo.png" style="max-width: 152px; margin-bottom: 11px;" />
        <p>Rich Pleasure Resources (SA0440565-T)<br><a href="mailto:richpleasure4u@gmail.com">richpleasure4u@gmail.com</a><br>018-3954840</p>
        <p></p>
        <p>
            Follow us on <br> (FB) <a href="https://www.facebook.com/rpmadayang">I-Confident</a>
            <br> (INSTA) <a href="https://www.instagram.com/kursusurutwanita">kursusurutwanita</a>
        
        </p>
    </div>
</div>-->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="subscribe-package" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sila isi borang ini dulu ye (^_^) </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pakej<span class="must-filled">*</span>:</label>
            <select class="form-control" id="_postnatal_package">
                <option value="">- Pilih -</option>
                <?php if($obj_package): ?>
                    <?php foreach($obj_package as $row_package): ?>
                        <option value="package-<?= $row_package->package_id ?>"><?= $row_package->package_title ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama<span class="must-filled">*</span>:</label>
            <input type="text" id="_customer_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">No Telefon<span class="must-filled">*</span>:</label>
            <input type="text" id="_phoneno" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
        <!--<button type="button" onclick="window.open('http://wasap.my/60183954840/Pakej-Bersalin-44-Hari')" class="btn btn-sm btn-info">Submit</button>-->
        <button type="button" onclick="submit_form()" class="btn btn-sm btn-info">Submit</button>
      </div>
    </div>
  </div>
</div>

</div>

<script type="text/javascript">

    let modalId = $('#image-gallery');
    
    $(document)
      .ready(function () {
    
        loadGallery(true, 'a.thumbnail');
    
        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
          $('#show-previous-image, #show-next-image')
            .show();
          if (counter_max === counter_current) {
            $('#show-next-image')
              .hide();
          } else if (counter_current === 1) {
            $('#show-previous-image')
              .hide();
          }
        }
    
        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */
    
        function loadGallery(setIDs, setClickAttr) {
          let current_image,
            selector,
            counter = 0;
    
          $('#show-next-image, #show-previous-image')
            .click(function () {
              if ($(this)
                .attr('id') === 'show-previous-image') {
                current_image--;
              } else {
                current_image++;
              }
    
              selector = $('[data-image-id="' + current_image + '"]');
              updateGallery(selector);
            });
    
          function updateGallery(selector) {
            let $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-title')
              .text($sel.data('title'));
            $('#image-gallery-image')
              .attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
          }
    
          if (setIDs == true) {
            $('[data-image-id]')
              .each(function () {
                counter++;
                $(this)
                  .attr('data-image-id', counter);
              });
          }
          $(setClickAttr)
            .on('click', function () {
              updateGallery($(this));
            });
        }
      });
    
    // build key actions
    $(document)
      .keydown(function (e) {
        switch (e.which) {
          case 37: // left
            if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
              $('#show-previous-image')
                .click();
            }
            break;
    
          case 39: // right
            if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
              $('#show-next-image')
                .click();
            }
            break;
    
          default:
            return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
      });

    $(document).ready(function() {
        $('#subscribe-package').on('show.bs.modal', function (e) {
            // console.log($(e.relatedTarget).data('package'));
            var d = $(e.relatedTarget).data('package');
             $('#_postnatal_package').val(d);
        })
    });
    
    function submit_form()
    {
        console.log('here');
        var _postnatal_package = $('#_postnatal_package').val();
        var _postnatal_package_text = $('#_postnatal_package  option:selected').text();
        var _customer_name = $('#_customer_name').val();
        var _phoneno = $('#_phoneno').val();
        
        if(!_postnatal_package)
        {
            $('#_postnatal_package').focus();
        }else if(!_customer_name)
        {
            $('#_customer_name').focus();
        }else if(!_phoneno)
        {
            $('#_phoneno').focus();
        }else
        {
            var input_form_data = {
                _postnatal_package: _postnatal_package,
                _postnatal_package_text: _postnatal_package_text,
                _customer_name:_customer_name,
                _phoneno: _phoneno,
                _refer: '<?= $this->uri->segment(1) ?>'
            };
            
            store_data(input_form_data);
        }
    }
    
    function store_data(input_data)
    {
        console.log("Input Data: ",input_data);
        $.ajax({
          url: '/profile/store_data',
          type: 'post',
          data:input_data,
          success: function(response)
          {
              console.log("response: ",response);
              var a = JSON.parse(response);
              send2Whatsapp(a.url_whatsapp);
          }
        });
    }

    
    function send2Whatsapp(text)
    {
        <?php if($therapist_data): ?>
            window.location.href = "http://wasap.my/6<?= $therapist_data->therapist_phoneno ?>/"+text;
        <?php else: ?>
            window.location.href = "http://wasap.my/60183954840/"+text;
        <?php endif; ?>
    }
    
</script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127712073-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127712073-1');
</script>

</body>
</html>