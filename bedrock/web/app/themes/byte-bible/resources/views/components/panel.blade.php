<div class="card">
  <div class="card-body">
    @if($panel['heading']!=NULL)<h5 class="card-title">{{ $panel['heading'] }}</h5>@endif
    @foreach($panel['section'] as $cheet_item)
      @if($panel['heading']!=NULL) <p class="card-text">{{ $cheet_item['description'] }}</p>@endif
      @if($panel['heading']!=NULL) <pre><code>{{ $cheet_item['code'] }}</code></pre>@endif
    @endforeach


    {{--        <a href="#" class="card-link">Card link</a>--}}
    {{--        <a href="#" class="card-link">Another link</a>--}}
    {{--        <div class="bd-clipboard">--}}
    {{--          <button type="button" class="btn-clipboard">  <svg class="bi" role="img" aria-label="Copy"><use xlink:href="#clipboard"></use></svg></button>--}}
    {{--        </div>--}}
  </div>
</div>
