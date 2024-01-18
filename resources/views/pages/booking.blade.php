@extends('index')

@section('content')
    <section class="booking-container">
        <h1>Daftar Booking</h1>
        <div class="table-container">
            <table border="2">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Tanggal</td>
                        <td>Dokter</td>
                        <td>Jam</td>
                    </tr>
                </thead>
                <tbody>
                    @if (count($booking) === 0)
                        <tr>
                            <td colspan="5" style="text-align: center">Daftar booking kosong</td>
                        </tr>
                    @else
                        @foreach ($booking as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['date'] }}</td>
                                <td>{{ $item['doctor'] }}</td>
                                <td>{{ $item['time'] }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>
@endsection()
