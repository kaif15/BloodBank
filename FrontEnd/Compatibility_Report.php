<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Request Form</title>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php include_once "php_includes.php";?>
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
                <input style=float:right;margin-right:50px;margin-top:-5px;width:61% type="number" class="form-control"name="LabRefNo" placeholder="" min="1" value="1321" required readonly>
              </div>
            </div>
            <div class ="col-xs-6">
              <div>
                <label style=margin-left:20%; for="Date">Date</label>
                <input style=float:right;margin-right:50px;margin-top:-5px;width:61% type="date" class="form-control" value="<?php echo $today;?>" name="date" placeholder="" required>
              </div>
            </div>
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-12" style=margin-top:60px>
            <label for="PatientName">Patient's Name</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:81% type="text" class="form-control"name="PatientName" value="Aliaume Damala Badara Akon Thiam" placeholder=""required readonly>
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-4" style=margin-top:20px>
            <label for="Age">Age</label>
            <input style=float:right;margin-right:28px;margin-top:-5px;width:45% type="number" class="form-control"name="Age" value="24" placeholder="" min="1" required readonly>
          </div>
          <div class = "col-xs-4" style=margin-top:20px;>
            <label style=margin-left:20%; class="form-check-label"><for="Gender">Sex</label>
            <input style=margin-left:15% type="radio" class="form-check-input" name="GenderRadio" value="Male" checked readonly> Male
            <input style=margin-left:15% type="radio" class="form-check-input" name="GenderRadio" value="Female" readonly> Female
          </div>
          <div class = "col-xs-4" style=margin-top:20px>
            <label style=margin-left:20%; for="LabRegNo">Reg.No</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" value="6121098" class="form-control"name="LabRegNo" placeholder="" min="1" required readonly>
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-4" style=margin-top:20px>
            <label for="CabinWard">Cabin / Ward</label>
            <input style=float:right;margin-right:28px;margin-top:-5px;width:45% type="number" value="12" class="form-control"name="CabinWard" placeholder="" min="1" required readonly>
          </div>
          <div class = "col-xs-4" style=margin-top:20px;>
            <label style=margin-left:20%; for="BedNo">Bed No.</label>
            <input style=float:right;margin-right:15.5%;margin-top:-5px;width:45% value="23315" type="number" class="form-control"name="BedNo" placeholder="" min="1" required readonly>
          </div>
          <div class = "col-xs-4" style=margin-top:20px>
            <label style=margin-left:20%; for="Unit">Unit</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% value="2" type="number" class="form-control"name="Unit" placeholder="" min="0" required readonly>
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-4" style=margin-top:50px>
            <label for="ABO">Patient Blood Group(ABO)</label>
            <select style=float:right;margin-right:28px;margin-top:-5px;width:45% type="text" class="form-control" name="ABO" placeholder="" readonly>
              <option value ="A">A</option>
              <option selected value ="B">B</option>
              <option value ="AB">AB</option>
              <option value ="O">O</option>
            </select>
          </div>
          <div class = "col-xs-4" style=margin-top:50px>
          </div>
          <div class = "col-xs-4" style=margin-top:50px;>
            <label style=margin-left:20%; for="RhD">Rh (D)</label>
            <select style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control"name="RhD" placeholder=""required readonly>
              <option value ="+">Positive</option>
              <option selected value ="-">Negative</option>
            </select>
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-4" style=margin-top:50px>
            <label for="DonorBlood">DonorBlood</label>
            <select style=float:right;margin-right:28px;margin-top:-5px;width:45% type="text" class="form-control" name="DonorBlood" placeholder="">
              <option value="Voluntary">Voluntary</option>
              <option value="Party">Party</option>
              <option value="Exchange">Exchange</option>
              <option value="Stored">Stored</option>
            </select>
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-12" style=margin-top:20px>
            <div>
              <label for="TestFor">Test for :</label>
              <input id="WholeBlood" type="checkbox" class="check"  name="WholeBlood" value="">
              <label style=margin-left:10px for="WholeBlood"><span class="icon"></span> Whole blood</label>
              <input id="RCC" type="checkbox" class="check" name="RCC" value="">
              <label style=margin-left:10px for="RCC"><span class="icon"></span> RCC</label>
              <input id="WashedRBC" type="checkbox" class="check"  name="WashedRBC" value="">
              <label style=margin-left:10px for="WashedRBC"><span class="icon"></span> Washed RBC</label>
              <input id="PRP" type="checkbox" class="check"  name="PRP" value="">
              <label style=margin-left:10px for="PRP"><span class="icon"></span> PRP</label>
              <input id="FP" type="checkbox" class="check"  name="FP" value="">
              <label style=margin-left:10px for="FP"><span class="icon"></span> FP</label>
              <input id="Platelet" type="checkbox" class="check"  name="Platelet" value="">
              <label style=margin-left:10px for="Platelet"><span class="icon"></span> Platelet concentrate</label>
              <input id="FFP" type="checkbox" class="check"  name="FFP" value="">
              <label style=margin-left:10px for="FFP"><span class="icon"></span> FFP</label>
              <input id="Cryoprecipitate" type="checkbox" class="check"  name="Cryoprecipitate" value="">
              <label style=margin-left:10px for="Cryoprecipitate"><span class="icon"></span> Cryoprecipitate</label>
              <input id="Apheresis" type="checkbox" class="check"  name="Apheresis" value="">
              <label style=margin-left:10px for="Apheresis"><span class="icon"></span> Apheresis-Platelet</label>
              <input id="RBC" type="checkbox" class="check"  name="RBC" value="">
              <label style=margin-left:10px for="RBC"><span class="icon"></span> RBC</label>
              <input id="Plasma" type="checkbox" class="check"  name="Plasma" value="">
              <label style=margin-left:10px for="Plasma"><span class="icon"></span> Plasma</label>
            </div>
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-12" style=margin-top:20px>
            <label for="ScreeningNegative">Screening tests negative for :</label>
              <input id="HBsAG" type="checkbox" class="check"  name="HBsAG" value="">
              <label style=margin-left:10px for="HBsAG"><span class="icon"></span> HBsAG</label>
              <input id="HCV" type="checkbox" class="check" name="HCV" value="">
              <label style=margin-left:10px for="HCV"><span class="icon"></span> HCV</label>
              <input id="HIV" type="checkbox" class="check"  name="HIV" value="">
              <label style=margin-left:10px for="HIV"><span class="icon"></span> HIV</label>
              <input id="MP" type="checkbox" class="check"  name="MP" value="">
              <label style=margin-left:10px for="MP"><span class="icon"></span> MP</label>
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-4" style=margin-top:20px>
            <label for="DonerABO">Donor Blood Group (ABO)</label>
            <select style=float:right;margin-right:28px;margin-top:-5px;width:45% type="text" class="form-control" name="ABO" placeholder="">
              <option value ="A">A</option>
              <option value ="B">B</option>
              <option value ="AB">AB</option>
              <option value ="O">O</option>
            </select>
          </div>
          <div class="col-xs-4">
          </div>
          <div class = "col-xs-4" style=margin-top:20px;>
            <label style=margin-left:20%; for="RhD">Rh (D)</label>
            <select style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control"name="DonorRhD" placeholder=""required>
              <option value ="+">Positive</option>
              <option value ="-">Negative</option>
            </select>
          </div>
        </div>
        <div class ="col-xs-12">
          <div class="col-xs-6" style=margin-top:60px;>
            <div>
              <label for="BagNO">BAG NO:</label>
              <input style=float:right;margin-right:50px;margin-top:-5px;width:61% type="number" class="form-control"name="LabRefNo" placeholder="" min="1" value="11" required>
            </div>
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-12" style=margin:auto;margin-top:60px;>
            <input style=margin-left:25% type="radio" class="form-check-input" name="compatible" value="0" checked readonly> COMPITABLE
            <input style=margin-left:15% type="radio" class="form-check-input" name="compatible" value="1" readonly> FOR EXCHANGE
            <input style=margin-left:15% type="radio" class="form-check-input" name="compatible" value="2" readonly> INCOMPATIBLE
          </div>
        </div>
        <div class = "col-xs-12">
          <div class = "col-xs-12" style=margin:auto;margin-top:60px;>
            <input  type="radio" class="form-check-input" name="supply" value="0" checked readonly> Ready for supply
            <input style=margin-left:15% type="radio" class="form-check-input" name="supply" value="1" readonly> Supplied for transfusion
          </div>
        </div>
        <div class="col-xs-12">
          <div class = "col-xs-4" style=margin-top:40px;margin-bottom:50px>
            <label for="SignOfTechno">Sign of Technologist</label>
            <select style=float:right;margin-right:28px;margin-top:-5px;width:45% type="text" class="form-control" name="SignOfTechno" placeholder="">
              <option value ="Yes">YES</option>
              <option value ="NO">NO</option>
            </select>
          </div>
          <div class = "col-xs-4" style=margin-top:40px;margin-bottom:50px>
          </div>
          <div class = "col-xs-4" style=margin-top:40px;margin-bottom:50px>
            <label for="SignOfDoc">Sign of Doctor</label>
            <select style=float:right;margin-right:28px;margin-top:-5px;width:45% type="text" class="form-control" name="SignOfTechno" placeholder="">
              <option value ="Yes">YES</option>
              <option value ="NO">NO</option>
            </select>
          </div>
        </div>
        <div class="button">
    	  <input type="submit"  name="submit">
        </div>
    </form>
  </div>
</div>
</body>

</html>
