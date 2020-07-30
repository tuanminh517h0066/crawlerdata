<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('public/youtube')}}/">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chanel detail</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>
<body>
    <div class="row">
        <div class="col-lg-12 a">
        <h1 class="page-header" >
            scrawling web</h1>
            <h3 style="
                text-align: center;
                color: white;"> For Bad Habit Store </h3>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-7 col-lg-12">
                <div class="panel-heading">
                    <h3 style="text-align: center;" >Detail data of scrawling web</h3>
                    
                </div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>

                                <tr class="bg-primary">
                                   
                                   <th>Title</th>
                                   <th>View</th>
                                   <th>Thumbrial</th>

                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($details as $detail)
                                <tr>
                                    <td> {{$detail->title}} </td>
                                    <td> {{$detail->price}} </td>
                                    <td>
                                        <img height="150px" src="{{$detail->thumbnail}}" alt="" class="thumbnail">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>
            <!--den cho nay-->
                

            </div>

        </div>
        <footer class="page-footer font-small blue">

<!-- Copyright -->
            <div class="footer-copyright text-center py-3" style="background: black; padding: 30px; color: white">© 2020 Copyright:
                <a href="http://topfilms.unaux.com/" > Topfilms member</a>
            </div>
            <!-- Copyright -->

        </footer>
    
</body>
</html>