var ctxD = document.getElementById("doughnutChart").getContext('2d');
        var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
        labels: ["Faltante", "Donaciones"],
        datasets: [
            {
                data: [300, 1000],
                backgroundColor: ["#F7464A", "#46BFBD"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
                
            }
        ]
    },
    options: {
        responsive: true
    }    
});
      