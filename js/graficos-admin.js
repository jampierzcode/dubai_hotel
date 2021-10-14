$(document).ready(function () {
  var ctx = document.getElementById("myChart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        "Lunes",
        "Martes",
        "Miercoles",
        "Jueves",
        "Viernes",
        "Sabado",
        "Domingo",
      ],
      datasets: [
        {
          label: "Ventas de la semana",
          data: [600, 250, 400, 800, 1200, 600, 1500],
          backgroundColor: ["rgba(60, 14, 171, 1)"],
          borderColor: ["rgba(0, 0, 0, 1)"],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});
