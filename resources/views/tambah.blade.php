@extends('layout.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Lagu
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('store') }}" id="myForm">
                @csrf
                    <div class="form-group">
                        <label for="judul_lagu">Judul Lagu</label>
                        <input type="text" name="judul_lagu" class="form-control" id="judul_lagu" aria-describedby="judul_lagu" >
                    </div>
                    <div class="form-group">
                        <label for="penyanyi">Penyanyi</label>
                        <select class="form-control" name="penyanyi" id="penyanyi">
                            @foreach($penyanyi as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_penyanyi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2 ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection