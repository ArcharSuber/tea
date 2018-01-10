<div id="allSortOuterbox" class="display">
    <div class="Category"><a href="#" class="Menu_img"><em></em></a></div>
    <div class="hd_allsort_out_box_new">
      <!--左侧栏目开始-->
      <div class="Menu_list">	
       <div class="menu_title">茶叶品种</div>
       @foreach($breed as $value)
       <a href="/index/list?cate={{$value->category_id}}">{{$value->category_name}}</a>
       @endforeach
   </div>	
   <div class="Menu_list">	
       <div class="menu_title">茶叶价格</div>
       @foreach($productsPrice as $price)
       <a href="/index/list?price={{$price->p_id}}">{{$price->price}}</a>
       @endforeach
   </div>	

   <div class="Menu_list">	
       <div class="menu_title">推荐茶叶</div>
       <ul class="recommend">
          @foreach($bestProduct as $val)
           <li><a href="/desc?goods={{$val->goods_id}}" title="{{$val->goods_name}}">{{mb_substr($val->goods_name,0,11)}}...</a></li>
           @endforeach
       </ul>
   </div>

</div>

</div>
