const ctx = document.getElementById('myChart');

new Chart(ctx, {
type: 'bar',
data: {
    labels: ['frontend', 'Backend', 'Ciberseguridad', 'fullstack', 'Videojuegos', '.NET'],
    datasets: [{
    label: '# de profesionales especializados',
    data: [12, 19, 3, 5, 2, 3],
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

const ctx1 = document.getElementById('myChart1');

new Chart(ctx1, {
type: 'radar',
data: {
    labels: ['Rapidez', 'Trato', 'Precio', 'Resultado', 'Cumplimiento'],
    datasets: [{
    label: 'Calificación del profesional',
    data: [120, 190, 300, 250, 200],
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
type: 'line',
data: {
    labels: ['Hola', 'broooo', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    datasets: [{
    label: '# de contratasiones por mes',
    data: [12, 19, 3, 5, 2, 3, 5, 2, 7, 2, 10, 14],
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


const ctx3 = document.getElementById('myChart3');

new Chart(ctx3, {
type: 'doughnut',
data: {
  labels: ['Red', 'Orange', 'Yellow', 'Green', 'Blue'],
  datasets: [
    {
      label: 'Dataset 1',
      data: Utils.numbers(NUMBER_CFG),
      backgroundColor: Object.values(Utils.CHART_COLORS),
    }
  ]
},
options: {
    scales: {
    y: {
      beginAtZero: true
    }
    }
}
});
// type: 'doughnut',
//   data: {
//     labels: [<?php
//     $consulta3 = Sector::mostrar();
//     $aire= new Calidad_de_Aire(
//       0,
//       0,
//       $item['id']
//       );
//     $consulta = Calidad_de_Aire::GenerarGráfico();
//     foreach ($consulta3 as $item):
//             echo "'".$item['nombre']."',";
//             endforeach; ?>],
//     datasets: [{
//       label: 'Nivel de contaminación de aire',
//       data: [<?php
//           foreach ($consulta as $item):
//             echo $item['nivel'].",";
//             endforeach;
//             ?>],
//             backgroundColor: [
//       '#DBF0B4','#97B48F','#BDD09C','#99BFA3','#A9C2B3',
//       '#43B02A','#23D972','#15BF70','#6C9E76','#7CAD40',
//       '#39963B','#5FB58C','#83A603','#5F7351','#275C49',
//       '#37A667','#456123','#447040','#298025','#4E804B'
//         ],
//       borderWidth: 1


// const ctx3 = document.getElementById('myChart3');

// new Chart(ctx3, {
// type: 'polarArea',
// data: {
//     labels: ['frontend', 'Backend', 'Ciberseguridad', 'fullstack', 'Videojuegos', '.NET'],
//     datasets: [{
//     label: 'Contrataciones por categoria',
//     data: [12, 19, 3, 5, 2, 3],
//     borderWidth: 1
//     }]
// },
// options: {
//     scales: {
//     y: {
//       beginAtZero: true
//     }
//     }
// }
// });