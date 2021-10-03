
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @php 
                $posts = \App\Models\Post::get();
            @endphp
            @foreach($posts as $post)
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">{{$post->post_name}}</h2>
                    <h3 class="post-subtitle">{{$post->post_desc}}</h3>
                </a>
                <p class="post-meta">
                    Posted by: 
                    <a href="/">Admin</a><br>
                    Create Time : {{$post->created_at}}
                </p>
            </div>
            @endforeach
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>