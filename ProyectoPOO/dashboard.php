<?php
include("./templates/header.php");
include("./clasegraficas.php");
$cants = Graficas::generarGrafico1();
$cants2 = Graficas::generarGrafico2();
?>
<link rel="stylesheet" href="./styles/stylegraficas.css">
<div class="recuadro" id="uno" >
<canvas id="myChart1"></canvas>
</div>
<div class="recuadro" id="dos">
<canvas id="myChart2"></canvas>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx1 = document.getElementById('myChart1');

new Chart(ctx1, {
type: 'doughnut',
data: {
    labels: ['Usuarios', 'Profesionales'],
    datasets: [{
    label: 'Comparativa de usuarios y profesionales',
    data: [<?php foreach ($cants as $cant) {echo "'".$cant."',";}?>],
    borderWidth: 1
    }]
},
options: {
    scales: {
    y: {
      beginAtZero: true
    }
    }
}
});

const ctx2 = document.getElementById('myChart2');

new Chart(ctx2, {
type: 'bar',
data: {
    labels: [<?php foreach ($cants2 as $cant) {echo "'".$cant["nombre_de_tarjeta"]."',";}?>],
    datasets: [{
    label: 'Cantidades de pagos realizados',
    data: [<?php foreach ($cants2 as $cant) {echo "'".$cant["total_pagos"]."',";}?>],
    borderWidth: 1
    }]
},
options: {
    scales: {
    y: {
      beginAtZero: true
    }
    }
}
});

</script>
<?php include("./templates/footer.php");?> 