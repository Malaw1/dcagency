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
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span><strong>Analyses &amp; Tests</strong> </span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span><strong>Equipements</strong> </span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span><strong>Stock</strong> </span></a></li>
    <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span><strong>Utilisateurs &amp; Personnel</strong> 
      <ul>
        <li><a href="/users/listeperso"><strong>Accueil</strong> </a></li>
        <li><a href="#">Unites Techniques</a></li>
        <li><a href="#">Autres</a></li>
      </ul>
    </li>
    <li><a href="{{('/stocks')}}"><i class="icon icon-tint"></i><strong>Stock &amp; Fournisseurs</strong> </a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span><strong>Tableau de bord</strong></span></a></li>
  </ul>
</div>

<!--sidebar-menu-->