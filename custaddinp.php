<!DOCTYPE html>
<html></html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="pages.css" />
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
        <strong>
          <h4>Customer Address Input</h4>
          <h4>ನೀರಿನ ಪಂಪ್ ಆಯ್ಕೆ</h4>
        </strong>
        
      </div>
      <div class="container">
        <form action="custaddinp.php">
          <div class="form-group">
            <label>Full Name</label>
            <div class="fullname_input">
              <select class="form-control name_prefix">
                <option>Mr.</option>
                <option>Ms.</option>
                <option>Mrs.</option>
                <option>Dr.</option>
              </select>

              <input
                type="text"
                class="form-control name_text"
                placeholder="Enter Full Name"
              />
            </div>
          </div>

          <div class="form-group">
            <label>Relation</label>
            <div class="fullname_input">
              <select class="form-control name_prefix">
                <option>S/O</option>
                <option>D/O</option>
              </select>

              <input
                type="text"
                class="form-control name_text"
                placeholder="Enter Relation Name"
              />
            </div>
          </div>

          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" rows="3">Enter Address</textarea>
          </div>

          <div class="form-group">
            <label>Pincode</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter Pincode"
            />
          </div>

          <div class="form-group">
            <label>Place/Village</label>
            <div class="place_input">
              <select class="form-control">
                <option>Example 1</option>
                <option>Example 2</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Area/Hobli</label>
            <div class="area_input">
              <select class="form-control">
                <option>Example 1</option>
                <option>Example 2</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Taluk</label>
            <div class="taluk_input">
              <select class="form-control">
                <option>Example 1</option>
                <option>Example 2</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>District</label>
            <div class="district_input">
              <select class="form-control">
                <option>Example 1</option>
                <option>Example 2</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>State</label>
            <div class="state_input">
              <select class="form-control">
                <option>Example 1</option>
                <option>Example 2</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Mobile Number</label>
            <div class="mobilenumber_input input-group">
              <div class="input-group-prepend">
                <span class="input-group-text number_prefix">+91</span>
              </div>
              <input
                type="number"
                class="form-control"
                placeholder="Enter Mobile Number"
              />
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input
              type="email"
              class="form-control"
              placeholder="name@example.com"
            />
          </div>

          <div class="buttons">
            <button type="button" class="btn btn-light" id="clearbtn">
              CLEAR
            </button>
            <button type="submit" class="btn btn-light" id="searchbtn">
              ENTER
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
