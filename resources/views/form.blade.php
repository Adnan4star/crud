<!doctype html>
<html lang="en">
<head>
    <title>User Registration</title>
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
    <form action="{{route('register.post')}}" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">User Registration System</h1>
            {{--sending varibale way is different--}}
            @php
              $demo = 1;  
            @endphp
            {{--represents component (x-)and its name(input)--}}
            <x-input type="text" name="name" label="Name" :demo="$demo"/>
            <x-input type="email" name="email" label="Email" />
            <x-input type="password" name="password" label="Password" />
            <x-input type="password" name="password_confirm" label="Confirm Password" />          

            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>
