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



let myMLineChart = document.getElementById("myMonthlyApp").getContext('2d');

let chart2 = new Chart(myMLineChart, {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],
        label: 'Monthly Appoinment',
        datasets: [ {
            data: [65, 59, 80, 81, 56, 55, 40],
            borderColor: 'rgb(75, 192, 192)',
            fill: false,
            tension: 0.1
        }]
    },
    options: {
        title: {
            text: "Total Client",
            display: true
        }
    }
});