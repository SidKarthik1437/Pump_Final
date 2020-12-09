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
        <strong>
          <h5 lang="en">Domestic Or Community Bore Well Selection</h5>
          <h5 lang="ka">ಗೃಹ ಅಥವಾ ವಸತಿ ನಿಲಯಕ್ಕೆ ಕೊಳವೆ ಭಾವಿಯ ಪಂಪಿನ ಆಯ್ಕೆ</h5>
        </strong>
      </div>

      <div class="container">
        <form action="/dcborewell.php">
          <div class="card">
            <div class="formradio">
              <h4 lang="ka">ನಿಮ್ಮ ಕೊಳವೆ ಭಾವಿಯ ವ್ಯಾಸ</h4>
              <h4 lang="en">Diameter of borewell</h4>
              <h6 style="text-align:center; margin: 0 !important;">*Select Any One</h6>
              &emsp;
              <div class="radioinput">
                <span lang="ka">3 ಇಂಚು</span>
                <span lang="en">80mm</span>
                <input type="radio" name="diameter" id="rdbtn1" checked="checked" />
              </div>
              <div class="radioinput">
                <span lang="ka">4 ಇಂಚು</span>
                <span lang="en">100mm</span>
                <input type="radio" name="diameter" />
              </div>
              <div class="radioinput">
                <span lang="ka">6 ಇಂಚು</span>
                <span lang="en">150mm</span>
                <input type="radio" name="diameter" />
              </div>
            </div>
          </div>

          <div class="card">
            <div class="forminput">
              <h5 lang="ka">ಕೊಳವೆ ಭಾವಿಯ ಒಟ್ಟು ಆಳ</h5>
              <h5 lang="en">Total Bore Depth</h5>
              &emsp;
              <div class="input-suffix">
                <input type="number"   class="" />
                <h6>
                  <strong lang="en">in litres</strong>
                  <strong lang="ka">ಲೀಟರ್ಗಳಲ್ಲಿ</strong>
                </h6>
              </div>
            </div>
            <div class="forminput">
              <h5 lang="ka">ಸ್ಥಿರ ನೀರಿನ ಮಟು</h5>
              <h5 lang="en">Static Water Level</h5>
              &emsp;
              <div class="input-suffix" >
                <input type="number" placeholder="" class="" />
                <h6 >
                  <strong lang="en">in metres</strong>
                  <strong lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</strong>
                </h6>
              </div>
            </div>

            <div class="forminput">
              <h5 lang="ka">ಹೆಚ್ಚು ನೇರು ಸಿಕ್ಕಿದ ಆಳ</h5>
              <h5 lang="en">Final Water Source Depth</h5>
              &emsp;
              <div class="input-suffix" >
                <input type="number" placeholder="" class="" />
                <h6 >
                  <strong lang="en">in metres</strong>
                  <strong lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</strong>
                </h6>
              </div>
            </div>

            <div class="forminput">
              <h5 lang="ka">ಭೂಮಿಯ ಮಟ್ಟದಿಂದ ಎಶ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೆಕು</h5>
              <h5 lang="en">Height to be pumped from Ground Level</h5>
              &emsp;
              <div class="input-suffix" >
                <input type="number" placeholder="" class="" />
                <h6 >
                  <strong lang="en">in metres</strong>
                  <strong lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</strong>
                </h6>
              </div>
            </div>

            <div class="forminput">
              <h5 lang="ka">ಒಟ್ಟು ನೀರಿನ ಲಭ್ಯತೆ</h5>
              <h5 lang="en">Total Yield Available</h5>
              &emsp;
              <div class="input-suffix" >
                <input type="number" placeholder="" class="" />
                <h6 >
                  <strong lang="en">in LPM</strong>
                  <strong lang="ka">ಲೀಟರ್ ನಿಮಿಶಕ್ಕೆ</strong>
                </h6>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="formradio">
              <h4 lang="ka">ವಿದ್ಯುತ್ ಶಕ್ತಿ ಲಭ್ಯತೆ</h4>
              <h4 lang="en">Power Supply available</h4>
              <h6 style="text-align:center; margin: 0 !important;">*Select Any One</h6>
              &emsp;
              <div class="radioinput">
                <span lang="ka">ಒಂದು ಫೇಸ್ ೨೩೦ ವೋಲ್ಟ್</span>
                <span lang="en">Single Phase 230V</span>
                <input type="radio" name="power" id="rdbtn1" checked="checked" />
              </div>
              <div class="radioinput">
                <span lang="ka">ಮೂರು ಫೇಸ್ ೪೧೫ ವೋಲ್ಟ್</span>
                <span lang="en">Three Phase 415V</span>
                <input type="radio" name="power" />
              </div>
            </div>
         
          
            <div class="formwaterpump">
              <h5 lang="ka">ಯಾವ ತಯಾರಿಕೆಯ ಪಂಪ್ ಬೇಕಾಗಿದೆ</h5>
              <h5 lang="en">Which Make Pump Required</h5>
              &emsp;
              <select type="number"    class="">
                <option value="">Any Make</option>
                <option value="">UNEEL</option>
              </select>
            </div> 
          </div>
            <div class="buttons">
              <button type="button" class="btn btn-light" id="clearbtn">
                CLEAR
              </button>
              <button type="submit" class="btn btn-light" id="searchbtn">
                SEARCH
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
