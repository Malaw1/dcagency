<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{('../admin/dashboard')}}"><i class="icon icon-home"></i> <span> <strong>Accueil</strong> </span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span><strong>Echantillons</strong> </span> <span class="label label-important">2</span> </a>
     <ul>
        <li><a href="{{ url('/admin/add-echantillon') }}">Ajouter échantillons</a></li>
        <li><a href="{{ url('/admin/voir-echantillon') }}">Consulter échantillons</a></li>
      </ul> 
    </li>
    <li> <a href="#"><i class="icon icon-inbox"></i> <span><strong>Analyses &amp; Tests</strong> </span></a> </li>
    <li><a href="#"><i class="icon icon-th"></i> <span><strong>Equipements</strong> </span></a></li>
    <li><a href="{{('/stocks')}}"><i class="icon icon-fullscreen"></i> <span><strong>Stock &amp; Fournisseur</strong> </span></a></li>
    <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span><strong>Utilisateurs &amp; Personnel</strong> 
      <ul>
        <li><a href="/users/listeperso"><strong>Personnel</strong> </a></li>
        <li><a href="/unite">Unites Techniques</a></li>
        <li><a href="#">Autres</a></li>
      </ul>
    </li>
     <li class="content"> <span>Status Backup</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 43%;" class="bar"></div>
      </div>
      <span class="percent">36%</span>
      <div class="stat">1501.94 / 4000 GB</div>
    </li>
    <li class="content"> <span>Utilisation de l'espace disque</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 49%;" class="bar"></div>
      </div>
      <span class="percent">49%</span>
      <div class="stat">1999.55/ 4000 GB</div>
    </li>
  </ul>
</div>

<!--sidebar-menu-->