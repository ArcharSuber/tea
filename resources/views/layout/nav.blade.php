<div class="Navigation" id="Navigation">
	<ul class="Navigation_name">
		<li><a class="nav_on" id="mynav1"  href="/"><span>首页</span></a></li>
		@foreach($category as $key => $val)
		<li><a class="nav_on" id="mynav{{$key+2}}"  href="/list?cate={{$val->category_id}}" target="_blank"><span>{{$val->category_name}}</span></a></li>
		@endforeach
		<li><a class="nav_on" id="mynav8"  href="/group"><span>今日团购</span></a></li>
		<li><a class="nav_on" id="mynav8"  href="#"><span>联系我们</span></a></li>
	</ul>			 
</div>
