<div class="card">
    <h3>{{ $data['nama'] }}</h3>
    <p><strong>Usia:</strong> {{ $data['usia'] }} tahun</p>
    <p><strong>Kota:</strong> {{ $data['kota'] }}</p>
    <p><strong>Kejadian:</strong> {{ $data['kejadian'] }}</p>

    @if($data['usia'] > 35)
        <p>Status: <span style="color:red;">Perlu Perlindungan Khusus</span></p>
    @else
        <p>Status: <span style="color:green;">Korban Umum</span></p>
    @endif
</div>
