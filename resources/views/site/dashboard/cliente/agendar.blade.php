@extends('site.dashboard.dashboardLayout.layout')

<style>
    .user-info h4{
        margin-left: 0px;
    }
</style>

@section('nome')

<h4>Olá, {{ $cliente->nomeCliente }}</h4>

@endsection


<style>
   .selecao{
      height: 400px;
      display: flex;
      justify-content: space-around;
      padding: 0% 15%;
  }
  .list-group{
      justify-content: space-between;
      height: 100%;
      text-align: center;
      font-weight: bold;
      flex-direction: row;
  }
  .list-group-item{
      width: 400px;
      border-radius: 20px;
  }

.buttonCat {
  height: 50px;
  width: 150px;
  position: relative;
  background-color: transparent;
  cursor: pointer;
  border: 2px solid #ffffff;
  overflow: hidden;
  border-radius: 30px;
  color: gainsboro;
  transition: all 0.5s ease-in-out;
}

.btnCat-txt {
  z-index: 1;
  font-weight: 800;
  letter-spacing: 4px;
}

.type1::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  transition: all 0.5s ease-in-out;
  background-color: #333;
  border-radius: 30px;
  visibility: hidden;
  height: 10px;
  width: 10px;
  z-index: -1;
}

.buttonCat:hover {
  box-shadow: 1px 1px 90px #acacac;
  color: #fff;
}

.type1:hover::after {
  visibility: visible;
  transform: scale(100) translateX(2px);
}

.list-group a{
    padding-right: 1%;
}

</style>

@section('conteudo')
    <h2 style="color: gainsboro; text-align: center;padding-top:5%;">Agendamento</h2>

    <h3 style="text-align: center;color: gainsboro;font-size:15pt;padding-top:1%;">Tipo de serviço</h3>

    <section style="padding:0% 10%; margin-top:4%;" class="selecao">
        <div class="list-group" style="flex-direction: row;">
            <a href="#" class=""><button class="buttonCat type1">Cabelos</button></a>
            <a href="#" class=""><button class="buttonCat type1">Maquiagens</button></a>
            <a href="#" class=""><button class="buttonCat type1">Unhas</button></a>
            <a href="#" class=""><button class="buttonCat type1">Sobrancelhas</button></a>
            <a href="#" class=""><button class="buttonCat type1">Depilações</button></a>
            <a href="#" class=""><button class="buttonCat type1">Massagens</button></a>
            <a href="#" class=""><button class="buttonCat type1">Rosto</button></a>
            <a href="#" class=""><button class="buttonCat type1">Barba</button></a>
          </div>
    </section>

@endsection
