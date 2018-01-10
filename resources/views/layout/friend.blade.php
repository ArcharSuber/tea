<div class="Links">
        <div class="link_title">友情链接</div>
        <div class="link_address">
        	@foreach($friendsLink as $links)
        	<a href="{{$links->linkaddress}}" title="{{$links->linkaddress}}" target="_brank">{{$links->linkname}}</a>
        	@endforeach
        </div>
</div>