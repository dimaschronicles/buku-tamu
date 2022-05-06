<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        h1 {
            font-size: 13px;
            text-align: center;
            margin-bottom: 12px;
        }

        body {
            font-size: 11px;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <h1><b>Laporan Buku Tamu</b></h1>
    <table>
        <tr>
            <td>Dari Tanggal</td>
            <td>:</td>
            <td>{{ $tanggal_mulai }}</td>
        </tr>
        <tr>
            <td>Sampai Tanggal</td>
            <td>:</td>
            <td>{{ $tanggal_sampai }}</td>
        </tr>
    </table>
    <br>
    <table class="table table-bordered">
        <tr>
            <td style="width: 3%">No</td>
            <td style="width: 22%">Nama</td>
            <td style="width: 15%">Email</td>
            <td style="width: 10%">No HP</td>
            <td style="width: 20%">Alamat</td>
            <td style="width: 30%">Keperluan</td>
        </tr>
        @foreach($tamu as $t)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $t->nama }}</td>
            <td>{{ $t->email }}</td>
            <td>{{ $t->no_hp }}</td>
            <td>{{ $t->alamat }}</td>
            <td>{{ $t->keperluan }}</td>
        </tr>
        @endforeach
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>