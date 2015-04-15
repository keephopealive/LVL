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
.logo{
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
  width: 100%;
}
.backBoxImg {
  width: 45%;
}
.backBoxSpecs {
  width: 100%;
  border-top: 1px solid black;
  border-left: 1px solid black;
  border-right: 1px solid black;
}
.backBoxSpecs  th{
  width: 35%;
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

  <table class="header">
    <tr>
      <td style="vertical-align:top;" class="logo"> 
        <img src="../../assets/img/logo1000.jpg" alt="LVL LOGO" width="100%" height="143px">
      </td>
      <td class="infoBox">
        <h4 class="ref_no"><?php echo $reference_no; ?></h4>
        <h4 class="size"><?php echo $size; ?></h4>
        <h4 class="mech"> BP </h4>
      </td> 
    </tr>
  </table>

  <table class="plate">
    <tr>
      <td class="frontView">
        <img src="<?= $frontView ?>" alt="Plate - Front view" width="300px" height="300px">
      </td>
      <td colspan="2">
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
    <tr>
      <td><img src="<?php echo $sideView; ?>" alt="<?php echo $sideView; ?>" width="100px" height="250px"></td>
      <td><img src="<?php echo $saxis; ?>"width="250px" height="250px"></td>
      <td width="400px" height="250px">
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
      <td><img src="<?php echo $b_img; ?>" alt="<?php echo $b_img; ?>" width="300px" height="300px"></td>
     <!--  <td><img src="<?php echo $sideView; ?>" alt="<?php echo $sideView; ?>" width="105px" height="270px"></td> -->
      <td>
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

  <!--   <tr>
      <td class="backBoxImg">
        <img src="<?php echo $b_img; ?>" alt="<?php echo $b_img; ?>" width="75%" height="75%">
      </td>
      <td class="dwgSide">
        <img src="<?php echo $sideView; ?>" alt="<?php echo $sideView; ?>" width="105px" height="270px">
      </td>
      
    </tr> -->
  </table>

 <!--  <table class="drawings">
    <tr>
      <td class="dwgFront">
        <img src="" alt="Front Drawing" width="100%" height="300px">
      </td>
      
    </tr>
  </table> -->
</body>

</html>