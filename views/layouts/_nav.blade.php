      {{-- Navbar --}}
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
             <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                 <ul class="navbar-nav">
                   <li class="nav-item active">
                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('negeri.index') }}">Negeri</a>
                 </li>
                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('kod_gelaran.index') }}">Gelaran</a>
                 </li>
                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('kod_parlimen.index') }}">Parlimen</a>
                 </li>
                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('kod_dun.index') }}">Dun</a>
                 </li>
                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('kod_bangsa.index') }}">Bangsa</a>
                 </li>
                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('kod_agensibil.index') }}">Agensi</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Dropdown link
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                       </div>
                 {{-- <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none"> --}}
                     {{-- @csrf --}}
                 {{-- </form> --}}
             </li>
         </ul>

     </div>
     {{-- <span class="float-right text-light">{{ Auth::user()->name }}</span> --}}
 </div>
 </nav>
