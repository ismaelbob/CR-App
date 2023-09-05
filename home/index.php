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
                <div class="mb-2">
                    <h5>Platos</h5>
                    <div class="d-flex justify-content-between">
                        <div class="custom-card-combo"></div>
                        <div class="custom-card-combo"></div>
                        <div class="custom-card-combo"></div>
                        <div class="custom-card-combo"></div>
                    </div>
                </div>
                    <div class="mb-5">
                        <h4>Extras</h4>
                        <div class="d-flex justify-content-start">
                        <div class="custom-card"></div>
                        <div class="custom-card"></div>
                        <div class="custom-card"></div>
                        <div class="custom-card"></div>
                    </div>
                </div>
                <div class="custom-grid-row">
                    <h3>32</h3>
                    <input class="form-control" type="text" placeholder="Nombre para pedido" aria-label=".form-control-lg example">
                    <button type="button" class="btn btn-primary ms-3">Agregar pedido</button>
                </div>
            </div>

            <!-- Seccion de pedidos realizados -->

            <div class="main_list d-flex flex-column align-items-center p-2">
                <h5>Lista de pedidos</h5>
                <div class="custom-card-large">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <div class="d-flex flex-column">
                        <h5>31. Gonzales</h5>
                        <h6>Pollo a la canasta + fideo + mini</h6>
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

            <div class="main_summary d-flex flex-column p-2">
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
                <a class="navbar-brand" href="./">Rooster King Trafalgar</a>
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
</body>
<script src="../libraries/bootstrap/js/bootstrap.min.js"></script>
</html>     