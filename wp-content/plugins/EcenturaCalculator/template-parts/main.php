<?php
include_once('sql.php');
include_once('value.php');
?>

<h2>Đây là nội dung trang plugin bảng tính này</h2>

<table style="width:100%">
  <tr>
    <th>Person 1</th>
    <th>Person 2</th>
    <th>Person 3</th>
  </tr>
  <tr>
    <td>Emil</td>
    <td>Tobias</td>
    <td>Linus</td>
  </tr>
  <tr>
    <td>16</td>
    <td>14</td>
    <td>10</td>
  </tr>
</table>

<?php var_dump($timesArray); ?>

<script type="text/javascript">
  var JSArray = <?php echo json_encode($timesArray); ?>;
  console.log(JSArray);
</script>

<?php echo $ecentura_k10; ?>


<?php
foreach ($imagesIDList as $imageID) {
    echo "ID: " . $imageID->ID . "<br>";
}
foreach ($imagesGuidList as $imageGuid) {
  echo "Link: " . $imageGuid->guid . "<br>";
}
foreach ($imagesList as $image) {
  echo "ID: " . $imageID->ID . "---" . "Link: " . $image->guid . "<br>";
}
?> 

<script type="text/javascript">
  var imagesIDList = <?php echo json_encode($imagesIDList); ?>;
  console.log(imagesIDList);

  var imagesGuidList = <?php echo json_encode($imagesGuidList); ?>;
  console.log(imagesGuidList);

  var imagesList = <?php echo json_encode($imagesList); ?>;
  console.log(imagesList);
</script>