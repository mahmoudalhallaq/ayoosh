<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$get_article->title}}</title>
    @include('blog.blog-layout.head')
</head>
<body>
@include('blog.blog-layout.header')
<div class="container-fluid">
    <main class="tm-main">
        <div id="alert_model">
        </div>
        <div class="row tm-row">
            <div class="col-10">
                <hr class="tm-hr-primary tm-mb-55">
                <img width="50%" class="tm-mb-40" src="{{ asset($get_article->image)}}"/>
            </div>
            <div class="col-2">
                <a href="{{route('blogs.update_page',$get_article->id)}}"
                   class="font-weight-bold text-light btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen"
                         viewBox="0 0 16 16">
                        <path
                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                    </svg>
                    Edit article
                </a>
            </div>
        </div>
        <div class="row tm-row">
            <div class="col-lg-12 tm-post-col">
                <div class="tm-post-full">
                    <div class="mb-4">
                        <h2 class="pt-2 tm-color-primary tm-post-title">{{$get_article->title}}</h2>
                        <p class="tm-mb-40">{{$get_article->created_at}} posted by {{$get_article->created_by}}</p>
                        <p>
                            {{$get_article->text}}
                        </p>
                        <span
                            class="d-block text-right tm-color-primary">{{$get_article->CategoryName($get_article->category)}}</span>
                    </div>

                    <!-- Comments -->
                    <div>
                        <h2 class="tm-color-primary tm-post-title">{{count($get_article->comments)}} Comments</h2>
                        <hr class="tm-hr-primary tm-mb-45">
                        <div id="comment_section">
                            @foreach($get_article->comments as $comment)
                                <div class="tm-comment tm-mb-45">
                                    <figure class="tm-comment-figure">
                                        <figcaption class="tm-color-primary text-center">{{$comment->name}}</figcaption>
                                    </figure>
                                    <div>
                                        <p>
                                            {{$comment->comment}}
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <span class="tm-color-primary">{{$comment->created_at}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <form method="post" id="add_comment" class="mb-5 tm-comment-form">
                            @csrf
                            <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                            <div class="mb-4">
                                <input class="form-control" name="name" placeholder="Your name" type="text">
                            </div>
                            <div class="mb-4">
                                <input class="form-control" name="email" placeholder="Your email" type="text">
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" name="comment" rows="6"></textarea>
                            </div>
                            <div class="text-right">
                                <button class="tm-btn tm-btn-primary tm-btn-small">Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('blog.blog-layout.footer')
    </main>
</div>
<script src="{{asset ('assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="{{asset ('assets/js/main.js')}}"></script>

<script>
    $("#add_comment").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '{{route('blogs.add_comment', $get_article->id)}}',
            data: $(this).serialize(),
            success: function (data) {
                $("#add_comment")[0].reset();
                $('#alert_model').empty()
                $("#comment_section").append(
                    '<div class="tm-comment tm-mb-45">' +
                    '<figure class="tm-comment-figure">' +
                    '<figcaption class="tm-color-primary text-center">' + data.name + '</figcaption>' +
                    '</figure>' +
                    '<div>' +
                    '<p>' + data.comment + '</p>' +
                    '<div class="d-flex justify-content-between">' +
                    '<span class="tm-color-primary">' + data.created_at + '</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
                )
            },
            error: function (data) {
                $('#alert_model').empty()
                $('#alert_model').append(
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                    '<strong>' + data.responseJSON.message + '</strong>' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '</div>'
                )
            }
        });
    });
</script>

</body>
</html>
