<!doctype html>
<html lang="en">
    <head>
        <title>Trash</title>
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
            <a href="{{route('customer.create')}}">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
            </a>
            <a href="{{url('customer/view')}}">
                <button class="btn btn-primary d-inline-block m-2 float-right">Customer View</button>
            </a>

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
                            <th scope="col">ACTION</th>
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
                            <td>
                                @if($item->status == "1")
                                <a href="">
                                    <span class="badge badge-success">Active</span>
                                </a>
                                @else
                                <a href="">
                                    <span class="badge badge-danger">Inactive</span>
                                </a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('customer.force-delete', ['id'=>$item->customer_id])}}"><button class="btn btn-danger">Delete</button></a>
                                <a href="{{route('customer.restore',['id'=>$item->customer_id])}}"><button class="btn btn-success">Restore</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </body>
</html>
