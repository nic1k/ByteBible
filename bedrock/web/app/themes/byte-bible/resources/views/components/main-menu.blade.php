<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark vh-100">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    <span class="fs-4">Sidebar</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column ">
    @foreach ($main_categories as $item)
      <li class="nav-item">
        <a href="#" class="nav-link" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          {{ $item }}
        </a>
      </li>
    @endforeach
  </ul>
  <hr>
  <ul class="nav nav-pills flex-column ">
    @foreach ($cheetsheet as $item)
      <li class="nav-item">
        <a href="#" class="nav-link" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          {{ $item->post_title }}
        </a>
      </li>
    @endforeach

  </ul>

{{--  <div class="dropdown">--}}
{{--    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">--}}
{{--      <strong>mdo</strong>--}}
{{--    </a>--}}
{{--    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">--}}
{{--      <li><a class="dropdown-item" href="#">New project...</a></li>--}}
{{--      <li><a class="dropdown-item" href="#">Settings</a></li>--}}
{{--      <li><a class="dropdown-item" href="#">Profile</a></li>--}}
{{--      <li><hr class="dropdown-divider"></li>--}}
{{--      <li><a class="dropdown-item" href="#">Sign out</a></li>--}}
{{--    </ul>--}}
{{--  </div>--}}
</div>
