{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Daftar negeri</div>
           <div class="card-body">

            <form action="{{route('negeri.update', $negeri)}}" method="POST" novalidate>
                @csrf
                @method('Put')
                    <div class="form-group">
                      <label for="nama">Nama negeri</label>
                      <input type="text" class="form-control @error('nama') is-invalid
                      @enderror" id="nama" name="nama" value="{{ old('nama', $negeri->nama ?? null ) }}">

                      @error('nama')

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
