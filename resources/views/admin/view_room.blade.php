<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .table_deg {
            border: 2px solid white;
            width: 90%;
            margin: auto;
            margin-top: 20px;
            text-align: center;
        }

        .th_deg {
            background: skyblue;
            padding: 15px;
        }

        tr {
            border: 3px solid white;
        }

        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <header class="header">
        @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <table class="table_deg">
                <tr>
                    <th class="th_deg">Room Title</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Wifi</th>
                    <th class="th_deg">Room Type</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Update</th>
                </tr>
                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->room_title }}</td>
                        <td>{!! Str::limit($data->description, 60) !!}</td>
                        <td>{{ $data->price }}$</td>
                        <td>{{ $data->wifi }}</td>
                        <td>{{ $data->room_type }}</td>
                        <td>
                            <img width="60" src="room/{{ $data->image }}" alt="">
                        </td>
                        
                        <td>
                            <a class="btn btn-warning" href="{{ url('room_update', $data->id) }}">Update</a>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure you want to delete this room?');"
                                class="btn btn-danger" href="{{ url('room_delete', $data->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </table>
            @include('admin.footer')
        </div>
</body>

</html>
