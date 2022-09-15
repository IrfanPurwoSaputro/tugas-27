@extends('layout.main')

@section('content')
<table class="table table-striped">
<thead>
    <tr>
    <th scope="col">Judul Lagu</th>
    <th scope="col">Penyanyi</th>
    </tr>
</thead>
<tbody>
@foreach($paginate as $data)
    <tr>
        <td>{{ $data->judul_lagu }}</td>
        <td>{{ $data->penyanyi->nama_penyanyi }}</td>
    </tr>
@endforeach
</tbody>
</table>
@endsection
