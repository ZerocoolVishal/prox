$(document).ready(function(){

    loadMovies()

});

function loadMovies() {
    var xhttp = new XMLHttpRequest()
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
        
            var moviesList = JSON.parse(this.responseText)
            moviesList.forEach(movie => {
                var card = movieCard(movie.id, movie.title, movie.year, movie.discription, movie.image_url, movie.download_link, movie.trailer_link, movie.upload_timestamp)
                $("#movies_list").append(card);
            });
           
        }
    }
    xhttp.open("GET", "/prox/api/getAllMovies.php", true)
    xhttp.send()
}

function movieCard(id, title, year, discription, image_url, download_link, trailer_link, upload_timestamp) {
    card = `
    <div class="col-md-4">
    <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="${image_url}" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">${title} (${year})</h2>
        <p class="card-text">${discription}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a class="btn btn-sm btn-outline-primary" href="${download_link}">Download</a>
            <a class="btn btn-sm btn-outline-success" href="${trailer_link}" target="_blank">Trailer</a>
          </div>
        </div>
      </div>
    </div>
    </div>`

    return card;
}