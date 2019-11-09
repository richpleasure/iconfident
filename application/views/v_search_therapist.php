<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>I-Confident</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    <meta name="description" content="Terapis Urut I-Confident">
    <meta name="keywords" content="terapis urut i-confident, terapis urut, tukang urut, cari tukang urut, tukang urut wanita, mak bidan, bidan, wanita, kursus urut, urutan tradisional, kementerian kesihatan malaysia, kkm, gapera, jawatan kosong, peluang pekerjaan, kerja di kampung, wang besar, senang buat duit, family first, Suri Rumah, Jururawat, Juru Fisio, Pegawai Bank, doktor, kesihatan, sakit urat, post natal, wanita, majalah niaga, kuasa wanita, amalan tradisional, buat duit dengan senang, massage, stone massage, urutan bersalin, urutan selepas bersalin, penjagaan pantang, kursus, jpw, jabatan pembangunan wanita, bisnes modal kecil, bisnes tanpa modal, bisnes fleksibel, ilmu bermanfaat, manfaat akhir hayat, job lumayan,job senang, massage school, sekolah urut, kutw, kutw4u.com, kursus urut dayang, pening cari kerja, kerja mudah, hot-job, jobstreet, jawatan kosong, facial, mobile spa, jarimas">
    
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/custom.css">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="container" style="margin-top:3vw;">
    <div class="row">
        <div class="col-xs-8 offset-xs-2 col-sm-8 offset-sm-2 col-lg-4 offset-lg-4 col-md-6 offset-md-3" style="padding: 6px;">
            <div class="text-center">
            <div style="display:flex;justify-content: start;align-items: center;/* text-align: left; */">
                <div style="
    flex: 1;
"><img style="max-width: 62px; margin: 9px;" src="/assets/images/i-confident_normal.png"></div>
                <div style="
                display: flex;
                justify-content: center;
                align-items: flex-start;
                flex-direction:column;
                text-align: left !important;
                width:100%;
                line-height: 0px;
                flex: 6;
                ">
    
                    <div style="flex:1">
                        <div>
                            <h5>I-Confident</h5></div>
    					<div>
                            <div style="flex:1;font-size: 0.8em;font-style: italic;">
                        Your Therapist Partner
                    </div>

						</div>
                    </div></div>
            </div>
            </div>
        </div>
    </div>
    <?php if($customer_data): ?>
    <?php if($customer_data->customer_credit > 0): ?>
    <p style="text-align:center; font-weight:bold;">PREMIUM</p>
    <p style="text-align:center; font-weight:bold;">Kredit: <?= $customer_data->customer_credit; ?></p>
    <?php else: ?>
    <!--<p style="text-align:center; font-weight:bold;">BASIC</p>-->
    <!--<p style="text-align:center; font-weight:bold;">Kredit: 0</p>-->
    <?php endif; ?>
    <?php endif; ?>
    <form class="form-horizontal" method="get" action="/index.php/search_therapist?>">
    <input type="hidden" name="fb_id" value="<?= $this->input->get('fb_id') ?>" />
    <div class="row form-group">
        <div class="col-sm-12 col-lg-4 offset-lg-4 col-md-10 offset-md-1">
            <select onchange="show_city(this.value)" name="state" class="select-field form-control">
    		<option value="">- Pilih Negeri -</option>
    		<?php if($obj_state): ?>
    		    <?php foreach($obj_state as $row_state): ?>
    		    <option value="<?php echo $row_state->state_id; ?>" 
    		    <?= set_select('state',$row_state->state_id, ( !empty($state) && $state == $row_state->state_id ? TRUE : FALSE )); ?>><?= $row_state->state_title.' ('.$this->m_search_therapist->get_total_therapist_per_state($row_state->state_id).')'; ?></option>
    		    <?php endforeach; ?>
    		<?php endif; ?>
    		</select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-12 col-lg-4 offset-lg-4 col-md-10 offset-md-1">
            <select name="city" id="city" class="select-field form-control">
			<option value="">- Pilih Daerah -</option> 
			<?php if($obj_city_list): foreach($obj_city_list as $row_city): ?>
			<option value="<?= $row_city->city_id ?>" <?= $row_city->city_title ?> <?= set_select('city',$row_city->city_id, ( !empty($city_id) && $city_id == $row_city->city_id ? TRUE : FALSE )); ?>><?= $row_city->city_title.' ('.$this->m_search_therapist->get_total_therapist_per_city($row_city->city_id).')' ?></option>
			<?php endforeach; endif; ?>
		</select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-sm-12 col-lg-4 offset-lg-4 col-md-10 offset-md-1 text-right">
            <button type="submit" class="btn btn-block btn-info">Cari</button>
        </div>
    </div>
    </form>
    <hr />
    <div class="container">
    <?php if($obj_therapist): ?>
    <?php foreach($obj_therapist as $row_therapist):?>
    <div class="card flex-row flex-wrap" style="padding-bottom:.5rem !important; margin-bottom:3px;">
        <div class="card-header border-0">
            <img src="https://graph.facebook.com/<?= $row_therapist->therapist_fbid ?>/picture?type=large" alt="" style="width:200px; height:200px;">
        </div>
        <div class="card-block px-2">
            <h5 class="card-title"><?= ucwords(strtolower($row_therapist->therapist_fullname)) ?></h5>
            <p class="card-text" style="margin-top:-13px; font-size:13px;"><?= $row_therapist->city_title.", ".$row_therapist->state_title ?></p>
            <a href="javascript:void(0)" onclick="openWhatsapp(<?= $row_therapist->therapist_id.','.$this->input->get('fb_id').','.$this->input->get('state').','.$this->input->get('city') ?>)" class="btn btn-info">Klik untuk Whatsapp</a>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <p class="text-center">Sila pilih Negeri dan Daerah <br/><br/><br/> Sebarang pertanyaan.. boleh hubungi <br/><a target="_blank" href="http://wasap.my/0183954840/SupportUrutIConfident">0183954840</a></p>
    <?php endif;?>
    
    </div>
    <br/>
    <br/>
    <br/>
