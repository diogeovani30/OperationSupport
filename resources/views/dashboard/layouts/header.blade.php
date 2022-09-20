<style type="text/css">
  .navbar-dark {
  background-color: #3b5998;
  font-size:18px;
  }
  .nav-link-1 {
  background-color: #3b5998;
  font-size:18px;
  }
</style>

<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Operation Support | EAL</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-white w-100" type="text" placeholder="Search" aria-label="Search">
  <form action="/posts">

    @if (request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
      @endif

      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
      @endif

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link-1 px-3  border-0"><span data-feather="log-out"></span>Logout</a>
        </button>
      </form>
    </div>
  </div>
</header>