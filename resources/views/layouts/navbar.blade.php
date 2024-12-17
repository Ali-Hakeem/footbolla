
<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark fixed-top text-uppercase {{Request::segment(0) == '' ? '' : 'bg-light'}}">
    <div class="container">
      <a class="navbar-brand" href="/">
        <b><i>Foot<span class="text-warning">bolla</span></i></b>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="livescore">Live Score</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link active" href="schedule">Match Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="table">Table League</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">faq</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>