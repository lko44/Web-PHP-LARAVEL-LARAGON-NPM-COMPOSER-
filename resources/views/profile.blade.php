<!-- <!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class = card>

</body>
</html> -->
<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
        <h1>Profil Diri</h1>
    <p>Nama: {{ $nama ?? 'Enriko Raina Patasa' }}</p>
    <p>Kelas: {{ $kelas ?? 'X PPLG 1' }}</p>
    <p>Sekolah: {{ $sekolah ?? 'SMK Bisa Hebat' }}</p>
</x-layout>


