<div class="widget-sidebar widget-tags">
    <h5 class="sidebar-title">Tags</h5>
    <div class="sidebar-content">
      <ul>
          @foreach ($tags as $tag)
          <li>
            <a href="{{ route('tag.posts',$tag->slug)}}">{{ $tag->name }}</a>
              </li>
          @endforeach

      </ul>
    </div>
  </div>
