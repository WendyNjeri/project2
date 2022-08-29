<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h1>this is header component of the view </h1>
    <!--data from the view in app>http>view -->
    <h3>Hello {{$name}}</h3>
    <!---->
    <h4>Fruits are: </h4>
    <ul>
        @foreach ($fruits as $fruit)
        <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>