</div>


<div id="checkIsDoneTodayModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">HARAP MAAF...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>ANDA dibenarkan tempah 1 terapis sahaja 1 hari. Nak lebih? Jadi pengguna <a href="https://wasap.my/60183954840/Nak+jadi+premium+user">PREMIUM</a>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">XPE, TQ</button>
        <a class="btn btn-info" href="https://wasap.my/60183954840/Nak+jadi+premium+user">PREMIUM</a>
      </div>
    </div>
  </div>
</div>
<div style="text-align:center; margin-bottom:10vw; font-size:12px;">
    <hr/>
    <a href="http://blog.kutw4u.com" target="_blank">Blog</a> | 
    <a href="http://kutw4u.com" target="_blank">Join Terapis Urut I-Confident</a>
    <br/><br/>
    <br/>
    <img style="max-width:150px; margin-left:auto; margin-right:auto;" src="/assets/images/comp-logo.png">
    <p>Rich Pleasure Resources (SA0440565-T)<br><a href="mailto:richpleasure4u@gmail.com">richpleasure4u@gmail.com</a><br><a href="https://wasap.my/60183954840">018-3954840</a></p>
    
    <p>
                    Follow us on <br> (FB) <a href="https://www.facebook.com/rpmadayang">I-Confident</a>
        <br> (INSTA) <a href="https://www.instagram.com/kursusurutwanita">kursusurutwanita</a>
    
    </p>
</div>

<script type="text/javascript">
    function openWhatsapp(therapist_id,fb_id,state,city)
    {
        $.ajax({
            url:'/index.php/therapist/check_is_done_today',
            type: 'post',
            data: {'tid':therapist_id,'fb_id':fb_id},
            success:function(response)
            {
                var obj = JSON.parse(response);
                if(obj.is_done_today == 0)
                {
                    location.href="/index.php/therapist/contact?tid="+therapist_id+"&fb_id="+fb_id+"&state="+state+"&city="+city;
                }else 
                {
                    $('#checkIsDoneTodayModal').modal('show')
                }
            }
        });
        
    }
    function show_city(state_id)
    {
      $.ajax({
          url: '/index.php/search_therapist/get_city',
          type: 'post',
          data:'state='+state_id,
          success: function(city_response)
          {
                var $el = $("#city"); 
                $el.empty(); // remove old options
                var obj_city = {};
                obj_city = JSON.parse(city_response);
                
                $el.append($("<option></option>")
                     .attr("value", "").text("- Pilih -"));
                $.each(obj_city, function(key,value) {
                  $el.append($("<option></option>")
                     .attr("value", value).text(key));
                });
          }
      });  
    }
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>