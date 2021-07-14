let labels1 = ['YES', 'YES BUT IN GREEN'];
let data1 = [69, 31];
let colors1 = ['#fff', 'rgba(63, 63, 63)'];

let myDoughnutChart = document.getElementById("myChart").getContext('2d');

let chart1 = new Chart(myDoughnutChart, {
    type: 'doughnut',
    data: {
        labels: ['YES', 'YES BUT IN GREEN'],
        datasets: [ {
            data: [69, 31],
            backgroundColor: ['#1b1b1b', 'rgba(63, 63, 63)']
        }]
    },
    options: {
        title: {
            text: "Total Client",
            display: true
        }
    }
});