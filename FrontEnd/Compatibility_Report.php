<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Request Form</title>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
<?php $page = 'three'; include('header.php'); ?>
<body>
  <div style=margin:auto; class="row">
    <div class="col-md-12">
  <form style=min-width:768px class="form-horizontal" role ="form">
    <div class = "form-inline">
      <div class ="col-xs-12">
        <legend>COMPATIBILITY FORM</legend>
        <div class="col-xs-6">
          <div>
            <label for="LabRefNo">Lab No.</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:61% type="number" class="form-control"name="LabRefNo" placeholder="" min="1" required>
          </div>
        </div>
        <div class ="col-xs-6">
          <div>
            <label style=margin-left:20%; for="Date">Date</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:61% type="date" class="form-control"name="date" placeholder="" required>
          </div>
        </div>
      </div>
    </div>
    <div class = "col-xs-12">
      <div class = "col-xs-12" style=margin-top:60px>
        <label for="PatientName">Patient's Name</label>
        <input style=float:right;margin-right:50px;margin-top:-5px;width:81% type="text" class="form-control"name="PatientName" placeholder=""required>
      </div>
    </div>
    <div class = "col-xs-12">
      <div class = "col-xs-4" style=margin-top:20px>
        <label for="Age">Age</label>
        <input style=float:right;margin-right:28px;margin-top:-5px;width:45% type="number" class="form-control"name="Age" placeholder="" min="1" required>
      </div>
      <div class = "col-xs-4" style=margin-top:20px;>
        <label style=margin-left:20%; class="form-check-label"><for="Gender">Sex</label>
        <input style=margin-left:15% type="radio" class="form-check-input" name="GenderRadio" value="Male" unchecked required> Male
        <input style=margin-left:15% type="radio" class="form-check-input" name="GenderRadio" value="Female" required> Female
      </div>
      <div class = "col-xs-4" style=margin-top:20px>
        <label style=margin-left:20%; for="LabRegNo">Reg.No</label>
        <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control"name="LabRegNo" placeholder="" min="1" required>
      </div>
    </div>
    <div class = "col-xs-12">
      <div class = "col-xs-4" style=margin-top:20px>
        <label for="CabinWard">Cabin / Ward</label>
        <input style=float:right;margin-right:28px;margin-top:-5px;width:45% type="number" class="form-control"name="CabinWard" placeholder="" min="1" required>
      </div>
      <div class = "col-xs-4" style=margin-top:20px;>
        <label style=margin-left:20%; for="BedNo">Bed No.</label>
        <input style=float:right;margin-right:15.5%;margin-top:-5px;width:45% type="number" class="form-control"name="BedNo" placeholder="" min="1" required>
      </div>
      <div class = "col-xs-4" style=margin-top:20px>
        <label style=margin-left:20%; for="Unit">Unit</label>
        <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control"name="Unit" placeholder="" min="0" required>
      </div>
    </div>
    <div class = "col-xs-12">
      <div class = "col-xs-6" style=margin-top:20px>
        <label for="ABO">Patient Blood Group(ABO)</label>
        <input style=float:right;margin-right:50px;margin-top:-5px;width:61% type="number" class="form-control"name="ABO" placeholder=""required>
      </div>
      <div class = "col-xs-6" style=margin-top:20px;>
        <label style=margin-left:20%; for="RhD">Rh (D)</label>
        <select style=float:right;margin-right:50px;margin-top:-5px;width:61% type="number" class="form-control"name="BedNo" placeholder=""required>
          <option value ="+">Positive</option>
          <option value ="-">Negative</option>
        </select>
      </div>
    </div class=col-xs-12>
    <div class = "col-xs-12">
      <div class = "col-xs-4" style=margin-top:20px>
        <label for="DonorBlood">DonorBlood</label>
        <select style=float:right;margin-right:28px;margin-top:-5px;width:45% type="text" class="form-control" name="DeliveredTo" placeholder="">
          <option value="Voluntary">Voluntary</option>
          <option value="Party">Party</option>
          <option value="Exchange">Exchange</option>
          <option value="Stored">Stored</option>
        </select>
      </div>
    </div class=col-xs-12>
    <div class="button">
	  <input type="submit"  name="submit">
    </div>
  </div>
</form>
  </div>
</div>
</body>

</html>
