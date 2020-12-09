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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
          <span lang="en">Agriculture Open Well Pump Selection</span>
          <span lang="ka">ಗೃಹ ಮತ್ತು ವಸತಿ ನಿಲಯಕ್ಕೆ ತೊಟ್ಟಿ / ತೆರೆದ ಭಾವಿ ಪಂಪಿನ ಆಯ್ಕೆ</span>
        </h5>
      </div>

      <div class="container">
        <form action="/acorrp.php">
          <div class="card">
            <div class="forminput">
              <h5 lang="ka">ನಮಿಶಕ್ಕೆ ಎಶ್ಟು ನೀರನ್ನು ಪಂಪ್ ಮಾಡಬೆಕು</h5>
              <h5 lang="en">Water to be Pumped per Minute</h5>
              &emsp;
              <div class="input-suffix">
                <input type="number"   class="" />
                <h6>
                  <strong lang="ka">ಲೀಟರ್ಗಳಲ್ಲ</strong>
                  <strong lang="en">in litres</strong>
                </h6>
              </div>
            </div>

            <div class="forminput">
              <h5 lang="ka">ಕಾಲುವೆ ಅಥವಾ ನದಿ ಮಟ್ಟದಿಂದ ಎಶ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೆಕು</h5>
              <h5 lang="en">Height to be pumped from Canal or River</h5>
              &emsp;
              <div class="input-suffix" >
                <input type="number"    class="" />
                <h6>
                  <strong lang="en">in metres</strong>
                  <strong lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</strong>
                </h6>
              </div>
            </div>
            <div class="forminput" style="border-bottom:none !important;">
              <h5 lang="ka">ಎಶ್ಟು ದೂರಕ್ಕೆ ನೀರನ್ಣು ತಳ್ಳಬೆಕು</h5>
              <h5 lang="en">Horizontal Distance to be Pumped</h5>
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
              <h5 lang="ka">ಯಾವ ತಯಾರಿಕೆಯ ಪಂಪ್ ಬೇಕಾಗಿದೆ</h5>
              <h5 lang="en">Which Make Pump Required</h5>
              &emsp;
              <select type="number" placeholder="Metres" class="">
                <h6><strong>in metres</strong></h6>
                <option value="">Any Make</option>
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
