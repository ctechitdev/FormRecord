<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Survey</title>
  <link rel="stylesheet" href="\FormRecord\frmsur.css">

  <style>
    body {
      background-color: clearblue;
      font-family: Arial, Helvetica, sans-serif, Phetsarath OT, Saysettha OT;
      color: darkblue;
    }

    .container {
      background-color: white;
      box-shadow: 1px 1px 2px 1px grey;
      padding: 50px 8px 20px 38px;
      width: 30%;
      height: 11%;
      margin-left: 35%;

    }

    .txt {
      width: 80%;
      height: 3%;

      border-radius: 05px;
      padding: 20px 15px 20px 35px;
      margin: 20px 0px 15px 0px;
    }

    .button {
      padding: 5px 25px;
      font-size: 14px;
      text-align: center;
      cursor: pointer;
      outline: none;
      color: white;
      background-color: Darkblue;
      border: none;
      border-radius: 5px;
      box-shadow: 0 9px #999;
    }

    .button:hover {
      background-color: #3e8e41
    }

    .spa {

      padding-left: 185px;
    }

    .textarea {
      width: 100px;
      height: 50px;
    }
  </style>




</head>

<body bgcolor="pink">

  <div class="logoerea">
    <center>
      <img src="kplogo.png" alt="Hot Air Balloons" width="70" height="70">
  </div>
</body>
<div>
  <center>



  </center> <br>

  <body>
    <h2>
      <center>ແບບສອບຖາມຄວາມເພິງພໍໃຈຂອງລູກຄ້າພາຍໃນ</center>
    </h2>
    <br>
    <!--  <div class="txt" > -->

    <form method="post" action="FORMSURVEY_PROCESS_INT.php" id="usrform">

      <!--  <div class="spa" >
  ຊື່ຮ້ານ:
    <input type="text" size="40" id="shopname"  name="shopname"  ><br>
   </div>  
   <div class="spa" > 
        ຊື່ຜູ້ຕອບແບບສອບຖາມ:
        <input type="text" id="person1" name="person1"> <br>
        </div> -->

      <div class="spa">
        ຊື່ຜູ້ຕອບແບບສອບຖາມ:
        <input type="text" size="32" id="responder" name="responder"> <br> <br>
      </div>


      <div class="spa">
        <b> ເລືອກພະແນກ :</b> <br>

        <!-- <img src="pic\UNI.jpg"  width="60" height="40"> &nbsp;&nbsp;&nbsp;
          <img src="pic\unicharm.png"  width="40" height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="pic\fitne.png"  width="40" height="40"> &nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;
          <img src="pic\tyres.png"  width="90" height="38"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="pic\yamaha.jpg"  width="70" height="40"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="pic\kubota.png"  width="65" height="35">  &nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="pic\kubota.png"  width="65" height="35"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="pic\crownd_fert.png"  width="65" height="35"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="pic\Shell.png"  width="50" height="30"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="pic\TOTO.png"  width="65" height="35"> <br> -->
        <input type="radio" id="dept" name="dept" value="Human Resource(1.1+1.2)" />
        Human Resource(1.1+1.2)
        <br>
        <input type="radio" id="dept" name="dept" value="HR (ການຈັດເຝິກອົບຮົມ)
