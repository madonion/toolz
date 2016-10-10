
<div class="col-xs-6 categItem" itemscope="" itemtype="http://schema.org/Product">
    {{--{{dd($p)}}--}}
    <?php if(!isset($p->slug)) var_dump($p)?>
    <img src="{{Image::getUrl($p->products_image)}}" itemprop="image">
    <a class="underline" href="{{$p->slug}}" itemprop="name">{{$p->products_name}}</a>
    <a class="maiMult" href="{{$p->slug}}" itemprop="url">Mai mult</a>
</div>
