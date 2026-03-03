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
                    <th class="th_deg">Room Id</th>
                    <th class="th_deg">Customer Name</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Arrival Date</th>
                    </th>
                    <th class="th_deg">Leaving Date</th>
                    <th class="th_deg">Status</th>
                    <th class="th_deg">Room Title</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Status Update</th>
                </tr>

                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->room_id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->start_date }}</td>
                        <td>{{ $data->end_date }}</td>
                        <td>
                        @if ($data->status == 'approve')
                            <span style="color: skyblue;">approved</span>
                        @endif

                        @if ($data->status == 'rejected')
                            <span style="color: red;">rejected</span>
                        @endif

                        @if ($data->status == 'waiting')
                            <span style="color: yellow;">waiting</span>
                        @endif
                        </td>


                        <td>{{ $data->room->room_title }}</td>
                        <td>{{ $data->room->price }}</td>

                        <td>
                            <img width="60" src="room/{{ $data->room->image }}" alt="">
                        </td>

                        <td>
                            <a onclick="return confirm('Are you sure you want to delete this booking    ?');"
                                href="{{ url('booking_delete', $data->id) }}" class="btn btn-danger">Delete</a>
                        </td>

                        <td>
                            <span style="padding-bottom: 10px;">
                                <a href="{{ url('approve_book', $data->id) }}" class="btn btn-success">Approve</a>
                            </span>

                            <a href="{{ url('rejected_book', $data->id) }}" class="btn btn-warning">Rejected</a>
                        </td>
                    </tr>
                @endforeach

            </table>


            @include('admin.footer')
        </div>
</body>

</html>