" /> HR (ການຈັດເຝິກອົບຮົມ) <br>
        <input type="radio" id="dept" name="dept" value="HR ( ສັນຫາ ວ່າຈ້າງ)" /> HR ( ສັນຫາ ວ່າຈ້າງ) <br>
        <input type="radio" id="dept" name="dept" value="HR/Admin( ບໍລິການລົດ)" /> HR/Admin( ບໍລິການລົດ) <br>
        <input type="radio" id="dept" name="dept" value="HR/Admin (ບໍລິການຫ້ອງການ)" /> HR/Admin (ບໍລິການຫ້ອງການ) <br>
        <input type="radio" id="dept" name="dept" value="Finance - Accounting" /> Finance - Accounting <br>
        <input type="radio" id="dept" name="dept" value="ICT" /> ICT <br>
        <input type="radio" id="dept" name="dept" value="ໜ່ວຍງານ  ISO " /> ໜ່ວຍງານ ISO <br>
        <input type="radio" id="dept" name="dept" value="ໜ່ວຍງານ  BAD " /> ໜ່ວຍງານ BAD <br>

        <br>

        <center>
          <h2> ປະເດັນການວັດຄວາມເພິງພໍໃຈ </h2>
        </center>


        <div>

          <h4>ດ້ານກະບວນການ ແລະ ຂັ້ນຕອນການໃຫ້ບໍລິການ</h4>

        </div>


        1. ກະບວນການ ແລະ ຂັ້ນຕອນການໃຫ້ບໍລິການມີຄວາມຊັດເຈນ ເຂົ້າໃຈງ່າຍ ແລະ ມີຄວາມຄ່ອງຕົວ <br>


        <input type="radio" id="generalview" name="generalview" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="generalview" name="generalview" value="4" /> 4 ຫຼາຍ <br>
        <input type="radio" id="generalview" name="generalview" value="3" /> 3 ປານກາງ <br>
        <input type="radio" id="generalview" name="generalview" value="2" /> 2 ນ້ອຍ <br>
        <input type="radio" id="generalview" name="generalview" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="generalview" name="generalview" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
        <br><br>




        2. ຄວາມສາມາດໃນການໃຫ້ບໍລິການໄດ້ວ່ອງໄວ</td>
        <br>
        <input type="radio" id="skilltoserve" name="skilltoserve" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="skilltoserve" name="skilltoserve" value="4" /> 4 ຫຼາຍ <br>
        <input type="radio" id="skilltoserve" name="sskilltoserve" value="3" /> 3 ປານກາງ <br>
        <input type="radio" id="skilltoserve" name="skilltoserve" value="2" /> 2 ນ້ອຍ <br>
        <input type="radio" id="skilltoserve" name="skilltoserve" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="skilltoserve" name="skilltoserve" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
        <br> <br>
        3. ທ່ານໄດ້ຮັບຄວາມສະດວກຈາກການຮັບບໍລິການ</td>
        <br>
        <input type="radio" id="convinient" name="convinient" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="convinient" name="convinient" value="4" /> 4 ຫຼາຍ <br>
        <input type="radio" id="convinient" name="convinient" value="3" /> 3 ປານກາງ <br>
        <input type="radio" id="convinient" name="convinient" value="2" /> 2 ນ້ອຍ <br>
        <input type="radio" id="convinient" name="convinient" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="convinient" name="convinient" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
        <br> <br>

        4. ຄວາມຊັດເຈນໃນການອະທິບາຍ ແລະ ສາມາດໃຫ້ຄໍາແນະນໍາໃນການ ໃຫ້ບໍລິການ</td>
        <br>
        <input type="radio" id="clearexplain" name="clearexplain" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="clearexplain" name="clearexplain" value="4" /> 4 ຫຼາຍ <br>
        <input type="radio" id="clearexplain" name="clearexplain" value="3" /> 3 ປານກາງ <br>
        <input type="radio" id="clearexplain" name="clearexplain" value="2" /> 2 ນ້ອຍ <br>
        <input type="radio" id="clearexplain" name="clearexplain" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="clearexplain" name="clearexplain" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
        <br> <br>



        <!--  Second part -->

        <div>

          <h4>ດ້ານຜູ້ໃຫ້ບໍລິການ</h4>

        </div>


        5. ມີຄວາມເອົາໃຈໃສ່ ກະຕືລືລົ້ນ ແລະ ເຕັມໃຈໃນການໃຫ້ບໍລິການ <br>


        <input type="radio" id="intendtoserve" name="intendtoserve" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="intendtoserve" name="intendtoserve" value="4" /> 4 ຫຼາຍ <br>
        <input type="radio" id="intendtoserve" name="intendtoserve" value="3" /> 3 ປານກາງ <br>
        <input type="radio" id="intendtoserve" name="intendtoserve" value="2" /> 2 ນ້ອຍ <br>
        <input type="radio" id="intendtoserve" name="intendtoserve" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="intendtoserve" name="intendtoserve" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
        <br><br>




        6. ພະນັກງານມີຄວາມຮູ້, ຄວາມເຂົ້າໃຈ ສາມາດໃຫ້ຄໍາແນະນໍາ ແລະ</td>
        <br>
        <input type="radio" id="haveknowledge" name="haveknowledge" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="haveknowledge" name="haveknowledge" value="4" /> 4 ຫຼາຍ <br>
        <input type="radio" id="haveknowledge" name="haveknowledge" value="3" /> 3 ປານກາງ <br>
        <input type="radio" id="haveknowledge" name="haveknowledge" value="2" /> 2 ນ້ອຍ <br>
        <input type="radio" id="haveknowledge" name="haveknowledge" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="haveknowledge" name="haveknowledge" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
        <br> <br>
        7. ມີມະນຸດສໍາພັນດີ, ສຸພາບ ແລະ ເປັນມິດ</td>
        <br>
        <input type="radio" id="humanrelate" name="humanrelate" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="humanrelate" name="humanrelate" value="4" /> 4 ຫຼາຍ <br>
        <input type="radio" id="humanrelate" name="humanrelate" value="3" /> 3 ປານກາງ <br>
        <input type="radio" id="humanrelate" name="humanrelate" value="2" /> 2 ນ້ອຍ <br>
        <input type="radio" id="humanrelate" name="humanrelate" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="humanrelate" name="humanrelate" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
        <br> <br>

        8. ທ່ານມີຄວາມຮູ້ສຶກຕໍ່ພາບລວມໃນການໃຫ້ບໍລິການ</td>
        <br>
        <input type="radio" id="proceedanstep" name="proceedanstep" value="5" /> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="proceedanstep" name="proceedanstep" value="4" /> 4 ຫຼາຍ <br>
        <input type="radio" id="proceedanstep" name="proceedanstep" value="3" /> 3 ປານກາງ <br>
        <input type="radio" id="proceedanstep" name="proceedanstep" value="2" /> 2 ນ້ອຍ <br>
        <input type="radio" id="proceedanstep" name="proceedanstep" value="1" /> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="proceedanstep" name="proceedanstep" value="0" /> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
        <br> <br>












        ຫາກທ່ານມີຄໍາແນະນໍາ ຫຼື ຂໍ້ຮ້ອງຮຽນໃດໃດ ສາມາດລະບຸ ເພື່ອທີ່ບໍລິສັດ ຈະນໍາໄປໃຊ້ໃນການປັບປຸງການໃຫ້ບໍລິການຕໍ່ໄປ <br><br>
        <b>ຄໍາແນະນໍາ</b> <br>

        <textarea rows="3" cols="90" name="comment" form="usrform" placeholder="ຄໍາແນະນໍາ..."></textarea>

        <br>



        <!-- <div class="form-group purple-border">
   <textarea class="form-control" id="exampleFormControlTextarea6" rows="2"></textarea>
   </div>-->
        <br>




        <input class=button type="submit" name="save" value="Submit">



      </div>
      <br>
    </form>

  </body>

</html>