<h1>Hello Laravel</h1>
<h3>
    <a href="{{URL::to('about')}}">About Page</a>
    <a href="{{URL::to('home')}}">Home Page</a>
    <a href="{{URL::to('about',['Sharjeel'])}}">Sharjeel Page</a>
    <a href="{{route('home')}}">Go to  Home Page</a>

</h3>