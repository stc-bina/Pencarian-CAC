<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>

	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
		table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #66ccff;
            color: black;
        }
		td {
			background-color: #e0e0eb;
			color: black;
		}
	</style>

	<h2><a href="https://"></a></h2>
	<h3>Cari Data</h3>


	<form action="/pencarian/cari" method="GET">
		<p>
			<label>Plat Mobil  : </label>
			<input type="text" name="cari" placeholder="B-1111-PPD" value="{{ old('cari') }}">
			<input type="submit" value="CARI">
		</p>
	</form>
	<form action="/pencarian/carirangka" method="GET">
		<p>
			<label>No Rangka : </label>
			<input type="text" name="carirangka" placeholder="578ZJ789LL56237" value="{{ old('carirangka') }}">
			<input type="submit" value="CARI">
		</p>
	</form>
	<form action="/pencarian/carimesin" method="GET">
		<p>
			<label>No Mesin   : </label>
			<input type="text" name="carimesin" placeholder="MK145678LO2478" value="{{ old('carimesin') }}">
			<input type="submit" value="CARI">
		</p>
	</form>
	<form action="/pencarian/caripolis" method="GET">
		<p>
			<label>No Polis  : </label>
            <input type="text" size="1" placeholder="00">
            <label>-M </label>
			<input type="text" name="caripolis" placeholder="0012345" size='8' value="{{ old('caripolis') }}">
            <label> / </label>
            <input type="text" size="1" placeholder="0">
            <label> / </label>
            <input type="text" size="1" placeholder="0">
			<input type="submit" value="CARI">
		</p>

	</form>

	<br/>

	<table border="1">
		<tr>
			<th>Plat Mobil</th>
            <th>Nama Tertanggung</th>
            <th>Nomor Polis</th>
            <th>Mulai</th>
            <th>Akhir</th>
			<th>Nomor Rangka</th>
			<th>Nomor Mesin</th>
            <th>Curr</th>
            <th>Nilai Premi</th>
			<th>Status Bayar</th>
		</tr>
		@foreach($dbmotor as $p)
		<tr>
			<td>{{ $p->nopolisi }}</td>
			<td>{{ $p->insrd_pr_nm }}</td>
			<td>{{ $p->pol_num }}</td>
			<td>{{ $p->awal }}</td>
            <td>{{ $p->akhir }}</td>
            <td>{{ $p->chassis_num }}</td>
            <td>{{ $p->engine_num }}</td>
            <td>{{ $p->curr }}</td>
            <td>{{ $p->inst_amt }}</td>
			<td>{{ $p->Ket }}</td>
		</tr>
		@endforeach
	</table>

	<br/>
	Halaman : {{ $dbmotor->currentPage() }} <br/>
	Jumlah Data : {{ $dbmotor->total() }} <br/>
	Data Per Halaman : {{ $dbmotor->perPage() }} <br/>


	{{ $dbmotor->links() }}


</body>
</html>
