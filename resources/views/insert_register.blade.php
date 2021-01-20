<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<!-- Always force latest IE rendering engine or request Chrome Frame -->
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Laravel CRUD</title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href="/bootstrap4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
	<script src="/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="/bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

</head>

<body>
	
	<form action="{{url('register/proses-form')}}" method="GET">
		<div class="container">
			@if ($message = Session::get('success'))
			<div class="row mt-3">
				<div class="col-12">
					<div class="alert alert-info alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>{{ $message }}</strong>
					</div>
				</div>
			</div>
			@endif
			<div class="row mt-3">
				@csrf
				<div class="col-4 form-group">
					<label for="inputNIP">NIP Pegawai</label>
					<select id="inputNIP" name="id_pegawai" class="form-control  @error('id_pegawai') is-invalid @enderror">
						<option value="0">--Pilih NIP--</option>
						<option value="198308142002121003">198308142002121003</option>
						<option value="198405202002081001">198405202002081001</option>
						<option value="198502072002061002">198502072002061002</option>
						<option value="198001022002111004">198001022002111004</option>
					</select>
					@error('id_pegawai') <span class="invalid-feedback">Anda belum memilih !</span>@enderror
				</div>
				<div class="col-4 form-group">
					<label for="inputKodeSPT">Jenis SPT</label>
					<select id="inputKodeSPT" name="id_spt" class="form-control @error('id_spt') is-invalid @enderror">
						<option value="0">--Pilih Jenis SPT--</option>
						<option value="SPT01">SPT Tahunan PPh Badan</option>
						<option value="SPT02">SPT Tahunan PPh Orang Pribadi</option>
					</select>
					@error('id_spt') <span class="invalid-feedback">Anda belum memilih !</span>@enderror
				</div>
				<div class="col-4 form-group">
					<label for="inputReg">No Register</label>
					<input type="text" id="inputReg" name="no_register" class="form-control @error('no_register') is-invalid @enderror" placeholder="No Register" value="{{ old('no_register') }}">
					@error('no_register') <span class="invalid-feedback">No Register min. 8 karakter dan maks. 50 karakter</span>@enderror
				</div>
			</div>

			<div class="row">
				<div class="col-2">
					<label for="inputTglTerima">Tanggal Terima</label>
					<input type="text" name="tgl_terima" id="inputTglTerima" class="form-control datepicker" data-date-format="yyyy-mm-dd" style="text-align: center;">
				</div>

				<div class="col-2">
					<label for="inputJml">Jumlah SPT</label>
					<input type="text" name="jumlah_spt" id="inputJml" class="form-control @error('jumlah_spt') is-invalid @enderror">
					@error('jumlah_spt') <span class="invalid-feedback">Angka > 0 dan <= 200</span>@enderror

				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<label for="inputKeterangan">Keterangan</label>
					<textarea name="keterangan" id="inputKeterangan" row="5" class="form-control"></textarea>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col">
					<button type="submit" class="btn btn-primary mb-2">Simpan</button>
				</div>
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
	$('.datepicker').datepicker({
		weekStart: 1,
		daysOfWeekHighlighted: "6,0",
		autoclose: true,
		todayHighlight: true,
	});

	$('.datepicker').datepicker("setDate", new Date());
</script>

</body>
</html>