<!DOCTYPE html>
<html>
    <head>
        <title>Swap Development | Pending for Approval</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }
            a{
                color: #000;
                text-decoration: none;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                /*margin-bottom: 40px;*/
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Your Account is Pending for Approval...</div>
                <br><div class="title">
                    @foreach($a as $b)
                    {{$b->created_at}}
                    @endforeach
                    <a class="btn btn-default btn-flat" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </div>
            </div>
        </div>
    </body>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
</html>
