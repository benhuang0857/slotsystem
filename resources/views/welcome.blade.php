<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>斯洛</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .occupied
            {
                -webkit-filter:brightness(.5);
            }
        </style>

<style>
    body, html {
    height: 100%;
    }

    .bg {
    /* The image used */
    background-color: black;
    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
</style>
    </head>    
    <body>

        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="/" class="col-12 align-items-center text-dark text-decoration-none" style="text-align: center;">
                    <span style="font-size:30px">天鷹</span>
                </a>
            
                <ul class="nav col-12 justify-content-center mb-md-0" style="font-size: 25px">
                    <li><a href="#" class="nav-link px-2 link-secondary">首頁</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">斯洛</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">魚機</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">鋼珠</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">客戶</a></li>
                </ul>
            </header>
        </div>

        <div class="album py-5" style="background: black;">
            <div class="container">
        
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-6 g-6">
                    @foreach ($Machines as $machine)
                        <div class="col">
                            <div class="card shadow-sm">

                                <div style= "position:relative ">
                                    
                                    @if ($machine->status == 'off')
                                        <img class="card-img-top occupied" src="{{asset('uploads/'.$machine->image)}}" alt="Card image cap">
                                        <div style= "font-size:30px; position:absolute; left:30%; top:50%; color:#fff; font-weight:bold ">使用中</div> 
                                    @else
                                    <a href="{{$machine->ip}}">
                                        <img class="card-img-top" src="{{asset('uploads/'.$machine->image)}}" alt="Card image cap">
                                    </a>
                                    @endif
                                    
                                </div>
                                
                                <div class="card-body">
                                <p class="card-text">{{$machine->name}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">進入</button>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        <div class="container">
            <footer class="row row-cols-5 py-5 my-5 border-top">
              <div class="col">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    天鷹
                </a>
                <p class="text-muted">© 2021</p>
              </div>
          
              <div class="col">
          
              </div>
          
              <div class="col">
                <h5>首頁</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">儲值</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">會員專區</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">優惠</a></li>
                </ul>
              </div>
          
              <div class="col">
                <h5>遊戲</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">斯洛</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">鋼珠</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">魚機</a></li>
                </ul>
              </div>
          
              <div class="col">
                <h5>QA</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">如何儲值</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">關於我們</a></li>
                </ul>
              </div>
            </footer>
        </div>
    </body>
</html>
