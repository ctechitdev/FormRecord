<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <?php

  include("setting/callcss.php");

  ?>

</head>


<style>
  * {

    box-sizing: border-box;
  }

  h2 {
    font-family: phetsarath OT;
  }

  input[type=text],
  select,
  textarea {

    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }

<<<<<<< HEAD
        <option value="KPTL">KPTL</option>
        <option value="KPLOG">KP Logistics</option>
        <option value="KPV">KPV</option>
        <option value="kSP">KSP</option>
        <option value="ພະແນກ HR">ພະແນກ HR</option>
        <option value="ພະແນກ Finance - Accounting">Finance - Accounting</option>
        <option value="ພະແນກ ICT">ພະແນກ ICT</option>
        <option value="ໜ່ວຍງານ BAD">ໜ່ວຍງານ BAD</option>
=======
  label {
    font-family: phetsarath OT;
    padding: 12px 12px 12px 0;
    display: inline-block;
  }
>>>>>>> ff409bb0cb46c92aa71f4a79331ff4c6039df844

  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;

  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
    margin-left: 12px;

  }

  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }

  .col-50 {
    oat: left;
    width: 75%;
    margin-top: 6px;
    margin-left: 10px;
  }



  /* Clear floats after the columns */
  .row::after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {

    .col-25,
    .col-75,
    input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }

  body {
    font-size: 16px;
    font-family: phetsarath OT;
    background-color: #d8dfe7;
    color: darkblue;
  }

  .logoerea {
    background-color: white;
    margin: 30px auto;
    width: 100%;
  }

  .Depterea {
    color: blue;
  }

  #div1 {

    background-color: yellow;
  }

  #div2 {

    background-color: #42f5d7;
  }
</style>
<div class="logoerea">
  <center>
    <img src="kplogo.png" alt="Hot Air Balloons" width="70" height="70">
</div>

