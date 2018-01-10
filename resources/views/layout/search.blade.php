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
	<p class="Words"><span style="color: #ccc">搜索热度：</span>
      @foreach($keywords as $key=>$val)
      <a href="javascript:void(0)">{{$key}}</a>
      @endforeach
</div>
</div>
<script>
  $(".Words a").click(function(){
      $(":input[name='key']").val($(this).html());
      $(".Search_btn").trigger('click');
  });
</script>