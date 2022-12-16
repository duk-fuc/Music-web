<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Download</title>
  </head>
  <body>
    
    <div class="container-fluid">
        <div class="d-flex justify-content-center form-inline">
            <a href="{{url('download/'.$song->id)}}" class="btn-block">
    <button type="button" class="btn btn-dark btn-lg btn-block">
        <span class="spinner-grow spinner-grow-sm text-info"></span>
    
        Download
    </button>
    
</a>
</div>
</div>
<div>
    <h4 style="text-align: center"><b>DONATE TO ME!</b></h4>
    <form id="contactform">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="form-group">
                    {{-- <h5 style="text-align: center"><b>TP Bank</b></h5>
                    <img style="height: 365px ; weight : 365px" src="https://scontent.fhan5-11.fna.fbcdn.net/v/t39.30808-6/319023106_833743867890211_2152023331470078812_n.jpg?stp=cp6_dst-jpg&_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=mSK8nwvedSgAX8OXUth&tn=ChRnvN3Zb9QWImuk&_nc_ht=scontent.fhan5-11.fna&oh=00_AfDR2rsxDxM4eU7cA65VKdXNXVA7MdjE0G7EVh2Zg5nwlg&oe=639C8EE0" alt=""> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="form-group" style="text-align: center">
                    <h5 style="text-align: center"><b>TP Bank</b></h5>
                    <img style="height: 365px ; weight : 365px;text-align: center " src="https://scontent.fhan5-2.fna.fbcdn.net/v/t39.30808-6/319908115_562044301921464_3671916312954981406_n.jpg?stp=cp6_dst-jpg_s960x960&_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=ADjWh1eTLvcAX9_A4UX&_nc_ht=scontent.fhan5-2.fna&oh=00_AfCnBOPRpEMo-zUkyp_sudvL4rIcpf3QjfoZWePzo3L3pQ&oe=63A0B7AD" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                   {{-- <h5 style="text-align: center"><b>MoMo</b></h5> --}}
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn oneMusic-btn mt-30" type="submit"><b>THANKS!</b>  <i class="fa fa-angle-double-right"></i></button>
            </div>
        </div>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>