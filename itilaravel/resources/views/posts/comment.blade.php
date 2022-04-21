<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show-page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <style>
        body {
            margin-top: 20px;
            background-color: #e9ebee;
        }

        .be-comment-block {
            margin-bottom: 50px !important;
            border: 1px solid #edeff2;
            border-radius: 2px;
            padding: 50px 70px;
            border: 1px solid #ffffff;
        }

        .comments-title {
            font-size: 16px;
            color: #262626;
            margin-bottom: 15px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }

        .be-img-comment {
            width: 60px;
            height: 60px;
            float: left;
            margin-bottom: 15px;
        }

        .be-ava-comment {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .be-comment-content {
            margin-left: 80px;
        }

        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }

        .be-comment-name {
            font-size: 13px;
            font-family: 'Conv_helveticaneuecyr-bold';
        }

        .be-comment-content a {
            color: #383b43;
        }

        .be-comment-content span {
            display: inline-block;
            width: 49%;
            margin-bottom: 15px;
        }

        .be-comment-time {
            text-align: right;
        }

        .be-comment-time {
            font-size: 11px;
            color: #b4b7c1;
        }

        .be-comment-text {
            font-size: 13px;
            line-height: 18px;
            color: #7a8192;
            display: block;
            background: #f6f6f7;
            border: 1px solid #edeff2;
            padding: 15px 20px 20px 20px;
        }

        .form-group.fl_icon .icon {
            position: absolute;
            top: 1px;
            left: 16px;
            width: 48px;
            height: 48px;
            background: #f6f6f7;
            color: #b5b8c2;
            text-align: center;
            line-height: 50px;
            -webkit-border-top-left-radius: 2px;
            -webkit-border-bottom-left-radius: 2px;
            -moz-border-radius-topleft: 2px;
            -moz-border-radius-bottomleft: 2px;
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
        }

        .form-group .form-input {
            font-size: 13px;
            line-height: 50px;
            font-weight: 400;
            color: #b4b7c1;
            width: 100%;
            height: 50px;
            padding-left: 20px;
            padding-right: 20px;
            border: 1px solid #edeff2;
            border-radius: 3px;
        }

        .form-group.fl_icon .form-input {
            padding-left: 70px;
        }

        .form-group textarea.form-input {
            height: 150px;
        }
    </style>
</head>

<body>
    
    <form class="form-block" method="post" action="{{route('posts.comment',['post'=>$post['id']])}}">
    @csrf

        <div class="container">
    
            <div class="be-comment-block">
                <h1 class="comments-title">Comments (count)</h1>
                @foreach ($comment as $onecomment)
                <div class="be-comment">
                    <div class="be-img-comment">
                        <a href="blog-detail-2.html">
                            <img src="https://bootdey.com/img/Content/avatar/avatar{{rand(1,6)}}.png" alt="" class="be-ava-comment">
                        </a>
                    </div>
                    <div class="be-comment-content">

                        <span class="be-comment-name">
                            <a href="blog-detail-2.html">{{$onecomment->post_id}}</a>
                        </span>
                        <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            vvvvv
                        </span>
                        <p class="be-comment-text">
                            {{$onecomment->comments}}
                        </p>
                    </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-xs-12 col-sm-6 fl_icon">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <textarea name="comment" class="form-input" required="" placeholder="Your text"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">submit</button>
                        </div>


                    </div>
                </div>
            </div>

    </form>
</body>

</html>