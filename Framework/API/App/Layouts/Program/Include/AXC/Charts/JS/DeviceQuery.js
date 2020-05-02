$(document).ready(function () {
    showGraph();
});


function showGraph()
{
    {
        $.post("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Charts/HTML/DeviceQuery/Data.php",
            function (data)
            {
                console.log(data);
                var name = [];
                // Devices
                var GoProDevices = [];
                var DroneDevices = [];
                var PhoneDevices = [];
                for (var i in data) {
                    name.push(data[i].Race);
                    // Database
                    GoProDevices.push(data[i].GoPro);
                    DroneDevices.push(data[i].Drone);
                    PhoneDevices.push(data[i].Phone);
                }

                var alldata = {
                    labels: name,
                    datasets: [{
                        label: 'GoPro',
                        data: GoProDevices,name,
                        backgroundColor: "blue",
                    },{
                        label: 'Drone',
                        data: DroneDevices,name,
                        backgroundColor: "lightskyblue",
                    },{
                        label: 'Phone',
                        data: PhoneDevices,name,
                        backgroundColor: "lightblue",
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