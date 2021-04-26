{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Daftar Agensibil</div>
           <div class="card-body">

            <form action="{{route('kod_agensibil.update', $kod_agensibil)}}" method="POST" novalidate>
                @csrf
                @method('Put')
                    <div class="form-group">
                      <label for="id_agensibil">Kod Agensibil</label>
                      <input type="text" class="form-control @error('id_agensibil') is-invalid
                      @enderror" id="id_agensibil" name="id_agensibil" value="{{ old('id_agensibil', $kod_agensibil->id_agensibil ?? null ) }}">

                      @error('id_agensibil')

                      <div class="invalid-feedback">{{ $message }} </div>

                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="agensibil">Nama Agensibil</label>
                        <input type="text" class="form-control @error('agensibil') is-invalid
                        @enderror" name="agensibil" id="agensibil" placeholder="Sila masukkan nama agensibil"
                            value="{{ old('agensibil', $kod_agensibil->agensibil ?? null ) }}">

                            @error('agensibil')

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
