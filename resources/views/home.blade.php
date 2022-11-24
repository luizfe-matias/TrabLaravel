<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
    More Templates Visit ==> Free-Template.co
    -->
    <title>Restaurante Virgolini</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="Free-Template.co" />

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">



    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Restaurante Virgolini</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#section-about" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="#section-offer" class="nav-link">Ofertas</a></li>
                    <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="#section-gallery" class="nav-link">Galeria</a></li>
                    <li class="nav-item"><a href="#section-contact" class="nav-link">Contato</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Cadastro</a></li>
                    <li class="nav-item"><a href="http://127.0.0.1:8000/logout" class="nav-link">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center ftco-vh-100">
                <div class="col-md-12">
                    <h1 class="ftco-heading ftco-animate mb-3">Bem vindo ao Restaurante Virgolini</h1>

                    <p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">Faça uma reserva</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="ftco-section" id="section-about">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ftco-animate mb-5">
                    <h4 class="ftco-sub-title">Nossa História</h4>
                    <h2 class="ftco-primary-title display-4">Bem Vindo</h2>
                    <p>O restaurante Virgolini surgiu de uma ideia na cidade de Veneza no norte da Italia, com muita fé e esperança essa ideia ser tornou realidade</p>

                    <p class="mb-4">Pelas ruas de Veneza surgiu o restaure Virgolini, com a diversidade da culinaria italiana e com ótimo atendimento.</p>
                    <p><a href="#" class="btn btn-secondary btn-lg">Nossa História</a></p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
                    <img src="images/about_img_1.jpg" alt="Free Template by Free-Template.co">
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="ftco-section bg-light" id="section-offer">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h4 class="ftco-sub-title">Nossas Ofertas</h4>
                    <h2 class="display-4">Ofertas &amp; Promoções </h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">Algumas de nossas principais ofertas e promoções.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel ftco-owl">

                        <div class="item">
                            <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                                <img src="{{ asset('images/pizza.jpeg') }}" alt="Pizza de peperoni" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">$39.50</h5>
                                    <h5 class="mt-0 h4">Massas</h5>
                                    <p class="mb-4">Uma deliciosa pizza, com diversos sabores e com a receita original italiana.</p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Compre Agora!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                                <img src="{{ asset('images/lasagna.jpg') }}" alt="Free Template by Free-Template.co" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">$19.50</h5>
                                    <h5 class="mt-0 h4">Lasagna</h5>
                                    <p class="mb-4">Uma deliciosa lasanha, com a originalidade italiana e todo o sabor.</p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Compre Agora!</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                                <img src="{{ asset('images/ravioli.jpg') }}" alt="Free Template by Free-Template.co" class="img-fluid">
                                <div class="media-body p-md-5 p-4">
                                    <h5 class="text-primary">$20.50</h5>
                                    <h5 class="mt-0 h4">Ravioli</h5>
                                    <p class="mb-4">O famoso ravioli, quente e saboroso.</p>

                                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Compre Agora!</a></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="ftco-section" id="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h2 class="display-4">Menu Atual</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center">

                    <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item ftco-animate">
                            <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
                        </li>
                        <li class="nav-item ftco-animate">
                            <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
                        </li>
                        <li class="nav-item ftco-animate">
                            <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
                        </li>
                    </ul>

                    <div class="tab-content text-left">
                        <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                            <div class="row">
                                <div class="col-md-6 ftco-animate">
                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$24.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$14.50</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ftco-animate">
                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$12.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$18.50</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                            <div class="row">
                                <div class="col-md-6 ftco-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$14.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$24.50</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ftco-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$18.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$12.50</h6>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                            <div class="row">
                                <div class="col-md-6 ftco-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$24.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$14.50</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 ftco-animate">

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$18.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$35.50</h6>
                                        </div>
                                    </div>

                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">$12.50</h6>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->


    <section class="ftco-section" id="section-gallery">
        <div class="container">
            <div class="row ftco-custom-gutters">

                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h2 class="display-4">Food Gallery</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
                        <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
                        <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
                        <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-4 ftco-animate">
                    <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
                        <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
                        <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
                        <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="ftco-section bg-light" id="section-contact">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center mb-5 ftco-animate">
                    <h2 class="display-4">Fale Conosco</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-7">

                        </div>
                    </div>
                </div>

                <div class="col-md mb-5 ftco-animate">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name" class="sr-only">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Seu Nome">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Seu email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Mensagem</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escreva sua mensagem"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <div id="map"></div>
    <!-- END section -->


    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md ftco-animate">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">The Restaurant</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Sobre Nós</a></li>
                                    <li><a href="#" class="py-2 d-block">Chefs</a></li>
                                    <li><a href="#" class="py-2 d-block">Contatos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md ftco-animate">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Communities</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="py-2 d-block">Support</a></li>
                                    <li><a href="#" class="py-2 d-block">Sharing is Caring</a></li>
                                    <li><a href="#" class="py-2 d-block">Better Web</a></li>
                                    <li><a href="#" class="py-2 d-block">Good Template</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);"></div>
                        <div class="col-lg-8 p-5">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <small>CLOSE </small><span aria-hidden="true">&times;</span>
                            </button>
                            <h1 class="mb-4">Reserve A Table</h1>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="m_fname">First Name</label>
                                        <input type="text" class="form-control" id="m_fname">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="m_lname">Last Name</label>
                                        <input type="text" class="form-control" id="m_lname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="m_email">Email</label>
                                        <input type="email" class="form-control" id="m_email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="m_people">How Many People</label>
                                        <select name="" id="m_people" class="form-control">
                                            <option value="1">1 People</option>
                                            <option value="2">2 People</option>
                                            <option value="3">3 People</option>
                                            <option value="4+">4+ People</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="m_phone">Phone</label>
                                        <input type="text" class="form-control" id="m_phone">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="m_date">Date</label>
                                        <input type="text" class="form-control" id="m_date">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="m_time">Time</label>
                                        <input type="text" class="form-control" id="m_time">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="m_message">Message</label>
                                        <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>

    <script src="js/jquery.animateNumber.min.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

<script>
    Swal.fire({
    title: 'Login Form',
    html: `<input type="text" id="login" class="swal2-input" placeholder="Username">
    <input type="password" id="password" class="swal2-input" placeholder="Password">`,
    confirmButtonText: 'Sign in',
    focusConfirm: false,
    preConfirm: () => {
    const login = Swal.getPopup().querySelector('#login').value
    const password = Swal.getPopup().querySelector('#password').value
    if (!login || !password) {
    Swal.showValidationMessage(`Please enter login and password`)
    }
    return { login: login, password: password }
    }
    }).then((result) => {
    Swal.fire(`
    Login: ${result.value.login}
    Password: ${result.value.password}
    `.trim())
    })

</script>
</body>

</html>