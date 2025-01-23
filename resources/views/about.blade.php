<h1>About Page</h1>
<h3>
    {{-- {{URL::current()}} --}}
    {{url()->current()}}
</h3>
<h3>
    {{-- {{URL::full()}} --}}
    {{url()->full()}}
</h3>
<h3>
   Last {{url()->previous()}}
</h3>