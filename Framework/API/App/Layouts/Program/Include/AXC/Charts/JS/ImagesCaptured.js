$(document).ready(function () {
    showGraph();
});


function showGraph()
{
    {
        $.post("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Charts/HTML/ImagesCaptured/Data.php",
            function (data)
            {
                console.log(data);
                var name = [];
                var TakenMarks = [];
                var InDatabaseMarks = [];
                var NotInDatabaseMarks = [];
                // Averages
                var BaselineMark = [];
                var AboveAverage = [];
                var Average = [];
                var BelowAverage = [];
                var PoorData = [];
                // Devices
                var GoProDevices = [];
                var DroneDevices = [];
                var PhoneDevices = [];
                for (var i in data) {
                    name.push(data[i].Race);
                    // Database
                    TakenMarks.push(data[i].Taken);
                    InDatabaseMarks.push(data[i].In_Database);
                    NotInDatabaseMarks.push(data[i].Not_In_Database);
                    // Averages
                    BaselineMark.push(data[i].Baseline);
                    AboveAverage.push(data[i].Above_Average);
                    Average.push(data[i].Average);
                    BelowAverage.push(data[i].Below_Average);
                    PoorData.push(data[i].Poor);
                    // Devices
                    GoProDevices.push(data[i].GoPro);
                    DroneDevices.push(data[i].Drone);
                    PhoneDevices.push(data[i].Phone);
                }

                var alldata = {
                    labels: name,
                    datasets: [{
                        // Database
                        label: 'Taken',
                        data: TakenMarks,name,
                        borderColor: "green",
                        backgroundColor: "#9ce29c",
                        fill: "1"
                    }, {
                        label: 'In Database',
                        data: InDatabaseMarks,name,
                        borderColor: "darkgoldenrod",
                        backgroundColor: "#f7d06e",
                        fill: true
                    },{
                        label: ' Not In Database',
                        data: NotInDatabaseMarks,name,
                        borderColor: "red",
                        fill: false
                    },{
                        // Averages
                        label: 'Baseline',
                        data: BaselineMark,name,
                        borderColor: "grey",
                        borderDash: [5,15],
                        fill: false
                    },{
                        label: 'Above Average',
                        data: AboveAverage,name,
                        borderColor: "olivedrab",
                        borderDash: [5,15],
                        fill: false
                    },{
                        label: 'Average',
                        data: Average,name,
                        borderColor: "darkolivegreen",
                        borderDash: [5,15],
                        fill: false
                    },{
                        label: ' Below Average',
                        data: BelowAverage,name,
                        borderColor: "silver",
                        borderDash: [5,15],
                        fill: false
                    },{
                        label: ' Poor',
                        data: PoorData,name,
                        borderColor: "firebrick",
                        borderDash: [5,15],
                        fill: false
                    },{
                        // Devices
                        label: 'Go Pro',
                        data: GoProDevices,name,
                        borderColor: "blue",
                        fill: false
                    },{
                        label: 'Drone',
                        data: DroneDevices,name,
                        borderColor: "lightblue",
                        fill: false
                    },{
                        label: 'Phone',
                        data: PhoneDevices,name,
                        borderColor: "lightskyblue",
                        fill: false
                    }
                    ]
                };
                var graphTarget = $("#ImagesCapturedChart");

                var barGraph = new Chart(graphTarget, {
                    type: 'line',
                    options: {
                        animation: {
                            duration: 1000 * 2,
                            easing: 'linear'
                        }
                    },
                    data: alldata
                });
            });
    }
}