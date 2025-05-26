<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css">

<!-- jQuery y Select2 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.min.js"></script>
<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    @vite(['resources/css/task.css'])
    @vite(['resources/css/index.css'])
    @vite(['resources/js/task.js'])
    <title>Document</title>

    
</head>
<body>
    <div class="app-container">
    <br>
    <div class="app-header">
        <span class="app-icon"></span>
        
            <p class="app-name">Portfolio</p>
            
            <div class="search-wrapper">
                <input class="search-input" type="text" placeholder="Search">
            </div>
        <br>
        <br>
        <button class="messages-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" /></svg>
        </button>
        <button class="profile-btn">
            <img src="https://assets.codepen.io/3306515/IMG_2025.jpg">
            <span>Aybüke C.</span>
        </button>
    </div>
    <div class="app-content">
    <div class="app-content-header">
        <h1 class="app-content-title">Tasks</h1>
        <div class="projects-section">
            <div class="container">
            <div class="tabular-data module">
                <div class="data-group">
                <div class="row">
                    <div class="data-expands">
                    <div class="col-lg-1 col-md-1">
                        1245346
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <span class="title">Cromulent waste removal may behoove us.</span>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="red uppercase"><strong><i class="fa fa-exclamation-circle"></i> Awaiting Approval</strong>
                        <span class="row-toggle">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </span>
                        </div>
                    </div>
                    </div>
                    <div class="expandable">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-1 col-md-7 col-md-offset-1">
                        <p>Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. But, like most politicians, he promised more than he could deliver. If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.</p>
                        <p>Tell her you just want to talk. It has nothing to do with mating. Well I'da done better, but it's plum hard pleading a case while awaiting trial for that there incompetence. Is that a cooking show? Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually!</p>
                        </div>
                        <div class="col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-xs-12 visible-sm visible-xs"><hr></div>
                            <div class="col-xs-6">Technician Labor</div>
                            <div class="col-xs-6 text-right">2,400.00</div>
                            <div class="col-xs-6">Parts</div>
                            <div class="col-xs-6 text-right">4,500.00</div>
                            <div class="col-xs-6">Inspection</div>
                            <div class="col-xs-6 text-right">400.00</div>
                            <div class="col-xs-12"><hr></div>
                            <div class="col-xs-6">Total</div>
                            <div class="col-xs-6 text-right">$7,300.00</div>
                            <div class="col-xs-12"><hr></div>
                            <div class="col-xs-6"><a href="#" class="btn btn-black"><i class="fa fa-phone"></i> Contact</a></div>
                            <div class="col-xs-6 text-right"><a href="#" class="btn btn-green"><i class="fa fa-check-circle-o"></i> Approve</a></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
               
                <!-- Table Row -->
            </div>
            <!-- Table -->
            </div>
            <!-- Container -->
        </div>
            {{-- <h2 style="outline:2px solid none;color: #1f1c2e;text-align:center;">Añadir Tarea</h2>
            <a href="" class="app-sidebar-link active">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    width="24" height="24" viewBox="0 0 24 24" 
                    fill="none" stroke="currentColor" stroke-width="2" 
                    stroke-linecap="round" stroke-linejoin="round" 
                    class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </a>
            <div class="grid-container">
            <div class="box box-1">
                <h2 style="color: #1f1c2e">Tareas</h2>
                <div class="table-container">
                <table class="table-cryptic" >
                    <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Descripcion</th>
                        <th>Progreso</th>
                        <th>Usuarios</th>
                        <th>Prioridad</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Bitcoin</td>
                        <td>$58,432</td>
                        <td>+2.3%</td>
                        <td>$1.12T</td>
                        <td>Alto</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ethereum</td>
                        <td>$3,245</td>
                        <td>-0.8%</td>
                        <td>$389B</td>
                        <td>Alto</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Solana</td>
                        <td>$142</td>
                        <td>+5.7%</td>
                        <td>$61B</td>
                        <td>Alto</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Cardano</td>
                        <td>$0.53</td>
                        <td>+1.2%</td>
                        <td>$18.7B</td>
                        <td>Alto</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                </div>
        </div>
        
  
   
    </div> --}}
    </div>
       

</body>
</html>
