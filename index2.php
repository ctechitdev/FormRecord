<!DOCTYPE html>
<html>  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Survey</title>
    <link rel="stylesheet" href="frmsur.css">
    <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button:hover {background-color: #3e8e41}

.space2 {
  padding-left: 15px;
}

.space3 {
  padding-left: 55px;
}

.space4 {
  padding-left: 155px;
}
.space5 {
  padding-left: 155px;
}



 input[type=button], input[type=submit], input[type=reset] {
  background-color: #0086b3;
  border: none;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
  font-size: 14px;
  hover: 
}




mymouse:hover {
  background-color: Darkblue;
}


#popUp
{
  padding: 8px 16px;
  background-color: #0000e6;
    color: white;
}
#popUp:hover
{
  background-color: Darkblue;
    color: white;
}

body,p {
    font-family: Arial, Helvetica, sans-serif,Phetsarath OT;   
}

.textbox{
    height: 25px;
    width: 350px;
    font-size:14pt;
    font-family:Phetsarath OT;
    color:Darkblue;
}

.textbox2{
    
    color:Darkgreen;
}


</style>




</head>


<body bgcolor="pink">  
  <br><br>
  <div class="space5" >

  <img src="ATK.png" alt="Hot Air Balloons" width="180" height="60">

  </div> 
<BR>

<h3 class="space4"> ແບບຟອມສົ່ງຜົນກວດ ATK</h3> <BR>

<div >
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="space3"> 
    <p><b>1. ຊື່ພະນັກງານ:</b></p>
    <input type="text" class="textbox " name=username > <br> <br>
    </div>

    <div class="space3"> 
    <p ><b>2. ພະແນກ: </b></p>
    <select name="dept" class="textbox">
        <option value="" disabled selected></option>
        <option value="Sales Unilever">Sales Unilever</option>
        <option value="Sales Fitne">Sales Fitne</option>
        <option value="Sales Phubia">Sales Phubia</option>
        <option value="Sales Unicharm">Sales Unicharm</option>
        <option value="Sales Bridgestone & MT">Sales Bridgestone & MT</option>
        <option value="Sales Tyres Center">Sales Tyres Center</option>
        <option value="Sales Yamaha">Sales Yamaha</option>
        <option  value="Sales Kubota & Fetilizer">Sales Kubota & Fetilizer</option>
        <option  value="Sales Kubota Tractor">Sales Kubota Tractor</option>
        <option  value="Sales Shell">Sales Shell</option>
        <option  value="Sales TOTO">Sales TOTO</option>
        <option  value="Account & Finance">Account & Finance</option>
        <option  value="HR & Admin">HR & Admin</option>
        <option  value="ICT">ICT</option>
        <option  value="Business Support & Development">Business Support & Development</option>
        <option  value="Management SVP-President">Management SVP-President</option>
        <option  value="Others">Others</option>
       <!-- <option  value="KPLG/Shipping">KPLG/Shipping</option>
        <option  value="KPLG/ Logistics">KPLG/ Logistics</option>
        <option  value="KPTL">KPTL</option>
        <option  value="KSP">KSP</option>-->


    </select>
    </div>
    <br>
    <div class="space3">  <br>
    <p><b>3. ຜົນກວດ ATK: </b></p>

    <!-- <tr><td class="space2"> <h3>ປະເດັນການວັດຄວາມເພິງພໍໃຈ</h3></td></tr> -->
<tr><td class="space3"></td>  

<td><input type="radio" name="checkresult" value="Negative(-) ຂື້ນຂີດດຽວ"/>Negative(-) ຂື້ນຂີດດຽວ  </td>  <br>
<tr>      
<td><input type="radio" name="checkresult" value="Positive(+) ຂື້ນສອງຂີດ"/>Positive(+) ຂື້ນສອງຂີດ</td></tr>  <br>
</tr>   <br>

<p><b>4. ຖ້າຜົນເປັນບວກທ່ານມີອາການແນວໃດ:</b></p>
<!--<tr><td rowspan="6" class="space3">ຫາກທ່ານມີຄໍາແນະນໍາ ຫຼື ຂໍ້ຮ້ອງຮຽນໃດໃດ ສາມາດລະບຸ ເພື່ອທີ່ບໍລິສັດ ຈະນໍາໄປໃຊ້ໃນການປັບປຸງການໃຫ້ບໍລິການຕໍ່ໄປ</td>-->
<tr> <td rowspan="6" class="space3"></td> 
<td><input type="text" size="80" class="textbox" name="comment" rows="3" value=""/></td></tr> 


</tr>  <br>
<br>
    <!--<input type="submit" name="submit" vlaue="Choose options">-->

    <p><b>5. ຮູບຖ່າຍຜົນກວດ:</b></p>
    <p class="textbox2">(ແນະນຳ: ກົດ "Choose file ເພື່ອເລືອກ ຮູບຖ່າຍຜົນກວດ ເມື່ອໄດ້ມາແລ້ວ ກົດປຸ່ມ Upload")</p> 
    <!--Select Image File to Upload:-->
    <input type="file" name="file" >
    <input type="submit" name="submit" value="Upload">
</form>

</div>





</body>
</html>



