{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Senarai Dun</div>
           <div class="card-body">
            <a class="btn btn-primary" href="{{ route('kod_dun.create') }}">Daftar</a>
           <table class="table">
               <thead>

                   <tr>
                       <th>Id</th>
                       <th>Kod Dun</th>
                       <th>Dun</th>
                       <th>Tarikh Cipta</th>
                       <th>Tarikh Kemaskini</th>
                       <th>Tindakan</th>
                   </tr>
                </thead>
                <tbody>
                    {{-- Looping Data --}}
                    @forelse ( $kod_dunArray as $kod_dun)
                    <tr>
                        <td>{{$kod_dun->id}}</td>
                        <td>{{$kod_dun->id_dun}}</td>
                        <td>{{$kod_dun->dun}}</td>
                        <td>{{$kod_dun->created_at}}</td>
                        <td>{{$kod_dun->updated_at}}</td>
                        <td>
                            <a href="{{route('kod_dun.edit', $kod_dun) }}">Kemaskini</a>

                            <form action="{{ route('kod_dun.destroy', $kod_dun)}}" method="POST"
                            onsubmit="return confirm('Adakah anda pasti untuk hapuskan data ini?');">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-link">Hapus</button>
                            </form>

                        </td>
                    </tr>
                    @empty

                   {{'Tiada Maklumat Dun'}}
                   @endforelse
                </tbody>
           </table>
        </div>
           <div class="card-footer"></div>
           @if(count($kod_dunArray)>0)
           {{-- Pagination button link --}}
           {{ $kod_dunArray->links() }}
           @endif
    </div>
       </div>
   </div>
@endsection
