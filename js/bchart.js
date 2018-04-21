/* global Chart, $*/

/*$.ajax('api/stats.php', {
  dataType: 'json'
}).done(function(response) {
  const byStates = response.by_state;
  const labels = Object.keys(byStates);
  const stateData = [];
  labels.forEach(function(l) {
    stateData.push(byStates[l]);
  });
 */   
$.ajax({
  url:'api/getdata.php',
  method:'POST',
  data:{
    'farmid':1,
},
  dataType: 'json',
}).done(function(response) {
  const time = response.time;
  const labels = Object.keys(time);
  const timeData = [];
  labels.forEach(function(l) {
    timeData.push(time[l]);
  });
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: 'Moisture Levels',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


  const byCategory = response.by_category;
  const labels_c = Object.keys(byCategory);
  const categoryData = [];
  labels_c.forEach(function(l) {
    categoryData.push(byCategory[l]);
  });
  console.log(categoryData);
  var ctx_c = document.getElementById('myChart_c').getContext('2d');
  var myChart_c = new Chart(ctx_c, {
    type: 'doughnut',
    data: {
      labels: labels_c,
      datasets: [{
        label: 'Number of activities',
        data: categoryData,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
});
