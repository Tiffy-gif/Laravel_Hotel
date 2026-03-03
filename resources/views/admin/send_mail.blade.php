<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
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
            <div class="div_center">
                <h1 style="font-size: 30px; font-weight: bold;">Send Main to {{ $data->name }}</h1>
                <form action="{{ url('mail', $data->id) }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="div_deg">
                        <label>Greeting</label>
                        <input type="text" name="greeting">
                    </div>

                    <div class="div_deg">
                        <label>Mail Body</label>
                        <textarea name="body"></textarea>
                    </div>

                    <div class="div_deg">
                        <label>Action Text</label>
                        <input type="text" name="action_text">
                    </div>

                    <div class="div_deg">
                        <label>Action Url</label>
                        <input type="text" name="action_url">
                    </div>

                    <div class="div_deg">
                        <label>End Line</label>
                        <input type="text" name="endline">
                    </div>

                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Add Room">
                    </div>



                </form>
            </div>

            @include('admin.footer')
        </div>
</body>

</html>
