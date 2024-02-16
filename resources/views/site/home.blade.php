@extends('layout.layout')

@section('conteudo')

<style>
.service-section {
  display: block;
  flex-wrap: wrap;
  justify-content: space-around;
  align-content: center;
  align-items: center;

}

.service {
  background-color: transparent;
  margin: 10px;
  padding: 20px;
  width: calc(25% - 40px);
  box-sizing: border-box;
  display: flex;
}

.service img {
  width: 100%;
  height: auto;
}

.service h2 {
  font-size: 20px;
  margin: 10px 0;
}

.service p {
  margin: 10px 0;
}

.price {
  font-weight: bold;
}

.descricoes{
    display: block;
}



</style>

 <!--==============================
    About Area
    ==============================-->
    <div class="space" data-bg-src="assets/img/bg/about3-bg.png">
        <div class="container-fluid">
            <div class="row gy-80">
                <div class="col-xl-6 order-xl-2">
                    <div style="margin-top:20%; margin-left:25%;" class="about-thumb-2">
                        <img style="border-radius: 20px; max-width:850px;" class="about-img-1" src="{{ asset('assets/servicos/Cabelo.jpeg') }}" alt="img">
                        <div class="about-thumb-num">
                            Cabelos
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-1" style="width:500px;margin-left:10%;">
                    <div class="about-content-wrap me-xl-4 mb-xl-0 mb-40">
                        <div class=" mb-0">
                            <span class="sub-title style2">Serviços - Cabelos</span>
                            <h2 class="fw-bold text-white">
                                Serviço de Luzes para Cabelo: Ilumine Sua Beleza Natural</h2>
                            <p class="sec-text mb-10">As luzes para cabelo são uma técnica versátil e incrivelmente popular que pode transformar completamente seu visual, adicionando dimensão, brilho e profundidade aos seus fios. Este serviço é uma maneira fantástica de realçar sua beleza natural, proporcionando um toque de luminosidade e frescor ao seu estilo.</p>
                            <a class="btn style3" href="about.html">LEARN MORE</a>
                        </div>
                    </div>
                    <div class="about-content-wrap me-xl-4 mb-xl-0 mb-40">
                        <div class="title-area mb-0">
                            <h2 class="fw-bold text-white">
                                Serviço de Luzes para Cabelo: Ilumine Sua Beleza Natural</h2>
                            <p class="sec-text mb-10">As luzes para cabelo são uma técnica versátil e incrivelmente popular que pode transformar completamente seu visual, adicionando dimensão, brilho e profundidade aos seus fios. Este serviço é uma maneira fantástica de realçar sua beleza natural, proporcionando um toque de luminosidade e frescor ao seu estilo.</p>
                            <a class="btn style3" href="about.html">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
