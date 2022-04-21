<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show-page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <style>
        body {
            margin-top: 20px;
            background: #DCDCDC;
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

        .content {
            padding: 35px 0px;
        }

        .post-list {
            padding: 90px 0px;
        }

        .post-detail {
            padding: 40px 0px;
            margin-top: 120px;
        }

        .post {
            width: 100%;
            float: left;
            -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.4);
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.4);
            background: #fff;
            margin-bottom: 40px;
            border-radius: 3px;
        }

        .feature-post .thumbnail .author-info {
            padding: 20px 5px 20px 40px;
            text-align: left;
            min-height: 80px;
            background: #2c3840;
            float: left;
            width: 100%;
        }

        .post .post-type {
            float: left;
            width: 100%;
        }

        .post iframe {
            padding: 0px;
            margin: 0px;
        }

        .post .mejs-container {
            border-radius: 3px 3px 0px 0px;
            width: 100% !important;
        }

        .post .post-video {
            border-radius: 3px 3px 0px 0px;
        }

        .post .post-video iframe {
            width: 100%;
        }

        .post .post-video video {
            border-radius: 3px 3px 0px 0px;
        }

        .post .post-multiple-img a img {
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            width: 100%;
            height: auto;
            display: block;
            min-height: 160px;
        }

        .post .post-multiple-img a {
            float: left;
            width: 100%;
            display: block;
        }

        .post .post-multiple-img a:hover img {
            opacity: 0.7;
        }

        .post .post-audio {
            height: auto;
        }

        .post .post-audio ._SMB-widget {
            width: 100%;
        }

        .post .post-quote blockquote {
            text-align: center;
            margin: 0px;
            padding: 25px 15px;
        }

        .post .post-quote blockquote h3 {
            color: #e74c3c;
            font-size: 36px;
            margin: 0px 0px 10px 0px;
        }

        .post .post-quote blockquote p {
            color: #333;
            font-size: 24px;
            font-weight: 300;
        }

        .post .post-img a {
            display: block;
        }

        .post .post-img:hover a img {
            opacity: 0.7;
        }

        .post .post-img a img {
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            width: 100%;
            height: auto;
            border-radius: 3px 3px 0px 0px;
        }

        .post-detail .post .caption {
            padding: 55px 45px 0px 45px;
        }

        .post .caption {
            float: left;
            width: 100%;
            text-align: left;
            padding: 25px 25px;
        }

        .post .caption h3 {
            margin: 0px 0px 20px 0px;
            color: #36a0e7;
            font-weight: 300;
            font-size: 34px;
            line-height: 42px;
        }

        .post .caption p {
            line-height: 28px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .post .author-info {
            padding: 15px 15px 15px 15px;
            text-align: left;
            min-height: 60px;
            border-bottom: 1px solid #ddd;
            background: #fcfcfc;
            float: left;
            width: 100%;
        }

        .post .author-info .list-inline {
            margin: 0px;
        }

        .post .author-info ul li:first-child {
            border-left: none;
            padding-left: 0px;
        }

        .post .author-info ul li {
            float: left;
            border-left: 1px solid #ddd;
            padding-left: 20px;
            padding-right: 20px;
        }

        .post .author-info ul li p {
            line-height: 16px;
            color: #3b4952;
            font-weight: 300;
            font-size: 14px;
            margin: 0px;
        }

        .post .author-info ul li strong {
            color: #3b4952;
        }

        .post .author-info ul li a {
            color: #3b4952;
            font-weight: 700;
            font-size: 16px;
            line-height: 20px;
        }

        .post .author-info ul li a:hover {
            color: #e74c3c;
            text-decoration: none;
        }

        .post .author-info ul li .icon-box {
            margin-right: 15px;
            width: 36px;
            text-align: center;
            line-height: 36px;
            font-size: 30px;
            height: 36px;
            float: left;
            background: transparent;
            color: #aebbc5;
        }

        .post .author-info ul li .icon-box img {
            border-radius: 3px;
            width: 100%;
        }

        .post .author-info ul li .info {
            float: left;
        }

        .post .author-info.author-info-2 ul li:first-child {
            border-left: none;
            padding-left: 0px;
        }

        .post .author-info.author-info-2 ul li .icon-box {
            font-size: 28px;
        }

        .post .post-category {
            float: left;
            width: 100%;
            text-align: left;
            margin-bottom: 20px;
        }

        .post .post-category a {
            margin: 0px;
            font-size: 18px;
            font-weight: 300;
            color: #3b4952;
        }

        .post .post-category span {
            width: 12px;
            height: 12px;
            display: inline-block;
            background: #3b4952;
            vertical-align: middle;
            margin-right: 10px;
        }

        .post .post-category a:hover span {
            background: #e74c3c;
            color: #e74c3c;
        }

        .post .post-category a:hover {
            color: #e74c3c;
        }

        .post .tags {
            float: left;
            width: 100%;
            margin-bottom: 20px;
        }

        .post .tags li {
            margin-bottom: 8px;
            padding: 0px 2px;
        }

        .post .tags li a {
            background: #ebf1f4;
            font-size: 14px;
            font-weight: 300;
            border-radius: 3px;
            padding: 4px 8px;
            color: #3b4952;
        }

        .post .tags li a:hover {
            background: #3b4952;
            color: #fff;
        }

        .img-grid {
            float: left;
            margin-bottom: 40px;
        }

        .img-grid li {
            margin: 0px;
            float: left;
        }

        .post .caption h5 {
            text-decoration: underline;
            margin: 0px 0px 20px 0px;
            color: #3b4952;
            font-weight: 300;
            font-size: 24px;
            line-height: 30px;
        }

        .post .list-unstyled {
            margin-bottom: 40px;
        }

        .post .list-unstyled li {
            font-size: 16px;
            line-height: 28px;
            font-weight: 500;
            color: #49545b;
        }

        .post .list-unstyled li i {
            color: #a0b9ca;
            margin-right: 15px;
        }

        blockquote {
            background: #f2f6f8;
            border: 1px solid #e5e5e5;
            line-height: 28px;
            margin-bottom: 40px;
            font-size: 16px;
            font-weight: 500;
            color: #49545b;
        }

        .line-block {
            padding: 20px 45px;
            border-top: 1px solid #eef3f6;
            border-bottom: 1px solid #eef3f6;
            float: left;
            width: 100%;
        }

        .post .line-block .tags {
            margin-bottom: 0px;
        }

        .share-this {
            padding: 20px 45px;
            border-bottom: 1px solid #eef3f6;
            float: left;
            width: 100%;
        }

        .share-this p,
        .share-this ul {
            margin-bottom: 0px;
        }

        .share-this li a {
            background: #2c3840;
            line-height: 34px;
            text-align: center;
            color: #fff;
            width: 32px;
            height: 32px;
            display: block;
            border-radius: 50%;
        }

        .share-this li a.pinterest {
            background: #d91c1c;
        }

        .share-this li a.google-plus {
            background: #f25353;
        }

        .share-this li a.facebook {
            background: #2b77be;
        }

        .share-this li a.twitter {
            background: #62bfef;
        }

        .related-post {
            padding: 40px 45px;
            border-bottom: 1px solid #eef3f6;
            float: left;
            width: 100%;
        }

        .related-post .thumbnail {
            padding: 0px;
            border: none;
        }

        .related-post .thumbnail .caption {
            padding: 30px 0px 0px 0px;
        }

        .related-post .thumbnail .caption a {
            font-size: 18px;
            line-height: 28px;
            font-weight: 300;
            color: #49545b;
        }

        .related-post .thumbnail .caption a:hover {
            color: #36a0e7;
        }

        .related-post .thumbnail:hover a img {
            opacity: 0.7;
        }

        .related-post h4 {
            color: #49545b;
            font-weight: 700;
            font-size: 18px;
            margin: 0px 0px 20px 0px;
        }

        .comment-count {
            padding: 45px 45px;
            border-bottom: 1px solid #eef3f6;
            float: left;
            width: 100%;
        }

        .comment-count h4 {
            font-weight: 500;
            font-size: 24px;
            color: #3b4952;
        }

        .comment-count p {
            margin-bottom: 0px;
        }

        .comment-list {
            float: left;
            width: 100%;
        }

        .comment-list .media:first-child {
            margin-top: 0px;
            border-bottom: 1px solid #eef3f6;
        }

        .comment-list .media {
            padding: 30px 45px;
            margin-top: 0px;
        }

        .comment-list .media .media-body .media {
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 30px;
            padding-right: 30px;
            margin-left: -80px;
            border-left: 1px solid #eef3f6;
            border-bottom: 1px solid #eef3f6;
        }

        .comment-list .media .media-body {
            position: relative;
        }

        .comment-list .media .media-left {
            padding-right: 20px;
        }

        .comment-list .media .nested-first {
            margin-top: 30px;
            border-top: 1px solid #eef3f6;
        }

        .comment-list .media .nested-first:before {
            position: absolute;
            left: -80px;
            top: 90px;
            content: '';
            width: 1px;
            background: #eef3f6;
            height: 170px;
        }

        .comment-list .media,
        .comment-list .media-body {
            overflow: visible;
            zoom: 1;
        }

        .comment-list .media .media-body ul {
            margin-bottom: 0px;
        }

        .comment-list .media .media-body ul li a {
            color: #919ea8;
            font-size: 18px;
            font-weight: 500;
        }

        .comment-list .media .media-body ul li a:hover {
            color: #36a0e7;
        }

        .comment-list .media .media-body ul li a.reply-btn {
            color: #49545b;
            text-decoration: underline;
        }

        .comment-list .media .media-body ul li a.reply-btn:hover {
            color: #36a0e7;
        }

        .comment-list .media .media-body ul li {
            font-size: 18px;
            padding-right: 15px;
            color: #919ea8;
            font-weight: 500;
        }

        .comment-form {
            float: left;
            width: 100%;
            padding: 30px 45px;
        }

        .comment-form h4 {
            font-weight: 300;
            font-size: 28px;
            color: #3b4952;
            margin-bottom: 40px;
        }

        .comment-form .form-control {
            border-radius: 0px;
            background: #f1f4f6;
            border: none;
            height: 50px;
            color: #4a555c;
            font-size: 16px;
        }

        .comment-form .form-control::-webkit-input-placeholder {
            color: #4a555c;
        }

        .comment-form .form-control:-moz-placeholder {
            color: #4a555c;
        }

        .comment-form .form-control::-moz-placeholder {
            color: #4a555c;
        }

        .comment-form .form-control:-ms-input-placeholder {
            color: #4a555c;
        }

        .comment-form textarea.form-control {
            height: auto;
            min-height: 200px;
            resize: none;
        }

        .comment-form form {
            margin-bottom: 40px;
        }

        .vt-post.post .author-info ul li {
            padding-left: 15px;
            padding-right: 15px;
            float: none;
        }

        .vt-post.post .author-info {
            border-radius: 0px 0px 0px 3px;
            border-bottom: none;
            border-right: 1px solid #ddd;
            padding: 15px 12px 15px 12px;
        }

        .vt-post.post .post-img a img {
            border-radius: 3px 0px 0px 0px;
        }

        .vt-post.post .caption {
            padding: 25px 0px;
        }

        .post .caption h3 {
            margin: 0px 0px 20px 0px;
            color: #36a0e7;
            font-weight: 300;
            font-size: 34px;
            line-height: 42px;
        }

        .md-heading {
            font-size: 24px !important;
            line-height: 36px !important;
            margin-bottom: 15px !important;
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            background-color: #3b4952;
            border-color: #3b4952;
        }

        .pagination>li>a,
        .pagination>li>span {
            color: #2c3840;
            margin: 0px 5px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 1px 3px 0px rgba(44, 56, 64, 0.2);
            -moz-box-shadow: 0px 1px 3px 0px rgba(44, 56, 64, 0.2);
            box-shadow: 0px 1px 3px 0px rgba(44, 56, 64, 0.2);
            border: none;
            font-size: 16px;
        }

        .pagination>li>a:focus,
        .pagination>li>a:hover,
        .pagination>li>span:focus,
        .pagination>li>span:hover {
            background-color: #e74c3c;
            border-color: #e74c3c;
            color: #fff;
        }

        .pagination-wrap {
            width: 100%;
            float: left;
            margin-bottom: 35px;
        }

        .pagination {
            margin: 0px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-12 col-lg-12">
            <article class="post vt-post w-100">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                        <div class="post-type post-img ">
                            <a href="#"><img class="w-25" src="https://bootdey.com/img/Content/avatar/avatar{{rand(1,6)}}.png" style="width: 50%;" class="img-responsive" alt="image post"></a>
                        </div>
                        <div>
                            <div class="info bg-light">
                                <p>Post creator info</p>
                            </div>
                        </div>
                        <div class="author-info author-info-2">
                            <ul class="list-inline">
                                <li>
                                    <div class="info bg-light">
                                        <p>Posted on:</p>
                                        <strong>{{ \Illuminate\Support\carbon::parse($post->created_at)->isoFormat('MMMM Do YYYY, h:mm:ss a') }}</strong>
                                        <strong>2021-10-10</strong>
                                    </div>
                        </div>
                        </li>
                        <li>
                            <div>
                                <p><b>Name:</b>{{$post->user->name}}</p>
                                <p><b>Email:</b>{{$post->user->email}}</p>
                            </div>
                        </li>
                        <li>
                        </li>
                        </ul>
                    </div>
                </div>

        </div>
        </article>
    </div>
    </div>

    <form class="form-block" method="post" action="{{route('posts.comment',['post'=>$post['id']])}}">
        @csrf

        <div class="container">

            <div class="be-comment-block">
                <h1 class="comments-title">Comments (count)</h1>
                <!--foreach-->
                <div class="be-comment">
                    <div class="be-img-comment">
                        <a href="blog-detail-2.html">
                            <img src="https://bootdey.com/img/Content/avatar/avatar{{rand(1,6)}}.png" alt="" class="be-ava-comment">
                        </a>
                    </div>
                    @foreach($comments as $comment)
                    <div class="be-comment-content">

                        <span class="be-comment-name">
                            <a href="blog-detail-2.html">{{$comment->user->name}}</a>
                        </span>
                        <span class="be-comment-time">
                            <i class="fa fa-clock-o">{{$comment->post->created_at}}</i>

                        </span>
                        <p class="be-comment-text">
                            {{$comment->comments}}
                        </p>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 fl_icon">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <textarea name="comment" class="form-input" required="" placeholder="Your text"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">comment</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                        <select name="user_id" class="form-control">
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

            </div>

    </form>
</body>

</html>