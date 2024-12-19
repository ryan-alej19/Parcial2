<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <h1 class="text-success mb-4">Convertir Moneda</h1>
        <input id="monto" type="number" class="form-control mb-3" placeholder="Ingrese un monto" min="0">
        <select id="monedaInicial" class="form-select mb-3">
            <option value="USD">USD</option>
            <option value="EURO">EURO</option>
        </select>
        <select id="monedaDestino" class="form-select mb-3">
            <option value="USD">USD</option>
            <option value="EURO">EURO</option>
        </select>
        <button class="btn btn-success" onclick="cambiarMonedas()">Convertir</button>
        <div id="resultado" class="mt-4"></div>
    </div>
</div>

<script>
    function cambiarMonedas() {
        const monto = parseFloat(document.getElementById('monto').value);
        const monedaInicial = document.getElementById('monedaInicial').value;
        const monedaDestino = document.getElementById('monedaDestino').value;
        const resultadoDiv = document.getElementById('resultado');
        if (isNaN(monto) || monto <= 0) {
            resultadoDiv.innerHTML = '<p >Debe elegir un monto mayor a 0</p>';
            return;
        }

        if (monedaInicial === monedaDestino) {
            resultadoDiv.innerHTML = '<p >La moneda ya fue convertida</p>';
            return;
        }
        let resultado = 0;
        if (monedaInicial === "USD" && monedaDestino === "EURO") {
            resultado = monto * 0.93;
        } else if (monedaInicial === "EURO" && monedaDestino === "USD") {
            resultado = monto * 1.08;
        }
        resultadoDiv.innerHTML = `<p >${monto} ${monedaInicial} = ${resultado.toFixed(2)} ${monedaDestino}</p>`;
        if (resultado >= 500) {
            window.location.href = 'CResultF1';
        }
    }
</script>
</body>
</html>
