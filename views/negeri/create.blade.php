{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dalam layout --}}
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">Daftar negeri</div>
            <div class="card-body">

                <form action="{{ route('negeri.store') }}" method="POST" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="nama">Nama negeri</label>
                        <input type="text" class="form-control @error('nama') is-invalid
                        @enderror" name="nama" id="nama" placeholder="Sila masukkan nama negeri"
                            value="{{ old('nama') }}">

                            @error('nama')

                            <div class="invalid-feedback">{{ $message }} </div>

                            @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Daftar</button>

                </form>

            </div>
            <div class="card-footer"></div>
        </div>
    </div>

@endsection
