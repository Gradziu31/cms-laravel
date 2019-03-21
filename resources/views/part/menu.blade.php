<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    @if(isset($pages) && !empty($pages))
      @foreach($pages as $page)
      @if($page->parent_id == NULL)
      <li class="nav-item dropdown">
        <a href="/{{$page->slug}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="@if(App\Pages::find($page->id)->children->count() != 0) nav-link dropdown-toggle @else nav-link @endif">
          {{$page->title}}
        </a>
        @if(App\Pages::find($page->id)->children->count() != 0)
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach(App\Pages::find($page->id)->children as $child)
                  <a class="dropdown-item" href="/{{$child->parent->slug}}/{{$child->slug}}">{{$child->title}}</a>
              @endforeach
          </div>
        @endif
    </li>
      @endif
      @endforeach
      @endif
      <li><a href="/blog">blog</a></li>
    </ul>
  </div>
  <a href="/admin"><button class="btn btn-primary">ADMIN</button></a>
</nav>
</div>

