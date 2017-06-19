<div class="{{"cells".$backgroundColoer." cells"}}">
    <div>{{$tip->articletitle}}</div>
    <div>{{$tip->created_at}}</div>
    <div class="delate_article" route="{{route('delate_a',['symble'=>$tip->symble])}}" symble="{{$tip->symble}}"><span>删除</span></div>
    <div><a href="#">编辑</a></div>
</div>