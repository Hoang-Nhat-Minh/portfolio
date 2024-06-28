@extends('frontend.layout.main')

@section('extra-css')
@endsection

@section('content')
<div class="card-inner blog blog-post animated active" id="card-blog-single">
  <div class="card-wrap">
    <div class="content blog-single">
      <div class="title">Blog Post</div>
      <div class="row border-line-v">
        <div class="col col-m-12 col-t-12 col-d-12">
          <div id="post-98"
            class="post-98 post type-post status-publish format-standard has-post-thumbnail hentry category-banking tag-code tag-html tag-plugin tag-wordpress">
            <div class="post-box single-post-text">
              <h1 class="h-title">{{ $post->name }}</h1> <!-- blog detail -->
              <div class="blog-detail"> <span class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y')
                  }}</span>
                <span class="cat-links">
                  <span class="category tag">{{ $post_category->name }}</span>
                </span>
              </div>
              <!-- blog image -->
              <div class="blog-image"> <img fetchpriority="high" width="800" height="375"
                  src="{{ Voyager::image($post->image) }}" class="attachment-full size-full wp-post-image"
                  alt="{{ $post->name }}" decoding="async" srcset="{{ Voyager::image($post->image) }}"
                  sizes="(max-width: 800px) 100vw, 800px" /></div> <!-- blog content -->
              <div class="blog-content">
                {!! $post->body !!}
              </div>
              <div class="post-text-bottom">
                <div class="social-share"><span>Share:</span>
                  @php
                  $shareUrl = urlencode(url()->current()) . '%26src%3Dsdkpreparse';
                  @endphp

                  <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                    class="share-btn share-btn-facebook" title="Share on Facebook" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>

                  <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="share-btn share-btn-twitter"
                    title="Share on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
  src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v20.0&appId=1098960451224710" nonce="mTuBpJ01">
</script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

@endsection