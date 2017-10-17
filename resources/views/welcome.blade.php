<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OMRI Full List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600" rel="stylesheet" type="text/css">

        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        {{-- DataTables CSS --}}
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid" style="padding-right: 2rem">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <h1>OMRI Full List</h1>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
               <div class="col-1"></div>
                <div class="col-10">
                    <div class="table-responsive">
                        <table id="index" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>OMRI ID</th>
                                    <th>Product Name</th>
                                    <th>Superclass</th>
                                    <th>Classification</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($omri_list as $item)
                                <tr>
                                    <td>{!! $item->product_code !!}</td>
                                    <td>{!! $item->product_name !!}</td>
                                    <td>{!! $item->superclass !!}</td>
                                    <td>{!! $item->classification !!}</td>
                                    <td>{!! $item->category !!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8">
            // dataTable initialization
            $('#index').dataTable({ 
                // "dom": 'Bfltrip',
                "processing": true,
                "responsive": true,
                "lengthChange": true,
                "paging": true,
                "sDom": '<"top"Blfi>rt<"bottom"ip><"clear">',
                "pageLength": 25,
                "lengthMenu": [ [25, 50, 75, -1], [25, 50, 75, "All"] ]
            });            
        </script>
    </body>
</html>
