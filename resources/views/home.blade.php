@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="#"><img class="img-responsive" alt="" src="https://images.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg?cs=srgb&dl=animal-animal-photography-cat-104827.jpg&fm=jpg"></a>
                    <div class="row">
                        <div class="col-xs-3">
                            <h5>
                                <small>TWEETS</small>
                                <a href="#">1,545</a>
                            </h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>
                                <small>FOLLOWING</small>
                                <a href="#">251</a>
                            </h5>
                        </div>
                        <div class="col-xs-5">
                            <h5>
                                <small>FOLLOWERS</small>
                            </br>
                                <a href="#">251</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default panel-custom">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Trends
                        <small><a href="#">ciao</a></small>
                    </h3>
                </div>

                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li><a href="#">#hahhaha</a></li>
                        <li><a href="#">#blah blah</a></li>
                        <li><a href="#">#yah yahaa</a></li>
                        <li><a href="#">#bushra is awsome</a></li>
                        <li><a href="#">#hahhaha wah wah</a></li>
                        <li><a href="#">#snow </a></li>
                        <li><a href="#">#cool it is</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="media">
                        <a class="media-left" href="#444">
                            <img alt="" class="media-object img-rounded" src="http://placehold.it/35x35">
                        </a>

                                                <div class="container">
                                                    <div class="row justify-content-center">

                                                        <div class="col-md-10">

                                                            <div class="row">
                                                                <div   class="col-xs-10 col-md-12">
                                                                    <h2>Tweets</h2>
                                                                    <form  name="post-form"method="post" action="/posts">
                                                                        @csrf
                                                                        <textarea class="form-control tweet-box" name="tweet" placeholder="Enter tweet here">

                                                                        </textarea>

                                                                        <button  class="btn btn-success  btn-sm">Tweet</button>
                                                                     </form>
                                                                    <?php
                                                                    if(isset($posts) && ($posts!=null)){
                                                                     ?>
                                                                     @foreach ($posts as $post)
                                                                     <div class="row" >
                                                                         <div class="col-xs-10 col-md-10">
                                                                             <div class="post">
                                                                                 {{ $post->post }}
                                                                                 <br/>
                                                                                 <div class ="user align-right">
                                                                                    -  {{ $post->user_id }}  @  {{ $post ->created_at }}
                                                                                    <div class="row">
                                                                                        <div class="col-md-11 offset-md-1">

<form name="delete-form" method="post" action="/delete-post">
                            @csrf
<input type="hidden" name="_method" value="DELETE"/>
<input type="hidden" name="post_id" value="{{ $post->id }} /">
 <button class="btn btn-sm btn-twitter"
style="background-color: #1da1f2; color:white;">Delete</button>
</form>







                                                                                        </div>
                                                                                    </div>
                                                                                 </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                     @endforeach
                                                                     <?php
                                                                 } ?>

                                                                        <div class="row">
                                                                            <div class="col-xs-6 col-md-6">

                                                                                <form method="post" action="/comment">
                                                                                    @csrf
                                                                                    <textarea class="form-control comment-box" name="comment" placeholder="comment here"></textarea>
                                                                                    <br/>


                                                                                    <button  class="btn btn-success  btn-sm">comment</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>

                                                       <div class="panel-body">
                                                           <div class="media">
                                                               <a class="media-left" href="#555">
                                                                   <img alt="" class="media-object img-rounded" src="http://placehold.it/64x64">
                                                               </a>
                                                               <div class="media-body">
                                                                   <h4 class="media-heading">Edmonton</h4>
                                                                   <p>Police called after weekend hockey fight in Mill Woods -
                                                                       https://edmonton.ctvnews.ca/police-called-after-weekend-hockey-fight-in-mill-woods-1.4261845 … #yeg</p>
                                                                   <ul class="nav nav-pills nav-pills-custom">
                                                                       <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                                                                       <li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                                                                       <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                                                       <li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                 </div>
                                           </div>

                                                       </br>
                                                       </br>
                                   </div>
                              </div>

                                   </div>

                                        <div class="col-sm-3">
                                            <div class="panel panel-default panel-custom">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                               Who to follow
                                                               <small><a href="#">Refresh</a> ● <a href="#">View all</a></small>
                                                           </h3>
                                                </div>
                                                      <div class="panel-body">
                                                           <div class="media">
                                                               <div class="media-left">
                                                                   <img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
                                                               </div>
                                                               <div class="media-body">
                                                                   <h4 class="media-heading">bushra</h4>
                                                                   <a href="bushra" class="btn btn-default btn-xs">
                                                                       +
                                                                       <span class="glyphicon glyphicon-user"></span>
                                                                       Follow
                                                                   </a>
                                                               </div>
                                                           </div>
                                                         <div class="media">
                                                               <div class="media-left">
                                                                   <img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
                                                               </div>
                                                              <div class="media-body">
                                                                   <h4 class="media-heading">megha</h4>
                                                                   <a href="megha" class="btn btn-default btn-xs">
                                                                       +
                                                                       <span class="glyphicon glyphicon-user"></span>
                                                                       Follow
                                                                   </a>
                                                               </div>
                                                          </div>
                                                           <div class="media">
                                                               <div class="media-left">
                                                                   <img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
                                                               </div>
                                                               <div class="media-body">
                                                                   <h4 class="media-heading">Brittany</h4>
                                                                   <a href="Brittany" class="btn btn-default btn-xs">
                                                                       +
                                                                       <span class="glyphicon glyphicon-user"></span>
                                                                       Follow
                                                                   </a>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="panel-footer">
                                                           <a href="posts">
                                                               <span class="glyphicon glyphicon-user"></span>
                                                               Find people you know
                                                           </a>
                                                       </div>
                                                 </div>
                                                     <div class="well well-sm">
                                                       <ul class="list-inline">
                                                           <li>© 2019 Twitter</li>
                                                           <li><a href="#">About</a></li>
                                                           <li><a href="#">Help</a></li>
                                                           <li><a href="#">Terms</a></li>
                                                           <li><a href="#">Privacy</a></li>
                                                           <li><a href="#">Cookies</a></li>
                                                           <li><a href="#">Ads info</a></li>
                                                           <li><a href="#">Brand</a></li>
                                                           <li><a href="#">Blog</a></li>
                                                           <li><a href="#">Status</a></li>
                                                           <li><a href="#">Apps</a></li>
                                                           <li><a href="#">Jobs</a></li>
                                                           <li><a href="#">Advertise</a></li>
                                                           <li><a href="#">Businesses</a></li>
                                                           <li><a href="#">Media</a></li>
                                                           <li><a href="#">Developers</a></li>
                                                       </ul>
                                                     </div>
                                               </div>
                                         </div>
                                  </div>
                            </div>
                       </div>
                 </div>
            </div>
    </div>
</div>


@endsection
@endsection
