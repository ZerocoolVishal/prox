$("document").ready(function(){
    loadMovie()

});

function loadMovie() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {

            movieList = JSON.parse(this.responseText)
            var i = 1;
            movieList.forEach(movie => {
                console.log("title : " + movie.title);
                console.log("year : " + movie.year);
                console.log("type : " + movie.category);
                console.log("download link : " + movie.download_link);
                $("#movie_list_body").append(`
                <tr>
                    <th scope="row">${i}</th>
                    <td>${movie.title}</td>
                    <td>${movie.category}</td>
                    <td>${movie.year}</td>
                    <td><a href="${movie.download_link}" class="btn btn-outline-primary btn-sm">download</a>
                </tr>
                `)
                i++;
            });
        }
    }
    xhttp.open("GET", "/prox/api/getAllMovies.php", true)
    xhttp.send()
}

function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("name");
    filter = input.value.toUpperCase();
    table = document.getElementById("movie_list");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }

