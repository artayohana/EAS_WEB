<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF - Data Buku</title>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table td, table th {
            border: 2px solid black;
            padding: 8px;
        }

        table tr:nth-child(even){background-color: #f2f2f2;}

        table tr:hover {background-color: #ddd;}

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D; 
            color: white;
        }
    </style>
</head>
<body>
    <h1>Data Perpustakaan Tobena</h1>
    <table>
        <!-- JUDUL TABEL -->
        <tr class="bg-warning">
            <th>No.</th>
            <th>ISBN</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Cetakan-ke</th>
            <th>Jumlah Halaman</th>
        </tr>
        <tbody>
            <?php $angka = 1; ?>
            @foreach($data as $dt)
                <tr>
                    <td>{{ $angka }}</td>
                    <td>{{ $dt->isbn}} </td>
                    <td>{{ $dt->judul_buku }}</td>
                    <td>{{ $dt->pengarang }}</td>
                    <td>{{ $dt->penerbit }}</td> 
                    <td>{{ $dt->tahun_terbit }}</td> 
                    <td>{{ $dt->cetakan_ke }}</td> 
                    <td>{{ $dt->jumlah_halaman }}</td> 
                </tr>
            <?php $angka++; ?>
            @endforeach
        </tbody>
    </table>
</body>
</html>
