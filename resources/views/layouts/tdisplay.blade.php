 @foreach ($posts as $post)
 <div class="row" >
     <div class="col-xs-12 col-md-12">
         <div class="post">
             {{ $post->$post }}
             <br/>
             <div class ="user align-right">
                -  {{ $post->user_id }}  @  {{ $post ->created_at }}
                <div class="row">
                    <div class="col-md-11 offset-md-1">

                        @include('partials.cdisplay')
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
 @endforeach
