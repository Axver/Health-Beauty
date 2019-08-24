 <!--        rose navbar with search form -->
 <nav class="navbar navbar-expand-lg bg-rose">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="#0"><button class='btn btn-success'>Show All</button></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='spirulina()'>Spirulina</a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='peninggi()'>Peninggi</a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='pelangsing()'>Pelangsing</a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='testimoni()'>Testimoni</a>
                  </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link" onclick='galeri()'>Galeri</a>
                  </li>
                </ul>
                <form class="form-inline ml-auto">
                  <!-- <div class="form-group has-white">
                    <input type="text" class="form-control" placeholder="Search">
                  </div> -->
                  <!-- <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                    <i class="material-icons">search</i>
                  </button> -->
                </form>
              </div>
            </div>
          </nav>
          <!--        end rose navbar -->
      
          <script>
              
        function load()
        {
            document.getElementById("spirulina").style.display = "none";
            document.getElementById("peninggi").style.display = "none";
              document.getElementById("pelangsing").style.display = "none";
              document.getElementById("testimoni").style.display = "none";
        }
          function peninggi()
          {
            document.getElementById("peninggi").style.display = "block";
            // Hilangkan yg lain
              document.getElementById("spirulina").style.display = "none";
              document.getElementById("pelangsing").style.display = "none";
              document.getElementById("testimoni").style.display = "none";

          }

          function spirulina()
          {
            document.getElementById("spirulina").style.display = "block";
            // Hilangkan yg lain
              document.getElementById("peninggi").style.display = "none";
              document.getElementById("pelangsing").style.display = "none";
              document.getElementById("testimoni").style.display = "none";

          }
          function pelangsing()
          {
            document.getElementById("pelangsing").style.display = "block";
            // Hilangkan yg lain
              document.getElementById("peninggi").style.display = "none";
              document.getElementById("spirulina").style.display = "none";
              document.getElementById("testimoni").style.display = "none";

          }

          function testimoni()
          {
            document.getElementById("testimoni").style.display = "block";
            // Hilangkan yg lain
              document.getElementById("peninggi").style.display = "none";
              document.getElementById("spirulina").style.display = "none";
              document.getElementById("pelangsing").style.display = "none";

          }

          function galeri()
          {
              window.location='demo'
          }
          </script>