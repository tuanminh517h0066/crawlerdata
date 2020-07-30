<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('public/youtube')}}/">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Youtube</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script> 
        $('.link').on('click', function(e) {
            $(this).prop('disabled',true);
            
        });
    </script>
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
            
            <div class="col-xs-12 col-md-5 col-lg-sm4">
                <div class="panel panel-primary">
                    <div class="panel-body a">
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                                </div>
                            @endif
                            @if(Session::has('thanhcong'))
                                <div class="alert alert-success">
                                    {{Session::get('thanhcong')}}
                                </div>
                            @endif
                        

                            <form method="POST">
                            <input type="hidden" name="_token" value={{csrf_token()}}>

                                <div class="form-group">
                                    <label><h5 style="text-align: center;">Title</h5></label>
                                    <input class="form-control" placeholder="Input your title" name="titlename" type="text" autofocus="">

                                    <label><h5 style="text-align: center;">url</h5></label>
                                    <input class="form-control" placeholder="Input your url" name="urlname" type="text" autofocus="">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-md-7 col-lg-12">
                <div class="panel-heading">
                    <h3 style="text-align: center;" >Scrawl Data</h3>
                
                </div>
                <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>url</th>
                                        <th>Scrape</th>
                                        <th>Detail</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($a as $head)
                                    <tr>

                                        <td> {{$head->id_header}}</td>
                                   
                                        <td> {{$head->name}} </td>
                                    
                                        <td> {{$head->url}}</td>
                                        
                                        <td>
                                            <a href="{{asset('scrawl/'.$head->id_header)}}" > <button class="btn btn-warning"  class="link"> <span class="glyphicon glyphicon-edit"></span> Scrape</button> </a>
                                        </td>
                                        <td>
                                            <a href="{{asset('detail/'.$head->id_header)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>


                            </table>
                        </div>
                    </div>

                </div>

            </div>
            

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
