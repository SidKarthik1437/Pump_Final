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
    <link rel="stylesheet" href="index.css" />
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
    <!-- Done by Tejas on 26th Nov -->
    <div class="productmain">
      <div class="mainheading">
        <h5>
          <strong lang="en">Domestic Sump / Open Well Pump Selection</strong>
          <strong lang="ka">
            ಗೃಹ ಮತ್ತು ವಸತಿ ನಿಲಯಕ್ಕೆ ತೊಟ್ಟಿ / ತೆರೆದ ಭಾವಿ ಪಂಪಿನ ಆಯ್ಕೆ
          </strong>
        </h5>
        <button id="switch-lang" style="color: black">
          <span lang="en">ಕನ್ನಡ</span>
          <span lang="ka">English</span>
        </button>
      </div>

      <div class="container">
        <form action="/soborewell.php">
          <div class="forminput">
            <h5 lang="ka">ನೀರಿನ ಅವಶ್ಯಕತೆ ದಿನಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ</h5>
            <h5 lang="en">Total Water Required per day</h5>
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
            <h5 lang="ka">
              ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ
            </h5>
            <h5 lang="en">Total Height to be pumped</h5>
            &emsp;
            <div class="input-suffix">
              <input type="number"    class="" />
              <h6>
                <strong lang="en">in metres</strong>
                <strong lang="ka">ಮೀಟರ್ಗಳಲ್ಲಿ</strong>
              </h6>
            </div>
          </div>

          <div class="formradio">
            <h4 lang="ka">ನೀರಿನ ಅವಶ್ಯಕತೆ ದಿನಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ</h4>
            <h4 lang="en">Power Supply available</h4>
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
            <h5 lang="ka">
              ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ
            </h5>
            <h5 lang="en">Which Make Pump Required</h5>
            &emsp;
            <select type="number"    class="">
              <option value="">Any Make</option>
              <option value="">UNEEL</option>
            </select>
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