<body class="navbar-fixed sidebar-fixed" id="body">

  <h2>
    <center>ແບບສອບຖາມຄວາມເພິງພໍໃຈຂອງລູກຄ້າພາຍໄນ</center>
  </h2>



  <div class="wrapper">



    <div class="page-wrapper">


      <div class="content-wrapper">
        <div class="content">
          <div class="email-wrapper rounded border bg-white">
            <div class="row no-gutters justify-content-center">


              <div class="col-xxl-12">
                <div class="email-right-column  email-body p-4 p-xl-5">
                  <div class="email-body-head mb-5 ">


                  </div>
                  <!--<form action="FORMSURVEY_PROCESS_INT.php">-->
                  <!--<form method="post" action="FORMSURVEY_PROCESS_INT.php" id="usrform"> -->
                  <form method="post" action="FORMSURVEY_PROCESS_INT.php">

                    <div class="row">
                      <div class="col-lg-12">
                        <label for="ຊື່ຜູ້ປະເມີນ">ຊື່ຜູ້ປະເມີນ</label class="depterea">
                      </div>

                      <div class="col-lg-12">
                        <input type="text" id="responder" name="responder" placeholder="Your name..">
                      </div>
                    </div>


                    <div class="row  ">
                      <div class="col-lg-12">
                        <label for="ພະແນກຜູ້ປະເມີນ" id="div1">ພະແນກຜູ້ປະເມີນ</label>

                      </div>
                      <div class="col-lg-12">
                        <select id="dept" name="dept">
                          <option value="Unilever and Best Food">Unilever and Best Food</option>
                          <option value="Unicharm">Unicharm</option>
                          <option value="Food Catering">Food Catering</option>

                          <option value="Bridgestone Tyres">Bridgestone Tyres</option>
                          <option value="Yamaha">Yamaha</option>
                          <option value="Kubota">Kubota</option>
                          <option value="Shell">Shell</option>

                          <option value="KPTL">KPTL</option>
                          <option value="KP Logistics">KP LogisticsL</option>
                          <option value="KPV">KPV</option>
                          <option value="kSP">KSP</option>
                          <option value="ພະແນກ HR">ພະແນກ HR</option>
                          <option value="ພະແນກ Finance - Accounting">Finance - Accounting</option>
                          <option value="ພະແນກ ICT">ພະແນກ ICT</option>
                          <option value="ໜ່ວຍງານ BAD">ໜ່ວຍງານ BAD</option>

                        </select>
                      </div>

                      <div class="col-lg-12">
                        <label for="ພະແນກຜູ້ຖືກປະເມີນ" id="div2">ພະແນກຜູ້ຖືກປະເມີນ</label>
                      </div>
                      <div class="col-lg-12">
                        <select id="dept2" name="dept2">
                          <option value="HR (ການຈັດເຝິກອົບຮົມ)">HR (ການຈັດເຝິກອົບຮົມ)</option>
                          <option value="HR ( ສັນຫາ ວ່າຈ້າງ)">HR ( ສັນຫາ ວ່າຈ້າງ)</option>
                          <option value="HR/Admin( ບໍລິການລົດ)">HR/Admin( ບໍລິການລົດ)</option>
                          <option value="HR/Admin (ບໍລິການຫ້ອງການ)">HR/Admin (ບໍລິການຫ້ອງການ)</option>
                          <option value="Finance - Accounting">Finance - Accounting</option>
                          <option value="ICT">ICT</option>
                          <option value="ໜ່ວຍງານ  ISO">ໜ່ວຍງານ ISO</option>
                          <option value="ໜ່ວຍງານ BAD">ໜ່ວຍງານ BAD</option>
                          <option value="KPLG(ສາງ)">KPLG(ສາງ)</option>
                          <option value="KPLG(ຂົນສົ່ງ)">KPLG(ຂົນສົ່ງ)</option>

                        </select>
                      </div>

                      <div class="col-lg-12">
                        <label for="1. ກະບວນການ ແລະ ຂັ້ນຕອນການໃຫ້ບໍລິການມີຄວາມຊັດເຈນ ເຂົ້າໃຈງ່າຍ ແລະ ມີຄວາມຄ່ອງຕົວ">I. ກະບວນການ ແລະ ຂັ້ນຕອນການໃຫ້ບໍລິການມີຄວາມຊັດເຈນ ເຂົ້າໃຈງ່າຍ ແລະ ມີຄວາມຄ່ອງຕົວ</label>
                      </div>
                      <div class="col-lg-12">
                        <input type="radio" id="proceedanstep" name="proceedanstep" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
                        <input type="radio" id="proceedanstep" name="proceedanstep" value="4" /> 4 ຫຼາຍ <br>
                        <input type="radio" id="proceedanstep" name="proceedanstep" value="3" /> 3 ປານກາງ <br>
                        <input type="radio" id="proceedanstep" name="proceedanstep" value="2" /> 2 ນ້ອຍ <br>
                        <input type="radio" id="proceedanstep" name="proceedanstep" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
                        <input type="radio" id="proceedanstep" name="proceedanstep" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
                      </div>

                      <div class="col-lg-12">
                        <label for="2. ຄວາມສາມາດໃນການໃຫ້ບໍລິການໄດ້ວ່ອງໄວ">II. ຄວາມສາມາດໃນການໃຫ້ບໍລິການໄດ້ວ່ອງໄວ</label>
                      </div>
                      <div class="col-lg-12">
                        <input type="radio" id="skilltoserve" name="skilltoserve" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
                        <input type="radio" id="skilltoserve" name="skilltoserve" value="4" /> 4 ຫຼາຍ <br>
                        <input type="radio" id="skilltoserve" name="skilltoserve" value="3" /> 3 ປານກາງ <br>
                        <input type="radio" id="skilltoserve" name="skilltoserve" value="2" /> 2 ນ້ອຍ <br>
                        <input type="radio" id="skilltoserve" name="skilltoserve" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
                        <input type="radio" id="skilltoserve" name="skilltoserve" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
                      </div>

                      <div class="col-lg-12">
                        <label for="3. ທ່ານໄດ້ຮັບຄວາມສະດວກຈາກການຮັບບໍລິການ">III. ທ່ານໄດ້ຮັບຄວາມສະດວກຈາກການຮັບບໍລິການ</label>
                      </div>
                      <div class="col-lg-12">
                        <input type="radio" id="convinient" name="convinient" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
                        <input type="radio" id="convinient" name="convinient" value="4" /> 4 ຫຼາຍ <br>
                        <input type="radio" id="convinient" name="convinient" value="3" /> 3 ປານກາງ <br>
                        <input type="radio" id="convinient" name="convinient" value="2" /> 2 ນ້ອຍ <br>
                        <input type="radio" id="convinient" name="convinient" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
                        <input type="radio" id="convinient" name="convinient" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
                      </div>

                      <div class="col-lg-12">
                        <label for="4.  ຄວາມຊັດເຈນໃນການອະທິບາຍ ແລະ ສາມາດໃຫ້ຄໍາແນະນໍາໃນການ ໃຫ້ບໍລິການ">IV. ຄວາມຊັດເຈນໃນການອະທິບາຍ ແລະ ສາມາດໃຫ້ຄໍາແນະນໍາໃນການ ໃຫ້ບໍລິການ</label>
                      </div>

                      <div class="col-lg-12">
                        <input type="radio" id="clearexplain" name="clearexplain" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
                        <input type="radio" id="clearexplain" name="clearexplain" value="4" /> 4 ຫຼາຍ <br>
                        <input type="radio" id="clearexplain" name="clearexplain" value="3" /> 3 ປານກາງ <br>
                        <input type="radio" id="clearexplain" name="clearexplain" value="2" /> 2 ນ້ອຍ <br>
                        <input type="radio" id="clearexplain" name="clearexplain" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
                        <input type="radio" id="clearexplain" name="clearexplain" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
                      </div>

                      <div class="col-lg-12">
                        <label for="5. ມີຄວາມເອົາໃຈໃສ່ ກະຕືລືລົ້ນ ແລະ ເຕັມໃຈໃນການໃຫ້ບໍລິການ">V. ມີຄວາມເອົາໃຈໃສ່ ກະຕືລືລົ້ນ ແລະ ເຕັມໃຈໃນການໃຫ້ບໍລິການ</label>
                      </div>
                      <div class="col-75">
                        <input type="radio" id="intendtoserve" name="intendtoserve" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
                        <input type="radio" id="intendtoserve" name="intendtoserve" value="4" /> 4 ຫຼາຍ <br>
                        <input type="radio" id="intendtoserve" name="intendtoserve" value="3" /> 3 ປານກາງ <br>
                        <input type="radio" id="intendtoserve" name="intendtoserve" value="2" /> 2 ນ້ອຍ <br>
                        <input type="radio" id="intendtoserve" name="intendtoserve" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
                        <input type="radio" id="intendtoserve" name="intendtoserve" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
                      </div>

                      <div class="col-lg-12">
                        <label for="6. ພະນັກງານມີຄວາມຮູ້, ຄວາມເຂົ້າໃຈ ສາມາດໃຫ້ຄໍາແນະນໍາ ແລະສາມາດຕອບຂໍ້ສອບຖາມໄດ້ຕົງກັບຄວາມຕ້ອງການ">VI. ພະນັກງານມີຄວາມຮູ້, ຄວາມເຂົ້າໃຈ ສາມາດໃຫ້ຄໍາແນະນໍາ ແລະສາມາດຕອບຂໍ້ສອບຖາມໄດ້ຕົງກັບຄວາມຕ້ອງການ</label>
                      </div>
                      <div class="col-lg-12">
                        <input type="radio" id="haveknowledge" name="haveknowledge" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
                        <input type="radio" id="haveknowledge" name="haveknowledge" value="4" /> 4 ຫຼາຍ <br>
                        <input type="radio" id="haveknowledge" name="haveknowledge" value="3" /> 3 ປານກາງ <br>
                        <input type="radio" id="haveknowledge" name="haveknowledge" value="2" /> 2 ນ້ອຍ <br>
                        <input type="radio" id="haveknowledge" name="haveknowledge" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
                        <input type="radio" id="haveknowledge" name="haveknowledge" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
                      </div>

                      <div class="col-lg-12">
                        <label for="7. ມີມະນຸດສໍາພັນດີ, ສຸພາບ ແລະ ເປັນມິດ">VII. ມີມະນຸດສໍາພັນດີ, ສຸພາບ ແລະ ເປັນມິດ</label>
                      </div>
                      <div class="col-lg-12">
                        <input type="radio" id="humanrelate" name="humanrelate" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
                        <input type="radio" id="humanrelate" name="humanrelate" value="4" /> 4 ຫຼາຍ <br>
                        <input type="radio" id="humanrelate" name="humanrelate" value="3" /> 3 ປານກາງ <br>
                        <input type="radio" id="humanrelate" name="humanrelate" value="2" /> 2 ນ້ອຍ <br>
                        <input type="radio" id="humanrelate" name="humanrelate" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
                        <input type="radio" id="humanrelate" name="humanrelate" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
                      </div>



                      <div class="col-lg-12">
                        <label for="8.  ທ່ານມີຄວາມຮູ້ສຶກຕໍ່ພາບລວມໃນການໃຫ້ບໍລິການ">VIII. ທ່ານມີຄວາມຮູ້ສຶກຕໍ່ພາບລວມໃນການໃຫ້ບໍລິການ</label>
                      </div>
                      <div class="col-lg-12">
                        <input type="radio" id="generalview" name="generalview" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
                        <input type="radio" id="generalview" name="generalview" value="4" /> 4 ຫຼາຍ <br>
                        <input type="radio" id="generalview" name="generalview" value="3" /> 3 ປານກາງ <br>
                        <input type="radio" id="generalview" name="generalview" value="2" /> 2 ນ້ອຍ <br>
                        <input type="radio" id="generalview" name="generalview" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
                        <input type="radio" id="generalview" name="generalview" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
                      </div>

                      <div class="col-lg-12">
                        <label for="ຫາກທ່ານມີຄໍາແນະນໍາ ຫຼື ຂໍ້ຮ້ອງຮຽນໃດໃດ ສາມາດລະບຸ ເພື່ອທີ່ບໍລິສັດ ຈະນໍາໄປໃຊ້ໃນການປັບປຸງການໃຫ້ບໍລິການຕໍ່ໄປ">ຫາກທ່ານມີຄໍາແນະນໍາ ຫຼື ຂໍ້ຮ້ອງຮຽນໃດໃດ ສາມາດລະບຸ ເພື່ອທີ່ບໍລິສັດ ຈະນໍາໄປໃຊ້ໃນການປັບປຸງການໃຫ້ບໍລິການຕໍ່ໄປ</label class="depterea">
                      </div>

                      <div class="col-lg-12">
                        <input type="text" id="comment" name="comment" placeholder="ຄຳເຫັນ..">
                      </div>



                    </div>



                    <div class="text-center">
                      <input class=button type="submit" name="save" value="Submit">
                    </div>

                  </form>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>



    </div>
  </div>






</body>

</html>