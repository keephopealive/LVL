<html lang="en">

<head>
  <style>

.header {
  width: 100%;
}
.header h3{
  margin: 20px 0;
  text-align: right;
}
/*.logo{
  width: 75%;
}
.infoBox  {
  width: 25%;
}
.plate  {
  width: 100%;
}
.frontView  {
  width: 45%;
}*/
.infoBox {
  text-align: center;
   font-family: sans-serif;
}
.coveringPlate  {
  width: 100%;
  border-top: 1px solid black;
  border-left: 1px solid black;
  border-right: 1px solid black;
}
.coveringPlate  th{
  width: 35%;
  text-align: right;
  border-bottom: 2px solid black;
  border-right: 2px solid black;
}
.coveringPlate  td{
  padding-left: 20px;
  padding-right: 20px;
  border-bottom: 2px dotted black;
}
.switchType {
  width: 100%;
  margin-top: 20px;
  border-top: 1px solid black;
  border-left: 1px solid black;
  border-right: 1px solid black;
}
.switchType  th{
  width: 35%;
  text-align: right;
  border-bottom: 2px solid black;
  border-right: 2px solid black;
}
.switchType  td{
  padding-left: 20px;
  padding-right: 20px;
  border-bottom: 2px dotted black;
}
.backBox  {
  margin-top: 50px;
  /*width: 100%;*/
}
/*.backBoxImg {
  width: 45%;
}*/
.backBoxSpecs {
  width: 100%;
  border-top: 1px solid black;
  border-left: 1px solid black;
  border-right: 1px solid black;
}
.backBoxSpecs  th{
  /*width: 35%;*/
  text-align: right;
  border-bottom: 2px solid black;
  border-right: 2px solid black;
}
.backBoxSpecs  td{
  padding-left: 20px;
  padding-right: 20px;
  border-bottom: 2px dotted black;
}
.drawings {
  width: 100%;
}
.title  td {
  margin-top: 20%;
  margin-bottom: 20%;
  text-align: center;
  border-bottom: 2px solid black;
}
/*table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}*/
th, td {
    padding: 5px;
    text-align: left;    
}
</style>

</head>

<body>

  <div class="container">

  <table class="header">
    <tr>
      <td style="vertical-align:top;" class="logo"> 
        <img src="../../assets/img/logo1000.jpg" alt="LVL LOGO" width="140mm" height="21mm">
      </td>
      <td class="infoBox">
        <h6 class="ref_no"><?php echo $reference_no; ?></h6>
        <h2 class="size" style="margin-top:25px; margin-bottom:25px;"><?php echo $size; ?></h2>
        <h4 class="mech"> <?php echo $mech; ?> </h4>
        
      </td> 
    </tr>
  </table>

  <table class="plate">
    <tr>
      <td class="frontView" width="75mm">
        <img src="<?= $frontView ?>" alt="Plate - Front view" width="70mm" height="70mm">
      </td>
      <td colspan="2" width="100mm">
        <table class="coveringPlate">
          <tr class="title">
            <td colspan="2">COVER PLATE</td>
          </tr>
          <tr>
            <th>MATERIAL</th>
            <td><h5 class=""> <?php echo $material; ?></h5></td>
          </tr>
          <tr>
            <th>DIMENSIONS</th>
            <td><h5 class=""> <?php echo $p_dimensions; ?></h5></td>
          </tr>
          <tr>
            <th>FINISH</th>
            <td><h5 class=""> <?php echo $finish; ?></h5></td>
          </tr>
          <tr>
            <th>EDGE</th>
            <td><h5 class=""><?php echo $edge; ?></h5></td>
          </tr>
          <tr>
            <th>SCREW INTERAXIS</th>
            <td><h5 class=""><?php echo $p_axis; ?></h5></td>
          </tr>
          <tr>
            <th>SCREW TYPE</th>
            <td><h5 class=""> TORX US 6-32 (NECESSARY SCREWDRIVER INCLUDED WITH ORDER)</h5></td>
          </tr>
          <tr>
            <th>ENGRAVING</th>
            <td><h5 class=""> 8 CHARACTER MAX</h5></td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
  <table class="sideSwitch" style="margin-top:50px;">
    <tr>
      <td width="25mm">
        <img src="<?php echo $sideView; ?>" alt="<?php echo $sideView; ?>" width="21mm" height="54mm">
      </td>
      <td width="50mm">
        <img src="<?php echo $saxis; ?>"width="50mm" height="50mm">
      </td>
      <td width="100mm">
        <table class="switchType">
          <tr class="title">
            <td colspan="2">SWITCH TYPE</td>
          </tr>
          <tr>
            <th>TYPE OF MECHANISM</th>
            <td><h5 class=""> <?php echo $mechanismString; ?></h5></td>
          </tr>
          <tr>
            <th>RATING</th>
            <td><h5 class=""><?php echo $powerSupplyString; ?></h5></td>
          </tr>
          <tr>
            <th>COLORS</th>
            <td><h5 class=""><?php echo $color; ?></h5></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <table class="backBox">
     <tr>
      <td width="90mm"><img src="<?php echo $b_img; ?>" alt="<?php echo $b_img; ?>" width="90mm"></td>
      <td width="85mm">
        <table class="backBoxSpecs">
          <tr class="title">
            <td colspan="2">BACKBOX SPECIFICATIONS</td>
          </tr>
          <tr>
            <th>REFERENCE</th>
            <td><h5 class=""><?php echo $b_reference; ?></h5></td>
          </tr>
          <tr>
            <th>DIMENSIONS</th>
            <td><h5 class=""><?php echo $b_dimensions; ?></h5></td>
          </tr>
          <tr>
            <th>SCREW INTERAXIS</th>
            <td><h5 class=""><?php echo $b_axis; ?></h5></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

 <!--  <table class="drawings">
    <tr>
      <td class="dwgFront">
        <img src="" alt="Front Drawing" width="100%" height="300px">
      </td>
      
    </tr>
  </table> -->

</div>
</body>

</html>