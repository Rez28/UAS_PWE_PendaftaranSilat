<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }

        .date {
            text-align: right;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="date">
        Tanggal: {{ now()->format('d-m-Y H:i') }}
    </div>
    <h2>Daftar Kontingen</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kontingen</th>
                <th>Alamat</th>
                <th>Total Official</th>
                <th>Total Atlet</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kontingen as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->officials->count() }}</td>
                    <td>{{ $data->atlets->count() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
