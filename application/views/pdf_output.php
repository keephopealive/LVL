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
}
.coveringPlate  th{
  width: 35%;
  text-align: right;
}
.coveringPlate  td{
  padding-left: 20px;
  padding-right: 20px;
}
.switchType {
  width: 100%;
  margin-top: 20px;
}
.switchType  th{
  width: 35%;
  text-align: right;
}
.switchType  td{
  padding-left: 20px;
  padding-right: 20px;
}
.backBox  {
  width: 100%;
}
.backBoxImg {
  width: 45%;
}
.backBoxSpecs {
  width: 100%;
}
.backBoxSpecs  th{
  width: 35%;
  text-align: right;
}
.backBoxSpecs  td{
  padding-left: 20px;
  padding-right: 20px;
}
.drawings {
  width: 100%;
}
.title  td {
  margin-top: 20%;
  margin-bottom: 20%;
  text-align: center;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
</head>

<body>

  <table class="header">
    <tr>
      <td class="logo"> 
        <img src="" alt="LVL LOGO" width="100%" height="144px">
      </td>
      <td class="infoBox">
        <h3 class="ref_no"><?php echo $reference_no; ?></h3>
        <h3 class="size"><?php echo $size; ?></h3>
        <h3 class="mech"> BP </h3>
      </td> 
    </tr>
  </table>

  <table class="plate">
    <tr>
      <td class="frontView" rowspan="2">
        <img src="" alt="Plate - Front view">
      </td>
      <td>
        <table class="coveringPlate">
          <tr class="title">
            <td colspan="2">COVERING PLATE</td>
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
            <td><h5 class=""> BRUSHED NICKEL (NICKEL BROSSE)</h5></td>
          </tr>
          <tr>
            <th>EDGE</th>
            <td><h5 class=""><?php echo $edge; ?></h5></td>
          </tr>
          <tr>
            <th>SCREW AXIS</th>
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
        <table class="switchType">
          <tr class="title">
            <td colspan="2">SWITCH TYPE</td>
          </tr>
          <tr>
            <th>TYPE OF MECHANISM</th>
            <td><h5 class=""> MOMENTARY PUSH BUTTON; MULTIPLE FUNCTION AND DIMMING CAPABILITIES.</h5></td>
          </tr>
          <tr>
            <th>POWER OF SUPPLY</th>
            <td><h5 class="">CLASS TWO LOW-VOLTAGE SWITCH</h5></td>
          </tr>
          <tr>
            <th>COLORS</th>
            <td><h5 class="">BRASS FOR WARM PLATE FINISHES; CHROME FOR COLD PLATE FINISHES</h5></td>
          </tr>
        </table>
      </td>
    </tr>

  </table>

  <table class="backBox">
    <tr>
      <td class="backBoxImg">
        <img src="" alt="Backbox - side and back view">
      </td>
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
  </table>

  <table class="drawings">
    <tr>
      <td class="dwgFront">
        <img src="" alt="Front Drawing" width="100%" height="300px">
      </td>
      <td class="dwgSide">
        <img src="" alt="Side Drawing" width="100%" height="300px">
      </td>
    </tr>
  </table>
</body>

</html>