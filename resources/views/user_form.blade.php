<h3>
    <a href="/about">About Page</a>
</h3>
<h1>ADD NEW USER</h1>

{{-- @if ($errors->any())
@foreach ($errors->all() as $error )
    <div style="color: red">
        {{$error}}
    </div>
@endforeach    
@endif --}}
<form action="adduser" method="post">
    @csrf
    <div class="input_wrapper">
        <input type="text" placeholder="Enter Your Name" name="name">
        <div style="color: red">@error('name'){{$message}}@enderror</div>
    </div>
    <div class="input_wrapper">
        <input type="text" placeholder="Enter Your Email" name="email">
        <div style="color: red">@error('email'){{$message}}@enderror</div>
    </div>
    <div class="input_wrapper">
        <input type="text" placeholder="Enter Your City" name="city">
        <div style="color: red">@error('city'){{$message}}@enderror</div>
    </div>
    <div class="input_wrapper">
        <h5>User Skills</h5>
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="NODE" id="node">
        <label for="node">NODE</label>
        <input type="checkbox" name="skill[]" value="JAVA" id="java">
        <label for="java">JAVA</label>
        <div style="color: red">@error('skill'){{$message}}@enderror</div>
    </div>
    <div class="input_wrapper">
        <button type="submit" >Add New User</button>
    </div>
</form>
<style>
    input,button{
        border: lightblue 2px solid;
        height: 35px;
        width: 300px;
        background: lightblue;
    }
    .input_wrapper{
        padding: 10px;
    }
</style>


{{-- <h1>ADD NEW USER</h1>
<form action="adduser" method="post">
    @csrf
    <div>
        <h5>User Skills</h5>
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="NODE" id="node">
        <label for="node">NODE</label>
        <input type="checkbox" name="skill[]" value="JAVA" id="java">
        <label for="java">JAVA</label>
    </div>
    <div>
        <h5>User Gender</h5>
        <input type="radio" name="gender" value="MALE" id="male">
        <label for="male">MALE</label>
        <input type="radio" name="gender" value="FEMALE" id="female">
        <label for="female">FEMALE</label>
    </div>
    <div>
        <h5>User City</h5>
        <select name="city" id="">
            <option value="karachi">Karachi</option>
            <option value="lahore">Lahore</option>
            <option value="multan">Multan</option>

        </select>
    </div>
    <div>
        <h5>User Age</h5>
        <input type="range" name="age" min="18" max="100">
    </div>
    
    <div>
        <button type="submit" >Add New User</button>
    </div>
</form> --}}