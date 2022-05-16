<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create article</title>
    @include('blog.blog-layout.head')
</head>
<body>
@include('blog.blog-layout.header')

<div class="container-fluid">

    <main class="tm-main">
        <div id="alert_model">
        </div>
        <form method="post" id="addarticlform" enctype="multipart/form-data">
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <div class="col-12">
                        <label>Add image for the article: </label>
                        <input type="file" name="image" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-12 tm-post-col">
                    <div class="tm-post-full">
                        @csrf
                        <div class="mb-4">
                            <div class="col-12 p-1">
                                <input type="text" name="title" placeholder="title" class="form-control">
                            </div>
                            <div class="col-12 p-1">
                            <textarea rows="4" style="resize: none;" name="text"
                                      class="form-control">Article text</textarea>
                            </div>
                            <div class="col-12 p-1">
                                <select name="category" class="form-control">
                                    <option value="0" selected>Choose category</option>
                                    <option value="1">Creative</option>
                                    <option value="3">Design</option>
                                    <option value="2">Business</option>
                                    <option value="4">Web Development</option>
                                </select>
                            </div>
                            <div class="col-12 p-1">
                                <input type="text" name="created_by" placeholder="Creator name" class="form-control">
                            </div>
                            <div class="col-12 p-1">
                                <input type="submit" class="btn-info rounded-sm" value="Add new">
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
    $("#addarticlform").submit(function (e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: '{{route('blogs.add')}}',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#addarticlform")[0].reset();
                $('#alert_model').empty()
                $('#alert_model').append(
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                    '<strong>Successfully added!</strong> <a href="' + data.id + '">Show article</a>' +
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
