$(document).ready(function () {
    showGraph();
});


function showGraph()
{
    {
        $.post("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Charts/HTML/DatabaseQuery/Data.php",
            function (data)
            {
                console.log(data);
                var name = [];
                var InDatabaseMarks = [];
                var NotInDatabaseMarks = [];
                for (var i in data) {
                    name.push(data[i].Race);
                    // Database
                    InDatabaseMarks.push(data[i].In_Database);
                    NotInDatabaseMarks.push(data[i].Not_In_Database);
                }

                var alldata = {
                    labels: name,
                    datasets: [{
                        label: 'In Database',
                        data: InDatabaseMarks,name,
                        backgroundColor: "green",
                    },{
                        label: ' Not In Database',
                        data: NotInDatabaseMarks,name,
                        backgroundColor: "red",
                    }
                    ]
                };
                var graphTarget = $("#MainBarChart");

                var barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    options: {
                        animation: {
                            duration: 1000 * 2,
                            easing: 'linear'
                        },
                        tooltips: {
                            displayColors: true,
                            callbacks:{
                                mode: 'x',
                            },
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,
                                gridLines: {
                                    display: false,
                                }
                            }],
                            yAxes: [{
                                stacked: true,
                                ticks: {
                                    beginAtZero: true,
                                },
                                type: 'linear',
                            }]
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: { position: 'bottom' },
                    },
                    data: alldata
                });
            });
    }
}