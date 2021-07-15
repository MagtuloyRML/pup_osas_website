let myMLineChart = document.getElementById("statusLineChart").getContext('2d');

let chart1 = new Chart(myMLineChart, {
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
            text: "Status Every Meeting",
            display: true
        }
    }
});