<html>
<title>Tugas Drop Down</title>
<form method=post name=f1 action='push_db.php'>
<table class="table" style="margin-top: 30px" align="center">
  <tr>
    <td>Tanggal Lahir :<td>
    <td>tanggal <select name="date">
    <?php
    for($a=1; $a<=31; $a+=1){
        echo"<option value=$a> $a </option>";
    }
    ?></td>

    <td>bulan <select name=month value=''>
      <option value='01'>January</option>
      <option value='02'>February</option>
      <option value='03'>March</option>
      <option value='04'>April</option>
      <option value='05'>May</option>
      <option value='06'>June</option>
      <option value='07'>July</option>
      <option value='08'>August</option>
      <option value='09'>September</option>
      <option value='10'>October</option>
      <option value='11'>November</option>
      <option value='12'>December</option></select>
    </td>

    <td>tahun <select name="year">
    <?php
    $x = getdate();
    for($a=1990; $a<=$x['year']; $a+=1){
        echo"<option value=$a> $a </option>";
    }
    ?></td>
  </tr><br>

  <tr>
  <td><button class="btn btn-success" type="submit">Save</button></td>
  </tr>

  </table>
</html>
