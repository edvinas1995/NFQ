@extends('app')

@section('content')
    <div class="main-header-bottom">
        <div class="overlay"></div>
        <span>Užsisakykite asmeninę sporto programą</span>
    </div>
    <section class="about section-block">
        <div class="container">
            <div class="headline">
                <span>Apie mane</span>
            </div>
            <div class="content row">
                <article class="col-md-8 col-xs-12">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </article>
                <div class="col-md-4 col-xs-12">
                    <img src="{{asset('images/profile_photo.jpg')}}" alt="asmeninis treneris">
                </div>
            </div>

        </div>
    </section>
    <section class="testimonials section-block">
        <div class="container">
            <div class="headline">
                <span>Atsiliepimai</span>
            </div>
            <div class="content">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-block">
                                <div class="tes-top">
                                    <div class="image img-circle" style="background-image: url('{{asset('images/testimonial.jpg')}}');"></div>
                                    <span>Juozas Toralis</span>
                                </div>
                                <p>Nuostabus zmogus, ir treneris! Motyvuojantis,ikvepiantis. Tikras savo srities profesionalas. Didziausios rekomendacijos!</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block">
                                <div class="tes-top">
                                    <div class="image img-circle" style="background-image: url('{{asset('images/testimonial_2.jpg')}}');"></div>
                                    <span>Tomas Gavėnas</span>
                                </div>
                                <p>Esu labai patenkintas jo sudaryta sporto programa, jei iskyla kokiu klausimu labai greit atsako, mandagiai ir maloniai bendrauja. Duoda patarimu ir paskatina 10 balu.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block">
                                <div class="tes-top">
                                    <div class="image img-circle" style="background-image: url('{{asset('images/testimonial_3.jpeg')}}');"></div>
                                    <span>Jurgis Lasauskas</span>
                                </div>
                                <p>Labai gera programa. Kas buvo neaisku visada sulaukdavau issamaus paaiskinimo. Domisi kliento pasiekimais. Sulauki patarimu ir palaikymo. Tikrai rekomenduoju kaip treneri.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-block">
                                <div class="tes-top">
                                    <div class="image img-circle" style="background-image: url('{{asset('images/testimonial_4.jpeg')}}');"></div>
                                    <span>Edvinas Kolbatas</span>
                                </div>
                                <p>Na man ir super kolkas viskas!!!Ypac del mitybos plano...ir aisku fizine kondicija gereja. Rekomenduoju!!!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="order-form section-block">
        <div class="container">
            <div class="headline">
                <span>Užsakymo forma</span>
            </div>
            <div class="content">
                @include('components.notifications.all')
                <form method="post" action="{{route('order.save')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Vardas Pavardė</label>
                                <input type="text" name="name" placeholder="Įrašykite vardą" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>El.pašto adresas</label>
                                <input type="email" name="email" placeholder="Įrašykite elektroninį pašto adresą" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Ūgis (cm)</label>
                                <input type="text" name="height" placeholder="Įrašykite ūgį" value="{{old('height')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Svoris</label>
                                <input type="text" name="weight" placeholder="Įrašykite svorį" value="{{old('weight')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Amžius</label>
                                <input type="text" name="age" placeholder="Įrašykite amžių" value="{{old('age')}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Nuotraukos</label>
                                <input type="file" name="photos[]" multiple value="{{old('photos')}}">
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <span>Visus laukus privaloma užpildyti</span>
                        <input type="submit" value="Užsisakyti" class="bt bt-info">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
@endsection