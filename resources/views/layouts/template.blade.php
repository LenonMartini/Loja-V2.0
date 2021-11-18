<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Loja Virtual</title>
        <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{url('assets/font/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
      
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border">
            <div class="container-fluid">
             
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">@lang('pt-br.home')</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link active" href="#">@lang('pt-br.contact')</a>
                    </li>
                  
                </ul>  
                <ul class="navbar-nav ms-auto">
                   
                   <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Linguagem
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Português</a></li>
                        
                        </ul>
                    </li>-->
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>  
                </ul>
               
              </div>
            </div>
        </nav>
        <div class="container-fluid border-bottom header">
            <div class="row header-conteudo">
                <div class="col-sm-2 d-flex align-items-center area-logo">
                    <strong class="logo">Loja</strong>
                </div>
                <div class="col-md-8 area-filtro-header">
                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fa fa-phone text-danger fa-2x" aria-hidden="true"></i> 
                            <p class="phone">(42) 1111-1111</p>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-envelope text-danger fa-2x" aria-hidden="true"></i>
                            <p class="email">teste@teste.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Pesquise"  aria-describedby="button-addon2">
                                                <select class="form-select" >
                                                    <option>Todas as Categorias</option>
                                                </select>
                                                <button class="btn btn-danger" type="button" id="button-addon2">
                                                    <i class="fa fa-search text-white fa-2x" aria-hidden="true"></i>

                                                </button>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 danger d-flex align-items-center area-cart">
                    <label class="title-cart">Seu Carrinho</label>
                    <div class="quant_cart">1</div>
                    <i class="fa fa-shopping-cart fa-5x cart" aria-hidden="true"></i> 
                    <div class="total-cart">
                        <h5>R$: 999,99</h5>
                    </div>

                </div>
            </div>
        </div>

        <section class="border-bottom">
            <div class="container-fluid mb-3">
                <div class="row mt-4">
                    <div class="col-md-12 ">
                        <div class="dropdown btn-category ms-3">
                            <button class="btn btn-danger dropdown-toggle dropdow-category " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                                 Selecionar uma Categoria
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom">
                    <div class="col-md-3 border-end mb-5">
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5 class="ms-3">Filtro</h5>
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-11 ms-3">
                                                <input type="text" class="form-control form-control-sm rounded-pill" /> 
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12 mt-3 ms-3">
                                <h4>Featured Products</h4>
                                <hr class="me-4"/>
                            </div>
                            <div class="col-md-12 mt-2 ms-3">
                                ...
                            </div>
                        </div>    
                    </div>
                   
                    <div class="col-md-9 mb-5">
                        
                        @yield('content_product')
                      

                    </div>
                </div>    
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-4 p-2">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4>Featured Products</h4>
                                <hr/>
                            </div>        
                            <div class="col-mf-12">
                                ....
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4>On-Sale Products</h4>
                                <hr/>
                            </div>        
                            <div class="col-mf-12">
                                ....
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4>Top Rated Products</h4>
                                <hr/>
                            </div>        
                            <div class="col-mf-12">
                                ....
                            </div>
                        </div>    
                    </div>
                    
                </div>
            </div>
        </section>
        <div class="container-fluid mt-5">
            <footer>
                <div class="row mb-5 d-flex justify-content-center">
                    <div class="col-md-6 ps-5 pe-5">
                        <form>                         
                          <div class="d-flex gap-1">
                            
                            <input id="newsletter1" type="text" class="form-control" placeholder="Subscribe to our newsletter">
                            <button class="btn btn-danger" type="button">Subscribe</button>
                          </div>
                        </form>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4 ">
                            <h5>Categorias</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                            </ul>
                        </div>
            
                        <div class="col-4">
                            <h5>Information</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                            </ul>
                        </div>
            
                        <div class="col-4">
                            <h5>Information</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                            </ul>
                        </div>
            
                
                    </div>
                </div>
          
                <div class="d-flex justify-content-center py-1 my-1 border-top">
                    <p class="mt-2">&copy; Loja Virtual, Todos os direitos reservados.</p>
                    <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                    </ul>
                </div>
            </footer>
          </div>


        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" ></script>
    </body>
</html>
