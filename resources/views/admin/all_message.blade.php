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
                <th class="th_deg">Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Message</th>
                <th class="th_deg">Send Mail</th>
            </tr>
            
            @foreach ($data as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->message}}</td>
                    <td>
                        <a href="{{url('send_mail',$data->id)}}" class="btn btn-success">sent mail</a>
                    </td>
                    
                </tr>
            @endforeach
        @include('admin.footer')        
      </div>
  </body>
</html> 

                