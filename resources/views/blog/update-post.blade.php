<!DOCTYPE html>
<html lang="en">
<head>
    <title id="title_tag">Update {{$get_article->title}}</title>
    @include('blog.blog-layout.head')
</head>
<body>
@include('blog.blog-layout.header')
<div class="container-fluid">
    <main class="tm-main">
        <div id="alert_model">
        </div>
        <form id="update_article_form" method="post">
            @csrf
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <div class="col-12">
                        <p>Image: <img id="image" width="50%" src="{{ asset($get_article->image)}}"></p>
                        <label>Do you want to update image for the article?</label>
                        <input id="image_input" type="file" name="image" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-12 tm-post-col">
                    <div class="tm-post-full">
                        <div class="mb-4">
                            <div class="col-12 p-1">
                                <input type="text" name="title" value="{{$get_article->title}}" placeholder="title"
                                       class="form-control">
                            </div>
                            <div class="col-12 p-1">
                                <textarea rows="4" style="resize: none;" name="text"
                                          class="form-control">{{$get_article->text}}</textarea>
                            </div>
                            <div class="col-12 p-1">
                                <select name="category" class="form-control">
                                    <option @if($get_article->category == 0) selected @endif value="0" selected>Choose category</option>
                                    <option @if($get_article->category == 1) selected @endif value="1">Creative</option>
                                    <option @if($get_article->category == 2) selected @endif value="3">Design</option>
                                    <option @if($get_article->category == 3) selected @endif value="2">Business</option>
                                    <option @if($get_article->category == 4) selected @endif value="4">Web Development</option>
                                </select>
                            </div>
                            <div class="col-12 p-1">
                                <input type="text" name="created_by" value="{{$get_article->created_by}}"
                                       placeholder="Creator name" class="form-control">
                            </div>

                            <div class="col-12 p-1">
                                <input type="submit" class="btn-info rounded-sm" value="Update article">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @include('blog.blog-layout.footer')
    </main>
</div>
<script src="{{asset ('assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="{{asset ('assets/js/main.js')}}"></script>


<script>
    $("#update_article_form").submit(function (e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: '{{route('blogs.update', $get_article->id)}}',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $('#title_tag').empty()
                $('#title_tag').append('Update ' + data.title)
                $('#image').attr('src', data.image)
                $('#image_input').val('')
                $('#alert_model').empty()
                $('#alert_model').append(
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                    '<strong>Successfully updated!</strong>' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
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
