<!DOCTYPE html>
<html>
<head>
    <title>Laporan Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center; /* Untuk menyelaraskan teks ke tengah secara horizontal */
        }
        .date {
            text-align: right; /* Menyelaraskan tanggal ke kanan */
            margin-bottom: 20px; /* Jarak di bawah tanggal */
        }

    </style>
</head>
<body>
    <div class="date">
        Tanggal: {{ now()->format('d-m-Y H:i') }} <!-- Menampilkan tanggal dan waktu saat ini -->
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
    