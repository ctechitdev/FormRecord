<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Survey</title> 
   <link rel="stylesheet" href="\FormRecord\frmsur.css">
 
<style>
body {
         background-color: whitesmoke;
         font-family: Arial, Helvetica, sans-serif,Phetsarath OT, Saysettha OT;
         color:darkblue;
    }

    .container{
        background-color: white;
        box-shadow: 1px 1px 2px 1px grey;
        padding: 50px 8px 20px 38px;
        width: 30%;
        height:11%;
        margin-left:35%;

    }

    .txt {
    width: 80%;
    height:3%;
    
    border-radius:05px;
    padding: 20px 15px 20px 35px;
    margin:20px 0px 15px 0px;
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

.button:hover {background-color: #3e8e41}

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
  
  <div class="logoerea" >
<center>
  <img src="kplogo.png" alt="Hot Air Balloons" width="70" height="70">
  </div>
</body>
<div>
<center>
<p>
ຮຽນ :  ບັນດາລູກຄ້າ / ຮ້ານຄ້າ / ຕົວແທນຈໍາໜ່າຍ
</p>

<div >
<p >ເນື່ອງດ້ວຍທາງບໍລິສັດ ໄດ້ເຫັນເຖິງຄວາມສໍາຄັນໃນການຕອບສະໜອງຄວາມເພິ່ງພໍໃຈຂອງລູກຄ້າ ຈຶ່ງໄດ້ເຮັດແບບສອບຖາມຂຶ້ນ</p>
<p> ເພື່ອເປັນແນວທາງໃນການປັບປຸງກະບວນການເຮັດວຽກ ໃຫ້ເກິດປະສິດທິພາບໃນການໃຫ້ບໍລິການແລະ ພັດທະນາຢ່າງຕໍ່ເນື່ອງ</p>

<p>  ບໍລິສັດ ຂໍຂອບໃຈມາຍັງບັນດາທ່ານ ທີ່ໃຫ້ຄວາມຮ່ວມມືໃນການຕອບແບບສອບຖາມນີ້ດ້ວຍ</p>
</div>  
</center> <br>
  <body>
  <h2><center>ແບບສອບຖາມຄວາມເພິງພໍໃຈຂອງລູກຄ້າພາຍນອກ</center> </h2>
<br>
 <!--  <div class="txt" > -->
  
  <form method="post" action="FORMSURVEY_PROCESS_E.php" id="usrform">
  
    <div class="spa" >
  ຊື່ຮ້ານ:
    <input type="text" size="40" id="shopname"  name="shopname"  ><br>
   </div>  
   <div class="spa" > 
        ຊື່ຜູ້ຕອບແບບສອບຖາມ:
        <input type="text" id="person1" name="person1"> <br>
        </div> 
 
        <div class="spa" > 
        ຊື່ພະນັກງານຂາຍ:
        <input type="text" size="32" id="salesperson" name="salesperson"> <br>  <br>
        </div> 
        


        <div class="spa" >
       <b> ເລືອກກຸ່ມສິນຄ້າ :</b> <br>
          
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

          <input type="radio" id="product" name="product" value="ຢູນີລີເວີ"/>
           ຢູນີລີເວີ    <br>           
          <input type="radio" id="product" name="product" value="ຢູນີຊາມ"/> ຢູນີຊາມ <br>
          <input type="radio" id="product" name="product" value="ຟິດເນ"/> ຟິດເນ  <br>
          <input type="radio" id="product" name="product" value="ຢາງລົດບຣີສະໂຕນ"/> ຢາງລົດບຣີສະໂຕນ  <br>
          <input type="radio" id="product" name="product" value="ລົດຈັກ ຢາມາຮາ"/> ລົດຈັກ ຢາມາຮາ  <br>
          <input type="radio" id="product" name="product" value="ຄູໂບຕ້າ"/> Kubota RT-NC  <br>
          <input type="radio" id="product" name="product" value="ຄູໂບຕ້າ"/> Kubota Tractor  <br>
          <input type="radio" id="product" name="product" value="ປູ໋ຍ"/> ປູ໋ຍ  <br>
          <input type="radio" id="product" name="product" value="ນໍ້າມັນເຄື່ອງແຊນ"/> ນໍ້າມັນເຄື່ອງແຊນ  <br>
          <input type="radio" id="product" name="product" value="ໂຕໂຕ້"/> ໂຕໂຕ້
     <br><br>


        <h3> ປະເດັນການວັດຄວາມເພິງພໍໃຈ </h3>  

        
          
        1.  ດ້ານສິນຄ້າ :  ໃນພາບລວມທ່ານພໍໃຈໃນສິນຄ້າ ທັງຄຸນນະພາບ ແລະ ລາຄາ <br>
          
  
        <input type="radio" id="scquality" name="scquality" value="5"/> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="scquality" name="scquality" value="4"/> 4 ຫຼາຍ <br>
        <input type="radio" id="scquality" name="scquality" value="3"/> 3 ປານກາງ <br>
        <input type="radio" id="scquality" name="scquality" value="2"/> 2 ນ້ອຍ <br>
        <input type="radio" id="scquality" name="scquality" value="1"/> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="scquality" name="scquality" value="0"/> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
   <br><br>




   2. ດ້ານການບໍລິການ : ໃນພາບລວມ ທ່ານພໍໃຈໃນການໃຫ້ບໍລິການຂອງພະນັກງານຂາຍ ແລະ ການຈັດສົ່ງສິນຄ້າ</td>
   <br>
        <input type="radio" id="scmarket" name="scmarket" value="5"/> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="scmarket" name="scmarket" value="4"/> 4 ຫຼາຍ <br>
        <input type="radio" id="scmarket" name="scmarket" value="3"/> 3 ປານກາງ <br>
        <input type="radio" id="scmarket" name="scmarket" value="2"/> 2 ນ້ອຍ <br>
        <input type="radio" id="scmarket" name="scmarket" value="1"/> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="scmarket" name="scmarket" value="0"/> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
   <br> <br>
   3. ໂດຍພາບລວມທ່ານພໍໃຈໃນການຊື້ຂາຍກັບບໍລິສັດ ແລະ ຍິນດີທີ່ຈະຊັກຊວນຜູ້ອື່ນມາໃຊ້ບໍລິການນໍາບໍລິສັດຂອງເຮົາ</td>
   <br>
        <input type="radio" id="scprice" name="scprice" value="5"/> 5 ຫຼາຍທີ່ສຸດ <br>
        <input type="radio" id="scprice" name="scprice" value="4"/> 4 ຫຼາຍ <br>
        <input type="radio" id="scprice" name="scprice" value="3"/> 3 ປານກາງ <br>
        <input type="radio" id="scprice" name="scprice" value="2"/> 2 ນ້ອຍ <br>
        <input type="radio" id="scprice" name="scprice" value="1"/> 1 ໜ້ອຍທີ່ສຸດ <br>
        <input type="radio" id="scprice" name="scprice" value="0"/> 0 ບໍ່ແນ່ໃຈ / ບໍ່ພົບໃນການໃຊ້ບໍລິການ
   <br> <br>

   ຫາກທ່ານມີຄໍາແນະນໍາ ຫຼື ຂໍ້ຮ້ອງຮຽນໃດໃດ ສາມາດລະບຸ ເພື່ອທີ່ບໍລິສັດ ຈະນໍາໄປໃຊ້ໃນການປັບປຸງການໃຫ້ບໍລິການຕໍ່ໄປ    <br><br>
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