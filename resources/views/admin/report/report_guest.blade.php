<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <h2 style="text-align: center">Laporan Buku Tamu</h2>
    <p>
        Dari tanggal : {{ $_GET['from_date'] }} <br>
        Sampai tanggal : {{ $_GET['till_date'] }} <br>
    </p>

    <table style="width:100%">
        <tr>
            <th style="width: 5%">No</th>
            <th style="width: 20%">Nama</th>
            <th style="width: 25%">Alamat</th>
            <th style="width: 20%">No HP/WA</th>
            <th style="width: 30%">Keperluan</th>
        </tr>
        @foreach ($guests as $key => $value)
            <tr>
                <td style="text-align: center">{{ $loop->iteration }}</td>
                <td>{{ $value->name_guest }}</td>
                <td>{{ $value->address_guest }}</td>
                <td>{{ $value->telp_guest }}</td>
                <td>{{ $value->description_guest }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
