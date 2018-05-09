@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Echantillons</a> <a href="#" class="current">Réception</a></div>
		<h1>Echantillons</h1>
	</div>
	<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Georgia, serif; color: #17b762}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #17b762 !important;} .bootstrap-iso .btn-custom{background: #17b762} .bootstrap-iso .btn-custom:hover{background: #03a34e;}.bootstrap-iso .outline, .bootstrap-iso .outline:focus{background-color: transparent; border: 2px solid #17b762} .bootstrap-iso .outline:hover{background-color: transparent; border: 2px solid#3fdf8a; color: #3fdf8a !important}.bootstrap-iso .form-control:focus { border-color: #17b762; -webkit-box-shadow: none; box-shadow: none;} .bootstrap-iso .has-error .form-control:focus{-webkit-box-shadow: none; box-shadow: none;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#17b762; background-color: #ffffff; border-radius: 4px; padding-left:12px}</style>

	<div class="container-fluid"><hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
						<h5>Saisir les informations de l'echantillon</h5>
					</div>
					<br>
					<br>
					<div class="widget-content nopadding">
						<div class="bootstrap-iso">
							<div class="container-fluid">
								<div class="row">
										<form class="form-horizontal" method="post" action="{{ url('/admin/add-echantillon')}}" name="add_echan" id="add_echan" novalidate="novalidate"> {{ csrf_field() }}
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="date" >
													Date reçu
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="date" name="dateRecu"  type="date"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="select1">
													Nom client
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
									                <input class="form-control" type="text" placeholder="Type here for auto complete…" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Ahmedabad&quot;,&quot;India&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" class="span11">
									              </div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="nomProduit">
													Nom
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="nomProduit" name="nomProduit" placeholder="Nom du produit" type="text"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="formeGalenique">
													Forme galenique
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<textarea class="form-control" cols="40" id="formeGalenique" name="formeGalenique" rows="4"></textarea>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="quantiteRecu">
													Quantit&eacute; re&ccedil;u
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="quantiteRecu" name="quantiteRecu" placeholder="Quantit&eacute; re&ccedil;u" type="text"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="quantiteLivree">
													Quantit&eacute; livr&eacute;e
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="quantiteLivree" name="quantiteLivree" placeholder="Quantit&eacute; livr&eacute;e" type="text"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="fournisseur">
													Nom fournisseur
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="fournisseur" name="fournisseur" placeholder="Nom fournisseur" type="text"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="dateFab">
													Date fabrication
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control form-control" id="dateFab" name="dateFab" placeholder="MM/DD/YYYY" type="date"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2" for="dateExp">
													Date p&eacute;remption
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="dateExp" name="dateExp" placeholder="MM/DD/YYYY" type="date"/>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4 col-sm-offset-2">
													<button class="btn btn-custom btn-lg btn-block outline" name="Validate" type="Validate">
														Enregistrer
													</button>
												</div>
											</div>
										</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection