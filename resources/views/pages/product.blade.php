@extends('layouts.master',['title'=>$pd->products_name])

@section('title')

@section('inner')

<div class="col-md-9 pzero mainbox" itemscope="" itemtype="http://schema.org/Product">
<section id="main" class="">
    <header>
        @include('layouts.partials._breadcrumbs')
    </header>
    <article>
        <div class="row">
            <div class="col-md-8 text">
                <div class="title">
                    <h1><span itemprop="name">{{$pd->products_name}}</span></h1>
                    <h3>Cod produs: <span>{{$p->cod_unic}}</span></h3>
                    <h3>Producator: <a href="/advanced_search_result.php?keywords=PORT-BAG"><span itemprop="manufacturer">{{$m->manufacturers_name}}</span></a></h3>
                    <hr>
                </div>

                <div class="simboluri">
                    <img src="images/icons/06.png" alt="LIVRARE IN 24 H" title="LIVRARE IN 24 H">&nbsp;
                </div>
                @include('layouts.partials._rating')
                <div>
                        <span class="linkReviews">
                            <a href="http://www.toolszone.ro/cutie-din-plastic-cu-organizator-26-meta-portbag-pr-6993.html">Vezi voturile acordate</a> |
                            <a href="http://www.toolszone.ro/product_reviews_write.php?products_id=6993">Voteaza produs</a>                                    </span>
                </div>
                <div>
                    <form name="tell_a_friend" action="http://www.toolszone.ro/tell_a_friend.php" method="get">
                        <div class="social">

                            <span class="email">
                                <button title="Trimite unui prieten" value="Send" class="btn btn-xs" type="submit" id="submit"><i class="fa fa-envelope"></i></button>
                            </span>
                            <span class="favorite">
                                    <a title="Adauga la favorite" href="http://www.toolszone.ro/fav.php?fav_products_id=6993"><i class="fa fa-star"></i></a>
                                </span>
                        </div>
                        <input type="hidden" name="products_id" value="6993">
                    </form>
                </div>
                <h4>Descriere produs:</h4>
                <div class="desc ps" itemprop="description">
                    {!! $pd->products_description !!}
                </div>
            </div>

            <div id="zoomModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img class="ol" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="ol">
                            <img id="zoomed" src="{{Image::getUrl($p->products_image)}}" class="img-responsive">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function openModal(){
                    //debugger;
                    var path = $('#image').attr('src');
                    var newPath = path.split("/");
                    $('#zoomed').attr('src','http://www.toolszone.ro/poze/'+newPath[5]+'/'+newPath[6]).on('load',function(){
                        $('#zoomModal').modal('show');
                    });

                }
            </script>

            <div class="col-md-4">
                <div class="mainImgContainer">
                    <div class="mainImg  col-xs-9 col-md-12">
                                <span class="brand" itemprop="logo">
                                    <img src="{{Image::getManufacturer($m->manufacturers_image)}}" alt="PORT-BAG" title=" PORT-BAG " width="100" height="35" itemprop="logo">                                            </span>
                        <img class="ol" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="ol" onclick="openModal()" title="Cutie din plastic cu organizator 26">
                        <img id="image" src="{{ Image::getUrl($p->products_image,true) }}" alt="Cutie din plastic cu organizator 26" title="Cutie din plastic cu organizator 26" itemprop="image">
                        <span class="mareste"><i class="fa fa-search-plus"></i> Mareste imaginea</span>
                    </div>
                    <div id="thumbs" class="mainImgThumbs  col-xs-3 col-md-12 row">
                        @foreach($images as $key => $i)
                            @if($i !='')
                            <div class="thumb col-md-3 {{$key == 0?'active':''}}">
                                <a class="selector" data-src="{{ Image::getUrl($i,true) }}" href="#"><img id="image" border="0px" src="{{ Image::getUrl($i) }}"></a>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </article>
    <footer>

    </footer>
</section>






    <div class="productOptions">
        <input type="hidden" name="id[1]" id="id[1]">
        <input type="hidden" name="cart_quantity" value="1" id="cart_quantity">
        <table class="optionTable" width="100%">
            <tbody>
            <tr>
                <th class="optTh"></th>
                <th class="optTh">Cod</th>
                <th class="optTh">Dimensiune<br>(mm)</th>
                <th class="optTh">Lungime<br>(mm)</th>
                <th class="optTh">Greutate<br>(g)</th>
                <th class="optTh">Cantitate</th>
                <th class="optTh" id="th_price">Pret cu TVA</th>
                <th class="optTh" id="th_price_2">Pret cu TVA<br> &gt; 1 buc /1buc</th>
                <th class="optTh" id="th_price_3">Pret cu TVA<br> &gt; 1 buc /1buc</th>
                <th class="optTh"></th>
            </tr>
            @each('layouts.partials._product_attributes',$attributes,'a')

            </tbody></table>                <div class="productOptionsFooter row">
            <div class="col-md-6">
                <input type="hidden" id="tax" value="1"><a id="tax_button" href=""> Afiseaza preturi fara TVA</a>
            </div>
            <div class="col-md-6 align-right">
                <a href="http://www.toolszone.ro/cutie-din-plastic-cu-organizator-13-320x160x130-mm-pe-01-ekono-portbag-p-6994.html">Produsul urmator <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>


    </div>


<div class="bs-more-info">
    <div class="panel panel-default ">
        <div class="panel-heading">Informatii aditionale</div>
        <div class="panel-body">

            <div class="col-md-3">
                <h4>Descarca:</h4>
                <ul>
                    <li>
                        <a target="_blank" href="pdf/PORT-BAG-2010.pdf" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-download-alt"></i> Catalog produs</a>
                    </li>
                    <li>
                        <a target="_new" href="pdf/M.L. 05.jpg" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-download-alt"></i> Detalii tehnice</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

{{--@include('layouts.partials._also_bought')--}}



@endsection
