
<div style="justify-content: center; text-align:center; margin-left:15rem;margin-top:5rem;">

<table border="1" style="justify-content: center; text-align:center; " >
  <tr id="tbb">
    <th>Name</th>
    <th>Roll No</th>
    <th>operation research</th>
    <th>Internet of Thing</th>
    <th>Soft Computing</th>
    <th>Data Mining</th>
    <th>Mass. of bgag.gita</th>
    <th>Big Data</th>
    <th>Big Data Ana.</th>
   

  </tr>
  <?php

    if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["s_name"] . "</td>";
      echo "<td>" . $row["s_rollno"] . "</td>";
      echo "<td>" . $row["ORE"] . "</td>";
      echo "<td>" . $row["IOT"] . "</td>";
      echo "<td>" . $row["SC"] . "</td>";
      echo "<td>" . $row["DM"] . "</td>";
      echo "<td>" . $row["MOG"] . "</td>";
      echo "<td>" . $row["BD"] . "</td>";
      echo "<td>" . $row["BDA"] . "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='9'>0 results</td></tr>";
  }
  ?>
</table>
<pre>



















</pre>
</div>