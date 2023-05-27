
<div class='container-fluid'>
  <div class='row'>
    <header class='col col-sm-4 col-md-3 col-xl-2  m-0 p-0 position-fixed'>
      @include('partials.main-menu')
    </header>
    <div class='col col-sm-4 col-md-3 col-xl-2 m-0 m-0'></div>
    <div class='co col-sm-8 col-md-9 col-xl-10'>
    <main class='container-fluid'>
      <div class='row'>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Username" aria-label="Username">
          <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <button type="button" class="btn btn-primary">Primary</button>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
        @yield('content')
      </div>
    </main>
  </div>
  </div>
 </div>




