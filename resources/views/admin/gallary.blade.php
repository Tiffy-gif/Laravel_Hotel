<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
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


            <center>
                <h1 style="font-size: 40px; font-weight: bolder; color: white;">Gallary</h1>

                <div class="row">
                
                    
                @foreach ($gallary as $gallary)
                <div class="col-md-4">
                    <img style="height: 200px!important; width: 300px!important;" src="/gallary/{{ $gallary->image }}"alt="">
                    <a class="btn btn-danger" href="{{url('delete_gallary',$gallary->id)}}">Delete Image</a>
                </div>
                @endforeach

                </div>
                <form action="{{ url('uplaod_gallary') }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 30px;">
                        <label style="color: white; font-weight: bold;">Upload Image</label>
                        <input type="file" name="image" id="" required>

                    </div>

                    <div>
                        <input class="btn btn-primary" type="submit" value="Add Image">
                    </div>
                </form>
            </center>


            @include('admin.footer')
        </div>
</body>

</html>
