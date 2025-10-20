{{-- students/index.blade.php --}}
@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h2>Daftar Mahasiswa</h2>

    <x-alert type="success" message="Daftar Mahasiswa Berhasil dimuat."></x-alert>

    @foreach ($students as $student)
        @include('partials.student-card', ['student' => $student])
    @endforeach
@endsection
