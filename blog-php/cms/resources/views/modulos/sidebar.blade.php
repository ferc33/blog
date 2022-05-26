<aside class="main-sidebar sidebar-bg-dark sidebar-color-primary shadow">
      <div class="brand-container">
            <a href="javascript:;" class="brand-link">     
               <img src="{{url('/')}}/vistas/img/icono.jpg" alt="Juanito Travel" class="brand-image img-circle elevation-1" class="brand-image opacity-10 shadow">
               <span class="brand-text fw-light">Juanito Travel</span>
       </a>
       <a class="pushmenu mx-1" data-lte-toggle="sidebar-mini" href="javascript:;" role="button">
        <i class="fas fa-angle-double-left"></i></a>
</div>
<!-- Sidebar -->
<div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: -8px; width: 249px; height: 312px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 8px; height: 100%; width: 100%;">
    <nav class="mt-2">
          <!-- Sidebar Menu -->
          <ul class="nav nav-pills nav-sidebar flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                {{-- boton de administrador --}}
                <li class="nav-item ">
                  <a href="javascript:;" class="nav-link " >
                         <i class="fa-solid fa-user"></i>
                         <p>
                              Administrador
                      </p>
              </a>
      </li>
  {{-- boton de blog --}}
  <li class="nav-item ">
          <a href="{{url('/')}}" class="nav-link ">
             <i class="fas icon fas fa-home"></i>
             <p>
              Blog            
      </p>
</a>       
</li>         
{{-- boton de administradores --}}
<li class="nav-item ">
  <a href="{{url('/')}}/administradores" class="nav-link ">
     <i class="fas icon fas fa-users-cog"></i>
     <p>
      Administradores            
</p>
</a>       
</li>
{{-- boton de categorias --}}
<li class="nav-item ">
  <a href="{{url('/')}}/categorias" class="nav-link " >
         <i class="fa-solid fa-list-ul"></i>
         <p>
              Categorias
      </p>
</a>
</li>
{{-- boton de articulos          --}}
<li class="nav-item ">
      <a href="{{url('/')}}/articulos" class="nav-link ">
           <i class="fas icon fas fa-sticky-note"></i>
           <p>Articulos </p>
   </a>       
</li>
{{-- boton de opiniones --}}
<li class="nav-item ">
      <a href="{{url('/')}}/opiniones" class="nav-link ">
           <i class="fas icon fas fa-user-check"></i>
           <p> Opiniones </p>
   </a>       
</li>
{{-- boton de banner --}}
<li class="nav-item ">
      <a href="{{url('/')}}/banner" class="nav-link ">
           <i class="fas icon far fa-images"></i>
           <p> Banner </p>
   </a>       
</li>
{{-- boton de anuncios --}}
<li class="nav-item ">
      <a href="{{url('/')}}/anuncios" class="nav-link ">
           <i class="fas icon far fa-bullhorn"></i>
           <p> Anuncios </p>
   </a>       
</li>
{{-- boton de sitio web --}}
<li class="nav-item ">
      <a href="{{substr(url('/'),0,-11)}}" class="nav-link active ">
           <i class="fas icon far fa-globe"></i>
           <p> Ver sitio </p>
   </a>       
</li>
</nav>
  </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 51.3957%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
  <!-- /.sidebar -->
</aside>


{{-- <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../../index.html" class="nav-link ">
                <i class="nav-icon far fa-circle"></i>
                <p>Dashboard v1
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../../index2.html" class="nav-link ">
                <i class="nav-icon far fa-circle"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../../index3.html" class="nav-link ">
                <i class="nav-icon far fa-circle"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
 --}}