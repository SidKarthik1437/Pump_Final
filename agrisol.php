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
          <h5 lang="en">Agriculture Solar Selection</h5>
          <h5 lang="ka">ವ್ಯವಸಾಯದ ಸೌರಶಕ್ತಿ ಆಯ್ಕೆ </h5>
        </strong>
        <button id="switch-lang" style="color: black">
          <span lang="en">ಕನ್ನಡ</span>
          <span lang="ka">English</span>
        </button>
      </div>

      <div class="container">
        <form action="/agrisol.php">
        <H1>IN DEVELOPTMENT..</H1>
          <!-- <div class="forminput">
                    <h5>ನೀರಿನ ಅವಶ್ಯಕತೆ ದಿನಕ್ಕೆ ಲೀಟರ್ಗಳಲ್ಲಿ </h5>
<h5>Water to be Pumped per Minute (in litres) </h5> &emsp;
                    <input type="number"   class="" >
                </div>
                
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ </h5>
<h5>Height to be pumped from Canal or River(in metres) </h5> &emsp;
                    <input type="number"    class="">
                </div>
                <div class="forminput">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ </h5>
<h5>Horizontal Distance to be Pumped(in metres) </h5> &emsp;
                    <input type="number"    class="">
                </div>
                
                <div class="formwaterpump">
                    <h5>ಒಟ್ಟು ಎಷ್ಟು ಎತ್ತರಕ್ಕೆ ನೀರನ್ನು ಎತ್ತಬೇಕು ಮೀಟರ್ಗಳಲ್ಲಿ </h5>
<h5>Which Make Pump Required</h5> &emsp;
                    <select type="number"    class="">
                        <option value="">
                            Select
                        </option>
                        <option value="">
                            UNEEL
                        </option>
                        </select>
                </div>
                <div class="buttons">
                   <button type="button" class="btn btn-light" id="clearbtn">CLEAR</button> 
                   <button type="submit" class="btn btn-light" id="searchbtn">SEARCH</button> 
                </div> -->
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
