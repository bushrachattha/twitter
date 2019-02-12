@foreach ($comments as $comment)
<div class="row" >
    <div class="col-xs-12 col-md-12">
        <div class="post">
            {{ $comment->$comment }}
            <br/>
            <div class ="user align-right">
               -  {{ $comment->user_id }}  @  {{ $comment ->created_at }}

            </div>
       </div>
   </div>
</div>
@endforeach
