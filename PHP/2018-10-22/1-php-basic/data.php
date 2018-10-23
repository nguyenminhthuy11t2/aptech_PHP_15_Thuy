<?php 
$data = [
    [
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
];
?>
<html>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">type</th>
      <th scope="col">price</th>
      <th scope="col">ram</th>
      <th scope="col">made in</th>
    </tr>
  </thead>
  <tbody>
<?php
for ($i=0;$i<2;$i++){
?>

<tr>
    <th scope="row"><?php echo $i+1 ?></th>
    <td><?php echo $data[$i]['type'] ?></td>
    <td><?php echo $data[$i]['property']['price'] ?></td>
    <td><?php echo $data[$i]['property']['ram']?></td>
    <td><?php echo $data[$i]['property']['made']['in']?></td>
</tr>
<?php
}
?>
    </tbody>
    </table>
</html>