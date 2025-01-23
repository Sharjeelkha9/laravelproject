<style>
    .success{
        background: lightgreen;
        color: green;
        padding: 5px 10px;
        display: inline-block;
        margin: 10px;   
    }
    .danger{
        background: red;
        color: white;
        padding: 5px 10px;
        display: inline-block;
        margin: 10px ;  
    }
    .warning{
        background: pink;
        color: black;
        padding: 5px 10px;
        display: inline-block;
        margin: 10px ;  
    }</style>
    <h3>
        <a href="/about">About Page</a>
    </h3>
@include("subviews.header")
<h1>HOME PAGE</h1>
<h1>{{$username}}</h1>
<h1>{{rand()}}</h1>
<h1>{{$users[0]}}</h1>
@foreach ($users as $values )
    <h2>{{$values}}</h2>
@endforeach
@include("subviews.footer")
<x-message-banner msg="User Login Successfully" class="success"/>
<x-message-banner msg="User SignUp Successfully" class="success"/>
<x-message-banner msg="Wrong Password Please Enter The Correct  Password" class="danger"/>
<x-message-banner msg="Please Check Your Password" class="warning"/>


