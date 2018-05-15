<!--sidebar-menu-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="script.js"></script>

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
<<<<<<< HEAD
  <ul class="nav nav-sidebar">
    <li class="#"><a href="{{('../admin/dashboard')}}"><i class="icon icon-home" style="font-size: 24px;color:  #fff"></i> <span> <strong>Accueil</strong> </span></a> </li>
=======
  <ul class="nav navbar">
    <li><a href="{{('../admin/dashboard')}}"><i class="icon icon-home" style="font-size: 24px;color:  #fff"></i> <span> <strong>Accueil</strong> </span></a> </li>
>>>>>>> 87eca860d9eb9e68bf12a3f0b42535c6438ee83d
    <li class="submenu"> <a href="#"><i class="icon icon-beaker" style="font-size: 24px;color:  #fff"></i> <span><strong>Echantillons</strong> </span> <span class="label label-important">2</span> </a> 
     <ul>
        <li><a href="{{ url('/admin/add-echantillon') }}">Ajouter échantillons</a></li>
        <li><a href="{{ url('/admin/voir-echantillon') }}">Consulter échantillons</a></li>
      </ul> 
    </li>
    <li> <a href="#"><i class="icon icon-stethoscope" style="font-size: 24px;color:  #fff"></i> <span><strong>Analyses &amp; Tests</strong> </span></a> </li>
    <li><a href="#"><i class="icon icon-cogs" style="font-size: 24px;color:  #fff"></i> <span><strong>Equipements</strong> </span></a></li>
    <li><a href="{{('/stocks')}}"><i class="icon icon-fullscreen" style="font-size: 24px;color:  #fff"></i> <span><strong>Stock &amp; Fournisseur</strong> </span></a></li>
    <li class="submenu"><a href="#"><i class="icon icon-group" style="font-size: 24px;color:  #fff"></i> <span><strong>Utilisateurs &amp; Personnel</strong> 
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
<<<<<<< HEAD
<script>
  $(".nav a").on("click", function() {
  $(".nav").find(".active").removeClass("active");
  $(this).parent().addClass("active");
});
</script>
=======

<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    });
</script> 
>>>>>>> 87eca860d9eb9e68bf12a3f0b42535c6438ee83d
