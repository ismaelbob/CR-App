<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../libraries/bootstrap/css/bootstrap.min.css">
    <title>Inicio | RKT App</title>
</head>
<body>
    <div class="custom-container">
        <div class="main container-xxl">
            <!-- Seccion para hacer pedido -->
            <div class="main_order">
                <form action="">
                    <div class="mb-2">
                        <h5>Platos</h5>
                        <div class="d-flex justify-content-between">
                            <div class="custom-card-combo">
                                <input class="form-check-input" type="checkbox" value="p-canasta" id="chk-canasta">
                                <label for="chk-canasta"><img class="img-fluid rounded" src="../images/RKT canasta.png" alt="RKT"></label>
                            </div>
                            <div class="custom-card-combo">
                                <input class="form-check-input" type="checkbox" value="p-broaster" id="chk-broaster">
                                <label for="chk-broaster"><img class="img-fluid rounded" src="../images/RKT broaster.png" alt="RKT"></label>
                            </div>
                            <div class="custom-card-combo">
                                <input class="form-check-input" type="checkbox" value="p-alitas" id="chk-alitas">
                                <label for="chk-alitas"><img class="img-fluid rounded" src="../images/RKT alitas.png" alt="RKT"></label>
                            </div>
                            <div class="custom-card-combo">
                                <input class="form-check-input" type="checkbox" value="p-pique" id="chk-pique">
                                <label for="chk-pique"><img class="img-fluid rounded" src="../images/RKT pique.png" alt="RKT"></label>
                            </div>
                            <div class="custom-card-combo">
                                <input class="form-check-input" type="checkbox" value="p-tablita" id="chk-tablita">
                                <label for="chk-tablita"><img class="img-fluid rounded" src="../images/RKT tablita.png" alt="RKT"></label>
                            </div>
                        </div>
                    </div>
                        <div class="mb-5">
                            <h5>Extras</h5>
                            <div class="d-flex justify-content-start">
                            <div class="custom-card">
                                <input class="form-check-input" type="checkbox" value="p-tablita" id="chk-fideo">
                                <label for="chk-fideo"><img class="img-fluid rounded" src="../images/RKT fideo.png" alt="RKT"></label>
                            </div>
                            <div class="custom-card">
                                <input class="form-check-input" type="checkbox" value="p-tablita" id="chk-arroz">
                                <label for="chk-arroz"><img class="img-fluid rounded" src="../images/RKT arroz.png" alt="RKT"></label>
                            </div>
                            <div class="custom-card"></div>
                            <div class="custom-card"></div>
                        </div>
                    </div>
                    <div class="custom-grid-row">
                        <h3>32</h3>
                        <input class="form-control" type="text" placeholder="Nombre para pedido" aria-label=".form-control-lg example">
                        <button type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#modal-confirmar-pedido">Agregar pedido</button>
                    </div>
                </form>
            </div>

            <!-- Seccion de pedidos realizados -->

            <div class="main_list d-flex flex-column align-items-center">
                <h5>Lista de pedidos</h5>
                <div class="custom-card-large">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <div class="d-flex flex-column">
                        <h5>31. Gonzales</h5>
                        <h6>Pollo a la canasta + fideo + arroz + mini</h6>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="btn btn-secondary btn-sm mx-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/>
                            </svg>
                        </div>
                        <button class="btn btn-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Seccion de resumen de ventas del dia -->

            <div class="main_summary d-flex flex-column">
                <h5>Resumen de ventas</h5>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex">
                        <div class="custom-card"><h3>12</h3><h5>Canasta</h5></div>
                        <div class="custom-card"><h3>10</h3><h5>Broaster</h5></div>
                        <div class="custom-card"><h3>6</h3><h5>Alitas</h5></div>
                        <div class="custom-card"><h3>2</h3><h5>Tablita</h5></div>
                    </div>
                    <div class="d-flex">
                        <div class="custom-card"><h3>30</h3><h5>Platos</h5></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aqui debajo viene el menu de navegacion -->

        <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed bottom-0 w-100 custom-shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="./"><img src="../images/RKT logo.png" alt="Logo" width="25">Rooster King Trafalgar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="./">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="../administrar/">Administrar</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="../usuario/">Usuario</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Modal para confirmar pedido -->
    <div class="modal fade" id="modal-confirmar-pedido" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar pedido</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-around">
                <button class="custom-button-card" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <h6>Para llevar</h6>
                </button>
                <button class="custom-button-card" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                    </svg>
                    <h6>Para mesa</h6>
                </button>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar pedido</button>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="../libraries/bootstrap/js/bootstrap.min.js"></script>
</html>     