{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Senarai agensibil</div>
           <div class="card-body">
            <a class="btn btn-primary" href="{{ route('kod_agensibil.create') }}">Daftar</a>
           <table class="table">
               <thead>

                   <tr>
                       <th>Id</th>
                       <th>Kod agensibil</th>
                       <th>agensibil</th>
                       <th>Tarikh Cipta</th>
                       <th>Tarikh Kemaskini</th>
                       <th>Tindakan</th>
                   </tr>
                </thead>
                <tbody>
                    {{-- Looping Data --}}
                    @forelse ( $kod_agensibilArray as $kod_agensibil)
                    <tr>
                        <td>{{$kod_agensibil->id}}</td>
                        <td>{{$kod_agensibil->id_agensibil}}</td>
                        <td>{{$kod_agensibil->agensibil}}</td>
                        <td>{{$kod_agensibil->created_at}}</td>
                        <td>{{$kod_agensibil->updated_at}}</td>
                        <td>
                            <a href="{{route('kod_agensibil.edit', $kod_agensibil) }}">Kemaskini</a>

                            <form action="{{ route('kod_agensibil.destroy', $kod_agensibil)}}" method="POST"
                            onsubmit="return confirm('Adakah anda pasti untuk hapuskan data ini?');">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-link">Hapus</button>
                            </form>

                        </td>
                    </tr>
                    @empty

                   {{'Tiada Maklumat agensibil'}}
                   @endforelse
                </tbody>
           </table>
        </div>
           <div class="card-footer"></div>
           @if(count($kod_agensibilArray)>0)
           {{-- Pagination button link --}}
           {{ $kod_agensibilArray->links() }}
           @endif
    </div>
       </div>
   </div>
@endsection
