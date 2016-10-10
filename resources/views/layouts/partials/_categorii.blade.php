<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 6/2/16
 * Time: 3:53 PM
 */

?>

<nav class="sec-nav " role="navigation">
    <ul class="nav nav-list sidenav">
        <li class="categorii">
            <a href="http://www.toolszone.ro/catalog-c-1.html">Categorii produse</a>
        </li>
        @foreach($categories as $categ)
            <li><a href="{{$categ->slug}}">{{$categ->categories_name}}</a></li>
        @endforeach
        </ul>
</nav>
