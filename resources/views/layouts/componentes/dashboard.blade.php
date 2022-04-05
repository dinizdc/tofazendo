 <!-- Animated -->
 <div class="animated fadeIn">
     <!-- Widgets  -->
     <div class="row">
         <div class="col-lg-4 col-md-6">
             <div class="card">
                 <div class="card-body">
                     <div class="stat-widget-five">
                         <div class="stat-icon dib flat-color-3">
                             <i class="ti-layout"></i>
                         </div>
                         <div class="stat-content">
                             <div class="text-left dib">
                                 <div class="stat-text"><span class="count">349</span></div>
                                 <div class="stat-heading">Tarefas Ativas</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


         <div class="col-lg-4 col-md-6">
             <div class="card">
                 <div class="card-body">
                     <div class="stat-widget-five">
                         <div class="stat-icon dib flat-color-2">
                             <i class="ti-view-list-alt"></i>
                         </div>
                         <div class="stat-content">
                             <div class="text-left dib">
                                 <div class="stat-text"><span class="count">3435</span></div>
                                 <div class="stat-heading">Tarefas</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-lg-4 col-md-6">
             <div class="card">
                 <div class="card-body">
                     <div class="stat-widget-five">
                         <div class="stat-icon dib flat-color-1">
                             <i class="ti-pin-alt"></i>
                         </div>
                         <div class="stat-content">
                             <div class="text-left dib">
                                 <div class="stat-text"><span
                                         class="count">{{ $projetos->count() }}</span>
                                 </div>
                                 <div class="stat-heading">Projetos</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


     </div>
     <!-- /Widgets -->

     <div class="clearfix"></div>
     <!-- Orders -->
     <div class="orders">
         <div class="row">
             <div class="col-xl-12">
                 <div class="card">
                     {{ $colaboradores }}
                     <div class="card-body">
                         <h4 class="box-title">Colaboradores </h4>
                     </div>
                     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                         <div class="carousel-inner">
                             @foreach ($colaboradores as $colaborador)
                                 @if ($colaborador->id === $colaboradorMelhorDesempenho)
                                     <div class="carousel-item active">
                                     @else
                                         <div class="carousel-item">
                                 @endif
                                 <div class="col-md-12">
                                     <section class="card">
                                         @if ($colaborador->id === $colaboradorMelhorDesempenho)
                                             <div class="twt-feed bg-success">
                                                 <div class="corner-ribon black-ribon">
                                                     <i class="fa fa-flag-checkered"></i>
                                                 </div>
                                                 <div class="fa fa-flag-checkered wtt-mark"></div>
                                             @else
                                                 <div class="twt-feed bg-info">
                                                     <div class="corner-ribon black-ribon">
                                                         <i class="fa fa-user"></i>
                                                     </div>
                                                     <div class="fa fa-user wtt-mark"></div>
                                         @endif


                                         <div class="media">
                                             <a href="#">
                                                 <img class="align-self-center rounded-circle mr-3"
                                                     style="width:85px; height:85px;" alt=""
                                                     src="data:image/jpeg;base64,{{ base64_encode($colaborador->foto_perfil) }}">
                                             </a>
                                             <div class="media-body">
                                                 <h2 class="text-white display-6">{{ $colaborador->user->name }}</h2>
                                                 <p class="text-light">{{ $colaborador->cpf }}</p>
                                             </div>
                                         </div>
                                 </div>
                                 <div class="weather-category twt-category">
                                     <ul>
                                         <li class="active">
                                             <h5>750</h5>
                                             Tweets
                                         </li>
                                         <li>
                                             <h5>865</h5>
                                             Following
                                         </li>
                                         <li>
                                             <h5>3645</h5>
                                             Followers
                                         </li>
                                     </ul>
                                 </div>
                                 <footer class="twt-footer">
                                     <a href="#"><i class="fa fa-camera"></i></a>
                                     <a href="#"><i class="fa fa-map-marker"></i></a>
                                     New Castle, UK
                                     <span class="pull-right">
                                         32 anos
                                     </span>
                                 </footer>
                                 </section>
                         </div>
                     </div>
                     @endforeach

                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                     data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                 </button>
             </div>
             {{-- fim do carousel --}}

         </div> <!-- /.card -->
     </div> <!-- /.col-lg-12 -->
     <div class="col-xl-12">
         <div class="card">
             <div class="card-body">
                 <h4 class="box-title">Tarefas </h4>
             </div>
             <div class="card-body--">
                 <div class="table-stats order-table ov-h">
                     <table class="table ">
                         <thead>
                             <tr>
                                 <th class="serial">#</th>
                                 <th>Projeto</th>
                                 <th>Tarefa</th>
                                 <th>Descrição</th>
                                 <th>Criada por</th>
                                 <th>Data</th>
                                 <th></th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td class="serial">1.</td>
                                 <td> Tô Fazendo</td>
                                 <td> Inserir modal na tela principal</td>
                                 <td> <span class="name">Lorem ipsum dolor sit amet consectetur
                                         adipisicing elit. Laudantium, nostrum aspernatur nesciunt eos fugit
                                         cumque dolor rem tempore adipisci saepe. Nemo, praesentium delectus
                                         impedit mollitia explicabo numquam molestias aspernatur
                                         reprehenderit.</span> </td>
                                 <td><span>João da Silva</span></td>
                                 <td><span>23/03/2022</span></td>
                                 <td><button type="button" class="btn btn-outline-success btn-sm">Executar</button>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div> <!-- /.table-stats -->
             </div>
         </div> <!-- /.card -->
     </div> <!-- /.col-lg-12 -->
     <div class="col">
         <div class="col-md-12">
             <section class="card">
                 <div class="twt-feed bg-info">
                     <div class="corner-ribon black-ribon">
                         <i class="fa fa-smile-o"></i>
                     </div>
                     <div class="fa fa-smile-o wtt-mark"></div>
                     <div class="media">
                         <div class="media-body">
                             <p class="text-light">Tarefas dentro do prazo</p>
                         </div>
                     </div>
                 </div>
                 <div class="weather-category twt-category">
                     <ul>
                         <li class="active">
                             <h5>750</h5>
                             Tweets
                         </li>
                         <li>
                             <h5>865</h5>
                             Following
                         </li>
                         <li>
                             <h5>3645</h5>
                             Followers
                         </li>
                     </ul>
                 </div>
             </section>
         </div>
         {{-- card 2 --}}
         <div class="col-md-12">
             <section class="card">
                 <div class="twt-feed bg-warning">
                     <div class="corner-ribon black-ribon">
                         <i class="fa fa-meh-o"></i>
                     </div>
                     <div class="fa fa-meh-o wtt-mark"></div>
                     <div class="media">
                         <div class="media-body">
                             <p class="text-light">Tarefas estourando o prazo</p>
                         </div>
                     </div>
                 </div>
                 <div class="weather-category twt-category">
                     <ul>
                         <li class="active">
                             <h5>750</h5>
                             Tweets
                         </li>
                         <li>
                             <h5>865</h5>
                             Following
                         </li>
                         <li>
                             <h5>3645</h5>
                             Followers
                         </li>
                     </ul>
                 </div>
             </section>
         </div>
         {{-- card 3 --}}
         <div class="col-md-12">
             <section class="card">
                 <div class="twt-feed bg-danger">
                     <div class="corner-ribon black-ribon">
                         <i class="fa fa-frown-o"></i>
                     </div>
                     <div class="fa fa-frown-o wtt-mark"></div>
                     <div class="media">
                         <div class="media-body">
                             <p class="text-light">Tarefas com prazo estourado</p>
                         </div>
                     </div>
                 </div>
                 <div class="weather-category twt-category">
                     <ul>
                         <li class="active">
                             <h5></h5>
                             Tô Fazendo
                         </li>
                         <li>
                             <h5></h5>
                             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit quis illum
                             necessitatibus. Quisquam ipsum praesentium alias tenetur sunt? Quas placeat non
                             iure ut earum iste repellendus, accusamus id quod aspernatur!
                         </li>
                         <li>
                             <h5>3645</h5>
                             João da Silva
                         </li>
                     </ul>
                 </div>
             </section>
         </div>
         {{-- fim card 3 --}}
         {{-- card 4 --}}
         <div class="col-md-12">
             <section class="card">
                 <div class="twt-feed bg-success">
                     <div class="corner-ribon black-ribon">
                         <i class="fa fa-trophy"></i>
                     </div>
                     <div class="fa fa-trophy wtt-mark"></div>
                     <div class="media">
                         <div class="media-body">
                             <p class="text-light">Tarefas concluídas</p>
                         </div>
                     </div>
                 </div>
                 <div class="weather-category twt-category">
                     <ul>
                         <li class="active">
                             <h5></h5>
                             Tô Fazendo
                         </li>
                         <li>
                             <h5></h5>
                             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit quis illum
                             necessitatibus. Quisquam ipsum praesentium alias tenetur sunt? Quas placeat non
                             iure ut earum iste repellendus, accusamus id quod aspernatur!
                         </li>
                         <li>
                             <h5>3645</h5>
                             João da Silva
                         </li>
                     </ul>
                 </div>
             </section>
         </div>
         {{-- fim card 4 --}}
         {{-- card 5 --}}
         <div class="col-md-12">
             <section class="card">
                 <div class="twt-feed bg-secondary">
                     <div class="corner-ribon black-ribon">
                         <i class="fa fa-unlink"></i>
                     </div>
                     <div class="fa fa-unlink wtt-mark"></div>
                     <div class="media">
                         <div class="media-body">
                             <p class="text-light">Tarefas descontinuadas</p>
                         </div>
                     </div>
                 </div>
                 <div class="weather-category twt-category">
                     <ul>
                         <li class="active">
                             <h5></h5>
                             Tô Fazendo
                         </li>
                         <li>
                             <h5></h5>
                             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit quis illum
                             necessitatibus. Quisquam ipsum praesentium alias tenetur sunt? Quas placeat non
                             iure ut earum iste repellendus, accusamus id quod aspernatur!
                         </li>
                         <li>
                             <h5>3645</h5>
                             João da Silva
                         </li>
                     </ul>
                 </div>
             </section>
         </div>
         {{-- fim card 5 --}}
     </div> <!-- /.col-lg-12 -->
 </div>
 </div>
 <!-- /.orders -->
 </div>
 <!-- .animated -->
 @section('js-extra')
 @endsection
