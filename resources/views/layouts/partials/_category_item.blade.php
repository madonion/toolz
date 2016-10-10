
<div class="col-xs-6 categItem" itemscope="" itemtype="http://schema.org/Product">
    {{--{{dd($categorie)}}--}}
    <img src="{{Image::getUrl($categorie->categories_image)}}" itemprop="image">
    <a class="underline" href="{{$categorie->slug}}" itemprop="name">{{$categorie->categories_name}}</a>
    <a class="maiMult" href="{{$categorie->slug}}" itemprop="url">Mai mult</a>
</div>