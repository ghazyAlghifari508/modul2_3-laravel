{{-- partials/student-card.blade.php --}}
<div class="card">
    <h3>{{ $student['name'] }}</h3>
    <p><strong>Jurusan:</strong>{{ $student['major'] }}</p>
    <p><strong>Umun:</strong>{{ $student['age'] }} tahun</p>

    @if ($student['age'] >= 22)
        <p>Status: <span style="color:green;">senior</span></p>
    @else
        <p>Status: <span style="color:blue;">Junior</span></p>
    @endif

    <h4>Mata Kullah:</h4>
    @forelse($student['courses'] as $course)
        <span class="course">{{ $course }}</span>
    @empty
        <p>Tidak ada mata kullah terdaftar.</p>
    @endforelse
</div>
