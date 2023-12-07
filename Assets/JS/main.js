
function load() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("contenue").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET","index.php", true);
    xhttp.send();
  }

  function graph(){
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
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
  }

  function AjoterRoom() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("contenue").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "ajoterRoom.php", true);
    xhttp.send();
  }

  function EdetRoom() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("contenue").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "EdetRoom.php", true);
    xhttp.send();
  }
  function hotel() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("contenue").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "hotelRequest.php", true);
    xhttp.send();
  }