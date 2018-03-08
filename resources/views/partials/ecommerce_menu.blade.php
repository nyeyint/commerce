{{--

If you confused how this file work, please visit https://voyager.readme.io/docs/menus

--}}

<ul class="nav">
    @foreach($items as $menu_item)
        <li class="{{(empty(Request::segments()) && $menu_item->url == '/') ? 'active' : (session('segment') == substr($menu_item->url, 1)) ? 'active' : '' }}">
          <a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>
