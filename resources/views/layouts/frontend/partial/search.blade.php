<div class="widget-sidebar sidebar-search">
    <h5 class="sidebar-title">Search</h5>
    <div class="sidebar-content">
    <form method="GET" action="{{ route('search')}}">
        <div class="input-group">
          <input type="text" name="query" class="form-control" placeholder="Search for..." aria-label="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary btn-search" type="button">
              <span class="ion-android-search"></span>
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>
