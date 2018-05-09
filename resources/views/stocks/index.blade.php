@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Acceuil</a> <a href="#" class="current">Stocks</a> </div>
    <h1>Gestion du Stock</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Reactifs |<a style="color: green;" href="{{('/reactifs')}}">Voire + de Reactifs</a></h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Designation</th>
                  <th>Conditionnement</th>
                  <th>Num Lot</th>
                  <th>Fabriquant</th>
                  <th>Quantite</th>
                  <th>Date de Fab.</th>
                  <th>Date de Peremp. </th>
                </tr>
              </thead>
              <tbody>
              @foreach ($reactifs as $reactifs )
                  <tr class="odd gradeX">
                  <td>{{ $reactifs->id}}</td>
                  <td>{{ $reactifs->designation}}</td>
                  <td>{{ $reactifs->conditionnement}}</td>
                  <td>{{ $reactifs->lot}}</td>
                  <td>{{ $reactifs->fabriquant}}</td>
                  <td>{{ $reactifs->quantite}}</td>
                  <td>{{ $reactifs->dateFab}}</td>
                  <td>{{ $reactifs->dateExp}}</td>
                </tr>
              @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Vaccins |<a style="color: green;" href="{{('#')}}">Voire + de Vaccins</a></h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Date Recu</th>
                  <th>Numero Enreg.</th>
                  <th>Nom du Produit</th>
                  <th>Dosage</th>
                  <th>Forme Pharceutique</th>
                  <th>Quantite</th>
                  <th>Fabricant</th>
                  <th>Date de Perem.</th>
                  <th>Lot</th>
                  <th>Donneur d'ordre</th>
                </tr>
              </thead>
              <tbody>
               @foreach ($vaccins as $vaccins )
                  <tr>
                      <td>{{ $vaccins->id}}</td>
                      <td>{{ $vaccins->dateRecu}}</td>
                      <td>{{ $vaccins->numEnreg}}</td>
                      <td>{{ $vaccins->nomProduit}}</td>
                      <td>{{ $vaccins->dosage}}</td>
                      <td>{{ $vaccins->formePharceutique}}</td>
                      <td>{{ $vaccins->quantite}}</td>
                      <td>{{ $vaccins->fabriquant}}</td>
                      <td>{{ $vaccins->dateExp}}</td>
                      <td>{{ $vaccins->lot}}</td>
                      <td>{{ $vaccins->donneurOrdre}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Echantillons |<a style="color: green;" href="{{('/admin/voir-echantillon')}}">Voire + d'Echantillons</a></h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered table-striped with-check">
                  <thead>
                <tr>
                  <th><strong>ID</strong></th>
                  <th><strong>Date Reçu</strong></th>
                  <th><strong>Nom Produit</strong></th>
                  <th><strong>Forme Galenique</strong></th>
                  <th><strong>Quantité Reçu</strong></th>
                  <th><strong>Quantité Livrée</strong></th>
                  <th><strong>Nom fournisseur</strong></th>
                  <th><strong>Date fabrication</strong></th>
                  <th><strong>Date Péremption</strong></th>
                </tr>
              </thead>
              <tbody>
                	@foreach($echantillons as $echantillon)
                <tr class="gradeU">
                  <td>{{ $echantillon->id }}</td>
                  <td>{{ $echantillon->dateRecu }}</td>
                  <td>{{ $echantillon->nomProduit }}</td>
                  <td>{{ $echantillon->formeGalenique }}</td>
                  <td>{{ $echantillon->quantiteRecu }}</td>
                  <td>{{ $echantillon->quantiteLivree }}</td>
                  <td>{{ $echantillon->fournisseur }}</td>
                  <td>{{ $echantillon->dateFab }}</td>
                  <td>{{ $echantillon->dateExp }}</td>
                </tr>
                @endforeach
              </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Substances de references |<a style="color: green;" href="{{('/substances')}}">Voire + Substances</a></h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered table-striped with-check">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Designation</th>
                  <th>Conditionnement</th>
                  <th>Quantite</th>
                  <th>Lot</th>
                  <th>Exp. </th>
                  <th>fabricant</th>                  
                </tr>
              </thead>
              <tbody>
              @foreach ($substances as $substances )
                  <tr>
                      <td>{{ $substances->id}}</td>
                      <td>{{ $substances->designation}}</td>
                      <td>{{ $substances->conditionnement}}</td>
                      <td>{{ $substances->quantiteRecue}}</td>
                      <td>{{ $substances->lot}}</td>
                      <td>{{ $substances->dateExp}}</td>
                      <td>{{ $substances->fabricant}}</td>
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


@endsection