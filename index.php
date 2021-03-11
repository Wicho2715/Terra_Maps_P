<?php require_once "views/parte_superior.php"?>

<!--Inicio-->

<div class = "container">
    <h1>Aqui ira el contenido de el dashboard</h1>
   
    <title>Bootstrap 4. Tablas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-striped table-bordered table-hover table-dark">
					<thead>
						<tr>
							<th>Cliente</th>
							<th>Proyecto</th>
							<th>Tipo</th>
                            <th>Reporte</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Daniela</td>
							<td>Tulum</td>
							<td>Cliente</td>
                            <buttom>Ver</buttom>
						</tr>
						<tr>
							<td>Teclado</td>
							<td>34</td>
							<td>340</td>
						</tr>
						<tr>
							<td>Pantalla</td>
							<td>10</td>
							<td>400</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</div>

<!--Fin-->

<?php require_once "views/parte_inferior.php"?>
