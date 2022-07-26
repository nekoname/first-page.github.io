<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quorasium</title>

  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css">

</head>
<body>
  <header>
    <?php include("includes/header.php"); ?>
  </header>

  <main class="mx-auto" style="max-width: 1176px;">
    <nav aria-label="breadcrumb" class="my-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
    </nav>

    <h1 class="my-4 align-items-center text-primary text-center">Quorasium: Libros de dominio público</h1>
    <br>
    <div class="row">
      <div class="card col m-3">
        <a href="#" class="text-decoration-none text-dark">
          <img src="images/portada_dracula.jpg" class="card-img-top p-4">
          <div class="card-body">
            <h5>Dracula</h5>
            <p>George RR Martin</p>
            <p>La historia que se nos cuenta gira en torno a Dante Alligieri, un pagani y...</p>
            <br>
              <a class="btn btn-primary" href="downloads/hola.txt" download="book.txt">Descargar</a>
            <br><br>
            <a href="categorias/comedia.php" class="badge rounded-pill text-white bg-danger text-decoration-none">Comedia</a>
            <a href="categorias/ficcion.php" class="badge rounded-pill text-white bg-success text-decoration-none">Ficción</a>
          </div>
        </a>
      </div>
      <div class="card col m-3">
        <a href="#" class="text-decoration-none text-dark">
          <img src="images/portada_dracula.jpg" class="card-img-top p-4">
          <div class="card-body">
            <h5>Dracula</h5>
            <p>George RR Martin</p>
            <p>La historia que se nos cuenta gira en torno a Dante Alligieri, un pagani y...</p>
            <br>
              <a class="btn btn-primary" href="downloads/hola.txt" download="book.txt">Descargar</a>
            <br><br>
            <a href="categorias/comedia.php" class="badge rounded-pill text-white bg-danger text-decoration-none">Comedia</a>
            <a href="categorias/ficcion.php" class="badge rounded-pill text-white bg-success text-decoration-none">Ficción</a>
          </div>
        </a>
      </div>
      <div class="card col m-3">
        <a href="#" class="text-decoration-none text-dark">
          <img src="images/portada_dracula.jpg" class="card-img-top p-4">
          <div class="card-body">
            <h5>Dracula</h5>
            <p>George RR Martin</p>
            <p>La historia que se nos cuenta gira en torno a Dante Alligieri, un pagani y...</p>
            <br>
              <a class="btn btn-primary" href="downloads/hola.txt" download="book.txt">Descargar</a>
            <br><br>
            <a href="categorias/comedia.php" class="badge rounded-pill text-white bg-danger text-decoration-none">Comedia</a>
            <a href="categorias/ficcion.php" class="badge rounded-pill text-white bg-success text-decoration-none">Ficción</a>
          </div>
        </a>
      </div>
      <div class="card col m-3">
        <a href="#" class="text-decoration-none text-dark">
          <img src="images/portada_dracula.jpg" class="card-img-top p-4">
          <div class="card-body">
            <h5>Dracula</h5>
            <p>George RR Martin</p>
            <p>La historia que se nos cuenta gira en torno a Dante Alligieri, un pagani y...</p>
            <br>
              <a class="btn btn-primary" href="downloads/hola.txt" download="book.txt">Descargar</a>
            <br><br>
            <a href="categorias/comedia.php" class="badge rounded-pill text-white bg-danger text-decoration-none">Comedia</a>
            <a href="categorias/ficcion.php" class="badge rounded-pill text-white bg-success text-decoration-none">Ficción</a>
          </div>
        </a>
      </div>
    </div>


    
    <div style="height: 100px;"></div>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-search="Tiger Nixon">T. Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td data-order="1303689600">Mon 25th Apr 11</td>
                <td data-order="320800">$320,800/y</td>
            </tr>
            <tr>
                <td data-search="Garrett Winters">G. Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td data-order="1311552000">Mon 25th Jul 11</td>
                <td data-order="170750">$170,750/y</td>
            </tr>
            <tr>
                <td data-search="Ashton Cox">A. Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td data-order="1231718400">Mon 12th Jan 09</td>
                <td data-order="86000">$86,000/y</td>
            </tr>
            <tr>
                <td data-search="Cedric Kelly">C. Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td data-order="1332979200">Thu 29th Mar 12</td>
                <td data-order="433060">$433,060/y</td>
            </tr>
            <tr>
                <td data-search="Airi Satou">A. Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td data-order="1227830400">Fri 28th Nov 08</td>
                <td data-order="162700">$162,700/y</td>
            </tr>
            <tr>
                <td data-search="Brielle Williamson">B. Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td data-order="1354406400">Sun 2nd Dec 12</td>
                <td data-order="372000">$372,000/y</td>
            </tr>
            <tr>
                <td data-search="Herrod Chandler">H. Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td data-order="1344211200">Mon 6th Aug 12</td>
                <td data-order="137500">$137,500/y</td>
            </tr>
            <tr>
                <td data-search="Rhona Davidson">R. Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td data-order="1287014400">Thu 14th Oct 10</td>
                <td data-order="327900">$327,900/y</td>
            </tr>
            <tr>
                <td data-search="Colleen Hurst">C. Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td data-order="1252972800">Tue 15th Sep 09</td>
                <td data-order="205500">$205,500/y</td>
            </tr>
            <tr>
                <td data-search="Sonya Frost">S. Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td data-order="1229126400">Sat 13th Dec 08</td>
                <td data-order="103600">$103,600/y</td>
            </tr>
            <tr>
                <td data-search="Jena Gaines">J. Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td data-order="1229644800">Fri 19th Dec 08</td>
                <td data-order="90560">$90,560/y</td>
            </tr>
            <tr>
                <td data-search="Quinn Flynn">Q. Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td data-order="1362268800">Sun 3rd Mar 13</td>
                <td data-order="342000">$342,000/y</td>
            </tr>
            <tr>
                <td data-search="Charde Marshall">C. Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td data-order="1224115200">Thu 16th Oct 08</td>
                <td data-order="470600">$470,600/y</td>
            </tr>
            <tr>
                <td data-search="Haley Kennedy">H. Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td data-order="1355788800">Tue 18th Dec 12</td>
                <td data-order="313500">$313,500/y</td>
            </tr>
            <tr>
                <td data-search="Tatyana Fitzpatrick">T. Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td data-order="1268784000">Wed 17th Mar 10</td>
                <td data-order="385750">$385,750/y</td>
            </tr>
            <tr>
                <td data-search="Michael Silva">M. Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td data-order="1353974400">Tue 27th Nov 12</td>
                <td data-order="198500">$198,500/y</td>
            </tr>
            <tr>
                <td data-search="Paul Byrd">P. Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td data-order="1276041600">Wed 9th Jun 10</td>
                <td data-order="725000">$725,000/y</td>
            </tr>
            <tr>
                <td data-search="Gloria Little">G. Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td data-order="1239321600">Fri 10th Apr 09</td>
                <td data-order="237500">$237,500/y</td>
            </tr>
            <tr>
                <td data-search="Bradley Greer">B. Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td data-order="1350086400">Sat 13th Oct 12</td>
                <td data-order="132000">$132,000/y</td>
            </tr>
            <tr>
                <td data-search="Dai Rios">D. Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td data-order="1348617600">Wed 26th Sep 12</td>
                <td data-order="217500">$217,500/y</td>
            </tr>
            <tr>
                <td data-search="Jenette Caldwell">J. Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td data-order="1315008000">Sat 3rd Sep 11</td>
                <td data-order="345000">$345,000/y</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
  </main>
  <footer>
      <?php include("includes/footer.php") ?>
  </footer>
  
 
    <!-- jquery, popper y boostrap -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <!-- <script src="assets/popper/popper.min.js"></script> -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
    <script src="script.js"></script>

</body>
</html>