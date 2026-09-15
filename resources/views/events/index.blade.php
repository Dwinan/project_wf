@extends('layouts.app')

@section('title', 'Daftar Event')

@section('content')
    <h2>Daftar Kegiatan (Contoh)</h2>

    <p><a href="{{ route('events.create') }}">+ Buat Event Baru</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($events as $event)
                <tr>
                    <td>{{ $event['id'] }}</td>
                    <td>{{ $event['title'] }}</td>
                    <td>{{ $event['date'] }}</td>
                    <td>{{ $event['location'] }}</td>
                    <td>
                        <a href="{{ route('events.show', $event['id']) }}">Detail</a> |
                        <a href="{{ route('events.edit', $event['id']) }}">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data event.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection