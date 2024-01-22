<!doctype html>
<html lang="en">
<head>
    <title>Create Customers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
</head>
<body>
    <form action="{{$url}}" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">{{$title}}</h1>
            {{--sending varibale way is different--}}
            {{-- @php
              $demo = 1;  
            @endphp --}}
            {{--represents component (x-)and its name(input)--}}
            <x-input type="text" name="name" label="Name" value="{{}}" />
            <x-input type="email" name="email" label="Email" value={{}}/>
            <x-input type="password" name="password" label="Password" />
            <x-input type="password" name="password_confirm" label="Confirm Password" />
            <x-input type="text" name="country" label="Country" value={{}}/>
            <x-input type="text" name="state" label="State" value={{}}/>
            <x-input type="text" name="address" label="address" value={{}} />
            {{-- <x-input type="radio" name="email" label="Gender" /> --}}
            <x-input type="date" name="dob" label="DD-MM-YYYY" value={{}}/>          

            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>