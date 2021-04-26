{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Daftar Gelaran</div>
           <div class="card-body">

            <form action="{{route('kod_gelaran.update', $kod_gelaran)}}" method="POST" novalidate>
                @csrf
                @method('Put')
                    <div class="form-group">
                      <label for="id_gelaran">Kod gelaran</label>
                      <input type="text" class="form-control @error('id_gelaran') is-invalid
                      @enderror" id="id_gelaran" name="id_gelaran" value="{{ old('id_gelaran', $kod_gelaran->id_gelaran ?? null ) }}">

                      @error('id_gelaran')

                      <div class="invalid-feedback">{{ $message }} </div>

                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="gelaran">Nama gelaran</label>
                        <input type="text" class="form-control @error('gelaran') is-invalid
                        @enderror" name="gelaran" id="gelaran" placeholder="Sila masukkan nama gelaran"
                            value="{{ old('gelaran', $kod_gelaran->gelaran ?? null ) }}">

                            @error('gelaran')

                            <div class="invalid-feedback">{{ $message }} </div>

                            @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Kemaskini</button>
            </form>
        </div>
           <div class="card-footer"></div>
       </div>
   </div>
@endsection
