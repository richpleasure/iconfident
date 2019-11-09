<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="http://admin.i-confident.com/assets/css/material-dashboard.css?v=2.1.1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>
			I-Confident.com - Borang Pendaftaran
		</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
		<link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
		
		<!-- CSS Files -->
		<link href=".http://admin.i-confident.com/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
		<style type="text/css">
			.logo
			{
			width: 80px;
			height: auto;
			}
			body 
			{
			background:url(
			data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAATklEQVQoU2NkYGAwZmBgOMuAACA+CKCIMSIpADGRNaEYgKwQ3WQUjTCF6CYhWw2WAynEpgjmIpg7jUlSiM0TWK2GWUOUZ7ApxggeogIcABHJFtftKVfJAAAAAElFTkSuQmCC
			) repeat;
			}
		</style>
	</head>
	
	<body class=""> 
		<div class="wrapper ">
			<div class="content">
				
				
				<div class="container-fluid">
					<div class="row">
						<div class="offset-md-3 col-md-6">
							<div class="card">
								<div class="card-header card-header-primary">
									<div class="row">
										<div class="col-md-3 col-sm-2 col-xs-2 col-lg-2">
											<img class="logo" src="/assets/images/I_confident_logo_16_May_2019.png" />
										</div>
										<div class="col-md-9 col-sm-10 col-xs-10 col-lg-10">
											<h4 class="card-title">Kursus Urutan Tradisional Wanita</h4>
											<p class="card-category">Borang Pendaftaran</p>
										</div>
									</div>
								</div>
								<div class="card-body">
									<form method="post" action="/register/submit">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">Nama Penuh (Mengikut IC) *</label>
													<input minlength="5" value="<?= $this->input->post('full_name') ?>" required type="text" name="full_name" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">No K/P *</label>
													<input minlength="5" value="<?= $this->input->post('ic_number') ?>"  required type="text" name="ic_number" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">Tarikh Lahir *</label>
													<input required type="date" class="form-control" value="<?= $this->input->post('dob') ?>"  name="dob">
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">Emel (Jika Ada)</label>
													<input name="user_email" value="<?= $this->input->post('user_email') ?>"  type="email" class="form-control">
												</div>
											</div>
											
											
										</div>
										
										<div class="row">
											
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">No Tel (Boleh Whatsapp) *</label>
													<input required name="phone_no" value="<?= $this->input->post('phone_no') ?>"  type="text" class="form-control">
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">No Tel Kecemasan (Suami/Isteri/Ibu/Bapa) *</label>
													<input required name="phone_no_alt" value="<?= $this->input->post('phone_no_alt') ?>"  type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">              
											
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">Tarikh/Lokasi Kursus Urut*</label>
													<select class="form-control" name="course_id">
														<option value="">- Pilih - </option>
														<?php if($obj_course_list): ?>
															<?php foreach($obj_course_list as $row_register): ?>
															<option <?= ($this->input->get('course_id')==$row_register->course_id || $this->input->post('course_id')==$row_register->course_id) ? 'selected="selected"' : '' ?> value="<?= $row_register->course_id ?>" <?= $this->input->post('course_id')==$row_register->course_id ? 'selected="selected"' : '' ?>><?= $row_register->course_district.' - '.display_event_date_list($row_register->course_start_date,$row_register->course_end_date)?></option>
															<?php endforeach; ?>
														<?php endif; ?>
													</select>
													<!-- <input required type="date" class="form-control" value="<?= $this->input->post('course_date') ?>"  name="course_date"> -->
												</div>
											</div> 
											<div class="col-md-6">
												<div class="form-group">
													<label class="bmd-label-floating">Anda Pernah Mengikuti Kursus Urut Sebelum Ini?</label>
													<div>
														<div class="form-check form-check-inline">
															<input required class="form-check-input" type="radio" name="kursus_urut_sebelum_ini" id="inlineRadio1" <?= $this->input->post('kursus_urut_sebelum_ini')=='ya' ? 'checked="checked"' : '' ?>  value="ya">
															<label class="form-check-label" for="inlineRadio1">Ya</label>
														</div>
														<div class="form-check form-check-inline">
															<input required <?= $this->input->post('kursus_urut_sebelum_ini')=='tidak' ? 'checked="checked"' : '' ?>  class="form-check-input" type="radio" name="kursus_urut_sebelum_ini" id="inlineRadio2" value="tidak">
															<label class="form-check-label" for="inlineRadio2">Tidak</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="bmd-label-floating">Adakah anda pernah mengalami gangguan mistik sebelum ini? </label>
													<div>
													<div class="form-check form-check-inline">
												<input required class="form-check-input" <?= $this->input->post('gangguan_mistik')=='ya' ? 'checked="checked"' : '' ?>  type="radio" name="gangguan_mistik" id="inlineRadio3" value="ya">
												<label class="form-check-label" for="inlineRadio1">Ya</label>
												</div>
												<div class="form-check form-check-inline">
												<input <?= $this->input->post('gangguan_mistik')=='tidak' ? 'checked="checked"' : '' ?> required class="form-check-input" type="radio" name="gangguan_mistik" id="inlineRadio4" value="tidak">
												<label class="form-check-label" for="inlineRadio2">Tidak</label>
												</div>
												</div>
												</div>
												</div>
												</div>
												<div class="row">
												<div class="col-md-12">
												<div class="form-group">
												<label class="bmd-label-floating">Kerjaya Sekarang Ini *</label>
												<input required name="current_career" value="<?= $this->input->post('current_career') ?>" type="text" class="form-control">
												</div>
												</div>
												</div>
												<div class="row">
												<div class="col-md-12">
												<div class="form-group">
												<label class="bmd-label-floating">Kenapa anda berminat nak sertai kursus ini? *</label>
												<input required  name="why_interested" value="<?= $this->input->post('why_interested') ?>" type="text" class="form-control">
												</div>
												</div>
												</div>
												<div class="row">
												<div class="col-md-12">
												<div class="form-group">
												<label class="bmd-label-floating">Negeri (Tempat Menetap) *</label>
												<select required name="location_lived" class="form-control">
												<option value="">- Pilih - </option>
												<option <?= $this->input->post('location_lived')=='selangor' ? 'selected="selected"' : '' ?> value="selangor">Selangor</option>
												<option <?= $this->input->post('location_lived')=='johor' ? 'selected="selected"' : '' ?> value="johor">Johor</option>
												<option <?= $this->input->post('location_lived')=='sabah' ? 'selected="selected"' : '' ?> value="sabah">Sabah</option>
												<option <?= $this->input->post('location_lived')=='sarawak' ? 'selected="selected"' : '' ?> value="sarawak">Sarawak</option>
												<option <?= $this->input->post('location_lived')=='kedah' ? 'selected="selected"' : '' ?> value="kedah">Kedah</option>
												<option <?= $this->input->post('location_lived')=='k.lumpur' ? 'selected="selected"' : '' ?> value="k.lumpur">Kuala Lumpur</option>
												<option <?= $this->input->post('location_lived')=='p.pinang' ? 'selected="selected"' : '' ?> value="p.pinang">Pulau Pinang</option>
												<option <?= $this->input->post('location_lived')=='kelantan' ? 'selected="selected"' : '' ?> value="kelantan">Kelantan</option>
												<option <?= $this->input->post('location_lived')=='pahang' ? 'selected="selected"' : '' ?> value="pahang">Pahang</option>
												<option <?= $this->input->post('location_lived')=='terengganu' ? 'selected="selected"' : '' ?> value="terengganu">Terengganu</option>
												<option <?= $this->input->post('location_lived')=='n.sembilan' ? 'selected="selected"' : '' ?> value="n.sembilan">Negeri Sembilan</option>
												<option <?= $this->input->post('location_lived')=='melaka' ? 'selected="selected"' : '' ?> value="melaka">Melaka</option>
												<option <?= $this->input->post('location_lived')=='perlis' ? 'selected="selected"' : '' ?> value="perlis">Perlis</option>
												<option <?= $this->input->post('location_lived')=='labuan' ? 'selected="selected"' : '' ?> value="labuan">Labuan</option>
												<option <?= $this->input->post('location_lived')=='putrajaya' ? 'selected="selected"' : '' ?> value="putrajaya">Putrajaya</option>
												<option <?= $this->input->post('location_lived')=='perak' ? 'selected="selected"' : '' ?> value="perak">Perak</option>
												<option <?= $this->input->post('location_lived')=='brunei' ? 'selected="selected"' : '' ?> value="brunei">Brunei</option>
												<option <?= $this->input->post('location_lived')=='singapore' ? 'selected="selected"' : '' ?> value="singapore">Singapore</option>
												<option <?= $this->input->post('location_lived')=='indonesia' ? 'selected="selected"' : '' ?> value="singapore">Indonesia</option>
												</select>
												</div>
												</div>
												</div>
												<div class="row">
												<div class="col-md-12">
												<div class="form-group">
												<label class="bmd-label-floating">Dari mana anda tahu tentang kursus ini? *</label>
												<div>
												<div class="form-check">
												<input <?= $this->input->post('from_where')=='facebook' ? 'checked="checked"' : '' ?> required class="form-check-input" type="radio" name="from_where" id="inlineRadio4" value="facebook">
												<label class="form-check-label" for="inlineRadio1">Facebook</label>
												</div>
												<div class="form-check">
												<input <?= $this->input->post('from_where')=='instagram' ? 'checked="checked"' : '' ?>  required class="form-check-input" type="radio" name="from_where" id="inlineRadio5" value="instagram">
												<label class="form-check-label" for="inlineRadio2">Instagram</label>
												</div>
												<div class="form-check">
												<input  <?= $this->input->post('from_where')=='blog' ? 'checked="checked"' : '' ?> required class="form-check-input" type="radio" name="from_where" id="inlineRadio6" value="blog">
												<label class="form-check-label" for="inlineRadio2">Blog</label>
												</div>
												<div class="form-check">
												<input <?= $this->input->post('from_where')=='google' ? 'checked="checked"' : '' ?>  required class="form-check-input" type="radio" name="from_where" id="inlineRadio7" value="google">
												<label class="form-check-label" for="inlineRadio2">Google</label>
												</div>
												<div class="form-check">
												<input <?= $this->input->post('from_where')=='kawan_kawan' ? 'checked="checked"' : '' ?>  required class="form-check-input" type="radio" name="from_where" id="inlineRadio8" value="kawan_kawan">
												<label class="form-check-label" for="inlineRadio2">Kawan-kawan</label>
												</div>
												</div>
												</div>
												</div>
												</div>
												<button type="submit" class="btn btn-info btn-sm pull-right">Hantar Permohonan</button>
												<div class="clearfix"></div>
												</form>
												</div>
												</div>
												</div>
												
												</div>
												</div>
												</div>
												</div>
												
												<script src="https://www.eyecon.ro/bootstrap-datepicker/js/jquery.js"></script>
												</script>
												</body>
												
												</html>
																								