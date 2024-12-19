<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Clics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card text-center">
        <h1 class="text-primary mb-4">Contador de clics</h1>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <button id="btnRestar" class="btn btn-danger" onclick="actualizarContador(-1)">-</button>
            <input id="valorContador" type="text" class="form-control text-center fw-bold" value="1" readonly>
            <button id="btnSumar" class="btn btn-success" onclick="actualizarContador(1)">+</button>
        </div>
    </div>
</div>

<script>
    function actualizarContador(cambio) {
        let valorContador = document.getElementById('valorContador');
        let nuevoValorContador = parseInt(valorContador.value) + cambio;
        if (nuevoValorContador < 0) {
            nuevoValorContador = 0;
        }
        valorContador.value = nuevoValorContador;
        if (nuevoValorContador === 20) {
            window.location.href = 'CFormF1';
        }
    }
</script>
</body>
</html>
