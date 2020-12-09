<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=yes"
    />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="pages.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>PRAJASEVE</title>
  </head>

  <body>
    <div class="productmain">
      <div class="mainheading">
        <div class="headermenu">
          <a href="index.php"><i  class="material-icons ripple">arrow_back_ios</i> </a>          
          <a href="index.php"><i  class="material-icons ripple">home</i></a> 
        </div>
        <h5>
          <span lang="en">Industry Polder Pump Selection</span>
          <span lang="ka">ಕೈಗಾರಿಕೆ ಹೊಂಡ ಅಥವಾ ಕೊಳದ ಪಂಪ್ ಆಯ್ಕೆ</span>
        </h5>
      </div>

      <div class="container">
        <form action="/indpol.php">
          <div class="card">
            <div class="forminput">
              <h5 lang="ka">ಎಶ್ಟು ಕೆಸರು ನೀರನ್ನು</h5>
              <h5 lang="en">Drainage or Muddy Water to be Pumped</h5>
              &emsp;
              <div class="input-suffix">
                <input type="number"   class="" />
                <h6>
                  <strong lang="ka">ನಮಿಶಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ</strong>
                  <strong lang="en">in LPM</strong>
                </h6>
              </div>
            </div>

            <div class="forminput" style="border-bottom:none !important;"></div>
              <h5 lang="ka">ಎಶ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಪಂಪ್ ಮಾಡಬೇಕು</h5>
              <h5 lang="en">Height to be pumped</h5>
              &emsp;
              <div class="input-suffix" >
                <input type="number"    class="" />
                <h6>
                  <strong lang="en">in metres</strong>
                  <strong lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</strong>
                </h6>
              </div>
            </div>

            <div class="formwaterpump">
              <h5 lang="ka">ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ</h5>
              <h5 lang="en">Which Make Pump Required</h5>
              &emsp;
              <select type="number"    class="">
                <option value="">Select</option>
                <option value="">UNEEL</option>
              </select>
            </div>
          </div>

          <div class="buttons">
            <button type="button" lang="en" class="btn btn-light" id="clearbtn">
              CLEAR
            </button>
            <button type="button" lang="ka" class="btn btn-light" id="clearbtn">
              ಅಳಿಸಿಹಾಕು
            </button>
            <button
              type="submit"
              lang="en"
              class="btn btn-light"
              id="searchbtn"
            >
              SEARCH
            </button>
            <button
              type="submit"
              lang="ka"
              class="btn btn-light"
              id="searchbtn"
            >
              ಹುಡುಕು
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
  <script>
    $('[lang="ka"]').hide();

    $(document).ready(function () {
      $("#switch-lang").click(myFunction);
    });

    function myFunction() {
      $('[lang="ka"]').toggle();
      $('[lang="en"]').toggle();
    }
  </script>
</html>
