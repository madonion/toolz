@if (Auth::check())

    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span> Bine ai venit,<br><strong>{{Auth::user()->name}}</strong></span> </button>
        <ul class="dropdown-menu">
            <li><a tabindex="-1" href="{{route('myAccount')}}">Contul meu</a></li>
            <li><a tabindex="-1" href="FILENAME_FAV">Favorite</a></li>
            <li><a tabindex="-1" href="FILENAME_ACCOUNT_HISTORY>">Comenzile mele</a></li>
            <li><a tabindex="-1" href="FILENAME_ADDRESS_BOOK">Agenda</a></li>
            <li class="divider"></li>
            <li><a href="{{url('logout')}}">Logout</a></li>
        </ul>
    </div>
@else
    <div class="btn-group">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-user"></span><span> Bine ai venit,<br><strong>Contul meu</strong></span> </button>
    </div>
@endif