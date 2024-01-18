<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
        <div class="container">
            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">DOB</th>
                            <th scope="col">ADDRESS</th>
                            <th scope="col">STATE</th>
                            <th scope="col">COUNTRY</th>
                            <th scope="col">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $item)
                            
                        <tr class="">
                            <td scope="row">{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->dob}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->state}}</td>
                            <td>{{$item->country}}</td>
                            <td>{{$item->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </body>
</html>
