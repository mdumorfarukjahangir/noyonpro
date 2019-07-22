<div class="widget-sidebar">
    <h5 class="sidebar-title">Recent Post</h5>
    <div class="sidebar-content">
      <ul class="list-sidebar">

            @foreach ($resentposts as $resentpost)

            <li>
              <a href="{{ route('post.details',$resentpost->slug)}}">{{ $resentpost->title}}</a>
            </li>

            @endforeach

      </ul>
    </div>
  </div>
