@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset("bower_components/font-awesome/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("bower_components/admin-lte/dist/css/skins/_all-skins.min.css") }}">
    <link rel="stylesheet" href="{{ asset("bower_components/admin-lte/dist/css/AdminLTE.min.css") }}">
@section('content')

    @include('layouts.inc.navbar')

    <br>
    <div class="container">
        <div class="row">
            <div class="col col-md-8">
                <br>
                <a href=""><i class="fa fa-home"></i> Back to home</a>
                <br>
                <h2>Ask To Dokter</h2>
                <hr>
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <div class="user-block">
                            <img class="img-circle" src="../bower_components/admin-lte/dist/img/user1-128x128.jpg" alt="User Image">
                            <span class="username"><a href="#">Ahmad Syifaur</a></span>
                            <span class="description">3 days ago</span>
                        </div>
                    <!-- /.user-block -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <!-- post text -->
                    <a href=""><h5>Gatal</h5></a>
                        <p>hi dok , kenapa tubuh saya gatal ? </p>
                    <!-- Social sharing buttons -->
                        <span class="pull-right text-muted">1 Answered</span>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer box-comments">
                        <div class="box-comment">
                            <!-- User image -->
                            <img class="img-circle img-sm" src="../bower_components/admin-lte/dist/img/user3-128x128.jpg" alt="User Image">

                            <div class="comment-text">
                                <span class="username">
                                    Dokter Mentari
                                    <span class="text-muted pull-right">3 days ago</span>
                                </span><!-- /.username -->
                            Hai Syifaur , sini main ke rumah ibu , nanti ibu obatin
                            </div>
                            <!-- /.comment-text -->
                            <span>by : <a href="">dokter mentari</a></span>
                        </div>
                    <!-- /.box-comment -->
                    </div>
                    <!-- /.box-footer -->
                </div>
                <hr>
                <br>
                <h2>Diskusi Kesehatan Terbaru</h2>
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <div class="user-block">
                            <img class="img-circle" src="/bower_components/admin-lte/dist/img/user1-128x128.jpg" alt="User Image">
                            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                            <span class="description">5 mins ago</span>

                        </div>
                    <!-- /.user-block -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <!-- post text -->
                        <a href=""><h5>Lorem ipsum</h5></a>
                        <p>Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind
                            texts. Separated they live in Bookmarksgrove right at</p>

                        <!-- Social sharing buttons -->
                        <span class="pull-right text-muted">1 Answered</span>
                        <span><i class="fa fa-check-circle " style="color:blue"></i> Answered by :</span>
                        <!-- <span class="pull-right text-muted">1 Answered</span> -->
                    </div>
                    <hr>
                    <div class="box-header with-border">
                        <div class="user-block">
                            <img class="img-circle" src="/bower_components/admin-lte/dist/img/user1-128x128.jpg" alt="User Image">
                            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                            <span class="description">7:30 PM Today</span>
                        </div>
                     <!-- /.user-block -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <!-- post text -->
                        <a href=""><h5>Lorem ipsum</h5></a>
                        <p>the coast of the Semantics, a large language ocean.
                            A small river named Duden flows by their place and supplies
                            it with the necessary regelialia. It is a paradisematic
                            country, in which roasted parts of sentences fly into
                            your mouth.</p>

                        <!-- Social sharing buttons -->
                        <span class="pull-right text-muted">0 Answered</span>
                    </div>
                </div>
            </div>
            <div class="col col-md-4">
            <a href="/ask"><img src="https://i.ibb.co/tCWCnKK/doctor.png" alt="doctor" border="0"width="350"></a>
            </div>
        </div>
    </div>
    <script src="{{ asset("bower_components/jquery/dist/jquery.min.js") }}"></script>
    <script src="{{ asset("bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
    <script src="{{ asset("bower_components/fastclick/lib/fastclick.js") }}"></script>
    <script src="{{ asset("bower_components/admin-lte/dist/js/adminlte.min.js") }}"></script>
    <script src="{{ asset("bower_components/admin-lte/dist/js/demo.js") }}"></script>
    <script src="{{ asset("bower_components/ckeditor/ckeditor.js") }}"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
@endsection
