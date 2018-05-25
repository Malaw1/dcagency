@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
        <h1>Enregistrement de Materiels</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span8">
                <div class="widget-box">
                    <div class="widget-content nopadding">
                        <form action="{{ route('equipements.store')}}" method="post" class="form-horizontal">
                            {{ csrf_field()}}
                            
                            <div class="control-group">
                                <label class="control-label">Nom de l'appareil</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Appareil" name="appareil" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Marque</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Marque" name="marque" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Modele</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Modele" name="modele" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Serie</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Numero Serie" name="serie" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Année d'acquisition</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Annee d'acquisition" name="anneAcquis" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Societe a Contacter</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Societer a contacter" name="societeContacter" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Echelle</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Echelle" name="echelle" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Precision</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Precision" name="precision" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Code</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Code" name="code" spellcheck="false" />
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

