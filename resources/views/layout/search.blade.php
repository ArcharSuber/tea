<div id="header"  class="header">
  <div class="logo">
  <a href="#"><img src="images/logo.png" /></a>
  <div class="phone">
   免费咨询热线:<span class="telephone">400-3404-000</span>
  </div>
  </div>
  <div class="Search">
  	<form action="{{url('/search')}}" method="GET" target="_blank">
        {{csrf_field()}}
    <p><input name="key" type="text"  class="text"/><input name="" type="submit" value=""  class="Search_btn"/></p>
	</form>
	<p class="Words"><a href="#">苹果</a><a href="#">香蕉</a><a href="#">菠萝</a><a href="#">西红柿</a><a href="#">橙子</a><a href="#">苹果</a></p>
</div>
</div>