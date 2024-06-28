<div class="content-sidebar">
  <div class="sidebar-wrap">
    <aside id="secondary" class="widget-area">
      <section id="block-3" class="widget widget_block">
        <div class="wp-block-group">
          <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
            <h2 class="wp-block-heading">Recent Posts</h2>
            <ul class="wp-block-latest-posts__list wp-block-latest-posts">
              @foreach($posts as $post)
              <li>
                <a class="wp-block-latest-posts__post-title" href="{{ route('post',$post->slug) }}">
                  {{ $post->title }}
                </a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </section>
    </aside>
  </div>
  <span class="close"></span>
</div>