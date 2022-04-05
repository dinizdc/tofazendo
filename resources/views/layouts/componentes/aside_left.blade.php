 <!-- Left Panel -->
 <aside id="left-panel" class="left-panel">
     <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
             <ul class="nav navbar-nav">
                 <li class="active">
                     <a href="{{ route('home') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                 </li>
                 <li class="menu-title">Tarefas Ativas</li><!-- /.menu-title -->
                 <li class="menu-item">
                     <a href="{{ route('tarefasativas.index') }}" aria-expanded="false"> <i
                             class="menu-icon fa  fa-list-alt"></i>Listar</a>
                 </li>

                 <li class="menu-title">Tarefas</li><!-- /.menu-title -->
                 <li class="menu-item">
                     <a href="{{ route('tarefas.index') }}" aria-expanded="false"> <i
                             class="menu-icon fa  fa-list-alt"></i>Listar</a>
                 </li>
                 <li class="menu-title">Projetos</li><!-- /.menu-title -->
                 <li class="menu-item">
                     <a href="{{ route('projetos.index') }}" aria-expanded="false"> <i
                             class="menu-icon fa  fa-list-alt"></i>Listar</a>
                 </li>

                 {{-- COLABORADORES --}}
                 <li class="menu-title">Colaboradores</li><!-- /.menu-title -->
                 <li class="menu-item">
                     <a href="{{ route('colaboradores.ativos') }}" aria-expanded="false"> <i
                             class="menu-icon fa  fa-list-alt"></i>Listar ativos</a>
                 </li>
                 <li class="menu-item">
                     <a href="{{ route('colaboradores.inativos') }}" aria-expanded="false"> <i
                             class="menu-icon fa  fa-list-alt"></i>Listar inativos</a>
                 </li>
                 <li class="menu-item">
                     <a href="{{ route('colaboradores.index') }}" aria-expanded="false"> <i
                             class="menu-icon fa  fa-list-alt"></i>Listar todos</a>
                 </li>
             </ul>
         </div><!-- /.navbar-collapse -->
     </nav>
 </aside>
 <!-- /#left-panel -->
