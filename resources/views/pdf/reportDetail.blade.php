<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kontingen</title>
    <style>
        /* Tambahkan gaya CSS untuk PDF */
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        .container {
            margin-top: 20px;
        }

        .card {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        h1,
        h3 {
            color: #333;
        }

        .row {
            margin-bottom: 10px;
        }

        .col-md-3 {
            font-weight: bold;
        }

        .col-md-9 {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Detail Kontingen: {{ $kontingen->name }}</h1>
        <p>Alamat: {{ $kontingen->address }}</p>
        <p>Telepon: {{ $kontingen->phone }}</p>
        <p>Email: {{ $kontingen->email }}</p>
        <p>Tanggal Pendirian: {{ $kontingen->tanggal_berdiri }}</p>
        <p>Total Atlet: {{ $kontingen->atlets->count() }}</p>
        <p>Total Official: {{ $kontingen->officials->count() }}</p>

        <!-- Add Official & Atlet Data Here (Example) -->
        <div class="container">
            <h3>Officials</h3>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontingen->officials as $official)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $official->name }}</td>
                            <td>{{ $official->gender }}</td>
                            <td>{{ $official->Jabatan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="container">
            <h3>Atlets</h3>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Tanggal Lahir</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontingen->atlets as $atlet)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $atlet->name }}</td>
                            <td>{{ $atlet->gender }}</td>
                            <td>{{ $atlet->birth_date }}</td>
                            <td>{{ $atlet->weight }}</td>
                            <td>{{ $atlet->height }}</td>
                            <td>{{ $atlet->category_id == 1 ? 'Tanding Putra' : ($atlet->category_id == 2 ? 'Tanding Putri' : 'Kategori tidak tersedia') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>

</html>
