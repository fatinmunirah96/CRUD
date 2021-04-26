{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dalam layout --}}
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">Daftar Dun</div>
            <div class="card-body">

                <form action="{{ route('kod_dun.store') }}" method="POST" novalidate>
                    @csrf


                    <div class="form-group">
                        <label for="id_dun">{{ __('Kod Dun') }}</label>
                        <input type="text" class="form-control @error('id_dun') is-invalid
                        @enderror" name="id_dun" id="id_dun" placeholder="Sila masukkan kod dun"
                            value="{{ old('id_dun') }}">

                            @error('id_dun')

                            <div class="invalid-feedback">{{ $message }} </div>

                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="dun">{{ __('Nama Dun') }}</label>
                        <input type="text" class="form-control @error('dun') is-invalid
                        @enderror" name="dun" id="dun" placeholder="Sila masukkan nama dun"
                            value="{{ old('dun') }}">

                            @error('dun')

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
