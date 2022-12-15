


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @if (Auth::user() == null)
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">login</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" ">{{Auth::user()->name}}</a>
        </li>
        @endif
       
        <li class="nav-item">
          <a class="nav-link active" href="/lead">Rank</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/change">Setting</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> --}}
        @if (Auth::user() == null)
        {{-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">login</a>
        </li> --}}
        @else
        <li class="nav-item">
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="nav-link active" aria-current="page" >Logout</button>
          </form>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>