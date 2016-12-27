<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Request Form</title>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript">
    function disablefield(){
        if (document.getElementById('PreviousTransfusionNO').checked == 1){
          document.getElementById('TransfusionReactionYES').disabled='disabled';
          document.getElementById('TransfusionReactionNO').disabled='disabled';
          document.getElementById('TransfusionReactionNO').value='1';
          document.getElementById('TransfusionReactionYES').value='0';
        }else{
          document.getElementById('TransfusionReactionYES').disabled='';
          document.getElementById('TransfusionReactionNO').disabled='';
          document.getElementById('TransfusionReactionYES').value='Allowed';
          }
        }
</script>

  </head>
  <?php $page = 'two'; include('header.php'); ?>
<body>
  <div style=margin:auto; class="row">
    <div class="col-md-12">
  <form action="post.php" method="POST" style=min-width:768px class="form-horizontal" role ="form">
    <div class = "form-inline">
      <div class ="col-xs-12">
        <legend>BLOOD REQUEST FORM</legend>
        <div class="col-xs-5">
          <div>
            <label for="HospitalName">Hospital</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="text" class="form-control" name="Hospital" placeholder="">
          </div>
          <div style=margin-top:20px>
            <label for="PatientName">Name (Block Letter)</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="text" class="form-control" name="PatientName" placeholder="">
          </div>
          <div style=margin-top:20px>
            <label for="WardNo">Ward No</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control" name="WardNo" placeholder="" min="1">
          </div>
          <div style=margin-top:20px>
            <label for="CabinNo">Cabin No.</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control" name="CabinNo" placeholder="" min="1">
          </div>
          <div style=margin-top:20px>
            <label for="HospitalRegdNo">Hospital Regd. No.</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control" name="HospitalRegdNo" placeholder="" min="1">
          </div>
          <div style=margin-top:20px>
            <label for="DateOfAdmission">Date of Admission</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="date" class="form-control" name="DateOfAdmission" placeholder="" >
          </div>

        </div>

        <div class="col-xs-5 col-form-label">
            <div>
              <label for="DateORequest">Date of Request</label>
              <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="date" class="form-control" name="DateOfRequest" placeholder="" >
            </div>
            <div style=margin-top:20px>
              <label for="Age">Age</label>
              <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control" name="Age" placeholder="" min="1">
            </div>
            <div style=margin-top:20px>
              <label for="BedNo">Bed No.</label>
              <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control" name="BedNo" placeholder="" min="1">
            </div>
            <div style=margin-top:20px>
              <label for="UnitNo">Unit No.</label>
              <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control" name="UnitNo" placeholder="" min="1">
            </div>
            <div style=margin-top:20px>
              <label for="BloodGroup">Blood Group(if Know)ABO </label>
              <select style=float:right;margin-right:50px;margin-top:-5px;width:45% type="text" class="form-control" name="ABO" placeholder="">
                <option value ="A">A</option>
                <option value ="B">B</option>
                <option value ="AB">AB</option>
                <option value ="O">O</option>
              </select>
            </div>
            <div style=margin-top:20px>
              <label for="RhD">Rh D</label>
              <select style=float:right;margin-right:50px;margin-top:-5px;width:45% type="text" class="form-control" name="RhD" placeholder="">
                <option value ="+">+</option>
                <option value ="-">-</option>
              </select>
            </div>
            <div style=margin-top:20px>
              <label for="LabRefNo">Lab Ref. No.</label>
              <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="number" class="form-control" name="LabRefNo" placeholder="" min="1">
            </div>
        </div>
          <div class="col-xs-2 col-form-label">
            <div style=margin-left:-50px;margin-top:50px>
              <label class="form-check-label"><for="Gender">Gender</label>
              <input style=margin-left:15px type="radio" class="form-check-input" name="GenderRadio" value="Male"> Male
              <input style=margin-left:15px type="radio" class="form-check-input" name="GenderRadio" value="Female"> Female
            </div>
          </div>
        </div>
    </div>

    <div class ="col-xs-12">
        <legend>HISTORY</legend>
        <div class="col-xs-5">
          <div>
            <label for="Diagnosis">Diagnosis</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="text" class="form-control" name="Diagnosis" placeholder="">
          </div>
          <div style=margin-top:20px>
            <label for="TransfusionReason">Reason For Transfusion</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="text" class="form-control" name="TransfusionReason" placeholder="">
          </div>
          <div style=margin-top:20px>
            <label for="Haemoglobin">Haemoglobin</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="text" class="form-control" name="Haemoglobin" placeholder="">
          </div>
          <div style=margin-top:20px>
            <label for="ObstetricalHistory">Obstetrical History</label>
            <input style=float:right;margin-right:50px;margin-top:-5px;width:45% type="text" class="form-control" name="ObstetricalHistory" placeholder="">
          </div>
        </div>
        <div class="col-xs-7">
          <div>
            <label class="form-check-label"><for="Antibodies">Antibodies</label>
            <input style=margin-left:15px type="radio" class="form-check-input" name="Antibodies" value="1"> Yes
            <input style=margin-left:15px type="radio" class="form-check-input" name="Antibodies" value="0"> No
          </div>
          <div style=margin-top:20px>
            <label class="form-check-label"><for="PreviousTransfusion">Previous Transfusion</label>
            <input id="PreviousTransfusionYES" style=margin-left:15px type="radio" class="form-check-input" name="Transfusion" value="1"> Yes
            <input id="PreviousTransfusionNO" style=margin-left:15px type="radio" class="form-check-input" name="Transfusion" value="0"> No
          </div>
          <div style=margin-top:20px>
            <label class="form-check-label"><for="TransfusionReactionYES">Any Previous Transfusion Reaction</label>
            <input id="TransfusionReactionYES" style=margin-left:15px type="radio" class="form-check-input" name="TransfusionReaction" value="1" onChange="disablefield()"> Yes
            <input id="TransfusionReactionNO"style=margin-left:15px type="radio" class="form-check-input" name="TransfusionReaction" value="0" onChange="disablefield()"> No
          </div>
          <div style=margin-top:20px>
            <label class="form-check-label"><for="ReactionType">Type of Reaction</label>
            <input style=margin-left:10px id="Fever" type="checkbox" class="check"  name="ReactionFever" value="">
             <label style=margin-left:10px for="Fever"><span class="icon"></span> Fever</label>
             <input style=margin-left:10px id="Allergic" type="checkbox" class="check"  name="ReactionAllergic" value="">
              <label style=margin-left:10px for="Allergic"><span class="icon"></span> Allergic</label>
              <input style=margin-left:10px id="Anaphylactic" type="checkbox" class="check"  name="Anaphylactic" value="">
               <label style=margin-left:10px for="Anaphylactic"><span class="icon"></span> Anaphylactic</label>
               <input style=margin-left:10px id="ReactionMisTransfusion" type="checkbox" class="check"  name="ReactionMisTransfusion" value="">
                <label style=margin-left:10px for="ReactionMisTransfusion"><span class="icon"></span> Mismatch Transfusion</label>
            <input style=;width:45%; type="text" class="form-control" name="etc" placeholder="etc">
          </div>
        </div>

      <div class = "form-inline col-form-label">
        <div class ="col-xs-5">
          <legend style=text-align:center;margin-top:50px;font-weight:bold>REQUEST</legend>
          <div>
            <div>
              <div style=margin-top:25px>
                <input id="ABO" type="checkbox" class="check"  name="ABO" value="" unchecked>
                 <label for="ABO"><span class="icon"></span> ABO grouping & Rh D typing</label>
              </div>
              <div style=margin-top:25px>
                <input id="RequestScreening" type="checkbox" class="check" name="RequestScreening" value="" unchecked>
                <label for="RequestScreening"><span class="icon"></span> Screening, cross matching</label>
              </div>
              <div style=margin-top:25px>
                <input id="RequestCoombs" type="checkbox" class="check" name="RequestCoombs" value="" unchecked>
                <label for="RequestCoombs"><span class="icon"></span> Coomb's test - Direct/Indirect</label>
              </div>
              <div style=margin-top:25px>
                <input id="RequestAntibody" type="checkbox" class="check" name="RequestAntibody" value="" unchecked>
                <label for="RequestAntibody"><span class="icon"></span> Antibody detection / titration/nameentification</label>
              </div>
              <div style=margin-top:25px>
                <input id="RequestPheno" type="checkbox" class="check" name="RequestPheno" value="" unchecked>
                <label for="RequestPheno"><span class="icon"></span> Rheus Phenotype & Genotype</label>
              </div>
              <div  style=margin-top:25px>
                <label style=font-weight:100 for="MinorBloodGroups">Minor blood groups</label>
                <input style=float:right;margin-right:50px;margin-top:-5px;width:45%; type="text" class="form-control" name="MinorBloodGroups" placeholder="">
              </div>
              <div  style=margin-top:25px>
                <label style=font-weight:100 for="TimeDateReq">Time & Date </label>
                <input style=float:right;margin-right:50px;margin-top:-5px;width:45%; type="datetime-local" class="form-control" name="TimeDateReq" placeholder="">
              </div>
              <div style=margin-top:25px>
                <label style=font-weight:100 for=" nameOfDoctor">Name of Doctor</label>
                <input style=float:right;margin-right:50px;margin-top:-5px;width:45%; type="text" class="form-control" name="nameofDoctor" placeholder="">
              </div>
              <div style=margin-top:25px>
                <label style=font-weight:100 for=" DeliveredTo">Delivered To</label>
                <select style=float:right;margin-right:50px;margin-top:-5px;width:45%; type="text" class="form-control" name="DeliveredTo" placeholder="">
                  <option value="Doctor">Doctor</option>
                  <option value="Nurse">Nurse</option>
                  <option value="Relative">Relative</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      <div class ="col-xs-6">
        <legend style=text-align:center;margin-top:50px;font-weight:bold>PROVIDED PRODUCT</legend>
        <div class ="col-xs-12 col-form-label">
          <div class = "col-xs-12 col-form-label">
              <div>
              <label style=font-weight:100;padding-top:8px for="FreshWholeBlood">Fresh Whole Blood</label>
              <input style=width:22%;float:right;margin-right:180px; type="number" class="form-control" name="FreshBlood" value="0" placeholder="Units" min='0'>
            </div>
            <div style=margin-top:25px>
              <label style=font-weight:100;padding-top:8px for="WholeBlood">Whole Blood</label>
              <input style=width:22%;float:right;margin-right:180px type="number" class="form-control" name="WholeBlood" value="0" placeholder="Units" min='0'>
            </div>
            <div style=margin-top:25px>
              <label style=font-weight:100;padding-top:8px for="RedCell">Red Cell</label>
              <input style=;width:22%;margin-top:5px;float:right;margin-right:180px type="number" class="form-control" name="RedCell" value="0" placeholder="Units" min='0'>
            </div>
            <div style=margin-top:25px>
              <label style=font-weight:100;padding-top:8px for="PlateletRichPlasma">Platelet rich plasma</label>
              <input style=width:22%;margin-top:5px;float:right;margin-right:180px type="number" class="form-control" name="Platelet" value="0" placeholder="Units" min='0'>
            </div>
            <div style=margin-top:25px>
              <label style=font-weight:100;padding-top:8px for="FreshPlasma">Fresh Plasma</label>
              <input style=width:22%;margin-top:5px;float:right;margin-right:180px type="number" class="form-control" name="FreshPlasma" value="0" placeholder="Units" min='0'>
            </div>
            <div style=margin-top:25px>
              <label style=font-weight:100;padding-top:8px for="PlateletConcentrate">Platelet Concentrate</label>
              <input style=width:22%;margin-top:5px;float:right;margin-right:180px type="number" class="form-control" name="PlateletConcentrate" value="0" placeholder="Units" min='0'>
            </div>
            <div style=margin-top:25px>
              <label style=font-weight:100;padding-top:8px for="FFP">F.F.P</label>
              <input style=width:22%;margin-top:5px;float:right;margin-right:180px type="number" class="form-control" name="FFP" value="0" placeholder="Units" min='0'>
            </div>
            <div style=margin-top:25px>
              <label style=font-weight:100;padding-top:8px for="Cryoprecipitate">Cryoprecipitate</label>
              <input style=width:22%;margin-top:5px;float:right;margin-right:180px type="number" class="form-control" name="Cryoprecipitate" value="0" placeholder="Units" min='0'>
            </div>
            <div style=margin-top:25px>
              <label style=font-weight:100;padding-top:8px for="ProteinRichPlasma">Protein rich / stored plasma</label>
              <input style=width:22%;margin-top:5px;float:right;margin-right:180px type="number" class="form-control" name="ProteinRichPlasma" value="0" placeholder="Units" min='0'>
            </div>
            <div style=margin-top:25px>
              <label style=font-weight:100;margin-top:10px for="Signature">Signature</label>
              <select style=width:45%;margin-top:5px;float:right;margin-right:180px type="text" class="form-control" name="Signature" placeholder="">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <div style=margin-top:50px;margin-bottom:50px>
              <label style=font-weight:100;margin-top:8px for="Date">Date</label>
              <input style=width:45%;margin-top:5px;float:right;margin-right:180px type="date" class="form-control" name="DateSigned" placeholder="">
            </div>
          </div>
        </div>
      </div>
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
