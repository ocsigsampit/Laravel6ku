<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<!-- Always force latest IE rendering engine or request Chrome Frame -->
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>The Title</title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href="/bootstrap4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="/bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
	<div class="container">

		<div class="row mt-3">
			<div class="col-12">
				<a href="{{ route('register.create') }}" class="btn btn-primary">Tambah</a>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-12">
				<table class="table table-striped table-bordered table-sm">
					<thead>
						<tr>
							<th class='text-center'>No</th>
							<th class='text-center'>NIP Pegawai</th>
							<th class='text-center'>Jenis SPT</th>
							<th class='text-center'>No Register</th>
							<th class='text-center'>Tgl Terima</th>
						</tr>
					</thead>
					<tbody>
						@forelse($registers as $key => $r)
						<tr>
							<td class='text-center'>{{ $key + 1 }}</td>
							<td class='text-center'>{{ $r->id_pegawai }}</td>
							<td class='text-left'>{{ $r->jenis_spt }}</td>
							<td class='text-left'>{{ $r->no_register }}</td>
							<td class='text-center'>{{ $r->tgl_terima }}</td>
						</tr>
						@empty
						<tr>
							<td>Tidak ada data</td>
						</tr>
						@endforelse
					</tbody>
				</table>

			</div>
		</div>

	</div>

</body>
</html>