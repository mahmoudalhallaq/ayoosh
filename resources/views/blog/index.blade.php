<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ayoosh Blog</title>
    @include('blog.blog-layout.head')
</head>
<body>
@include('blog.blog-layout.header')
<div class="container-fluid">
    <main class="tm-main">
        <div class="row tm-row">
            @foreach($blog_articles as $blog_article)
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{route('blogs.article', $blog_article->id)}}" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="{{asset($blog_article->image)}}" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$blog_article->title}}</h2>
                    </a>
                    <p class="tm-pt-30">
                        {{$blog_article->text}}
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">{{$blog_article->CategoryName($blog_article->category)}}</span>
                        <span class="tm-color-primary">{{$blog_article->created_at}}</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>{{count($blog_article->comments)}} comments</span>
                        <span>by {{$blog_article->created_by}}</span>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="row tm-row tm-mt-100 tm-mb-75">
            <div class="tm-paging-wrapper">
                <span class="d-inline-block mr-3">Page</span>
                    {{$blog_articles->links()}}
            </div>
        </div>
        @include('blog.blog-layout.footer')
    </main>
</div>
<script src="{{asset ('assets/js/jquery.min.js')}}"></script>
<script src="{{asset ('assets/js/main.js')}}"></script>
<script>
    $('.pagination').parent('nav').addClass('tm-paging-nav d-inline-block');
    $('.pagination').children('li').removeClass('page-item');
    $('.pagination').children('li').addClass('tm-paging-item');
    $('.pagination').children().children().addClass('mb-2 tm-btn tm-paging-link');
</script>
</body>
</html>
