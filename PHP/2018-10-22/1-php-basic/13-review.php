<?php
echo "<a href=\"./\">BACK</a>";

echo "<h1>13. REVIEW</h1>";
/* EXERCISE 1 :
1. Create an Array about data of authors like :
$authors = [
[
"name" => "Lorem",
"age" => "18",
"posts_quantity" => "5",
],
[
"name" => "Lorem",
"age" => "18",
"post_quantity" => "5",
],
];

+ At least 5 authors.

2. Display it into website depends on Bootstrap 4 Table, in 4 column : Name, Age, Post Counting, Salary.

3. Make sure, if posts_quantity > 10, show at Salary Column = posts_quantity * 10000, otherwise, display 0.

 */

/* 
 * Write a program to calculate the total price of your phone purchase . You will keep purchasing phones(hint : loop !) until you run out of money in your bank account . You 'll also buy accessories for each phone as long as your purchase amount is below your mental spending threshold.
 * 
 * After you' ve calculated your purchase amount, add in the tax, then print out the calculated purchase amount, properly formatted .
 * 
 * Finally, check the amount against your bank account balance to see if you can afford it or not .
 * 
 * You should set up some constants for the "tax rate," "phone price," "accessory price," and "spending threshold,"  as well as a variable for your "bank account balance." "
 * 
 * You should define functions for calculating the tax and for formatting the price with a " $ " and rounding to two decimal places.
 */

echo " < br > < br > do EXERCISE INSIDE COMMENT CODE BELOW THIS LINE < hr > ";
$authors = [
    [
    "name" => "Lorem",
    "age" => "18",
    "post_quantity" => 5,
    "salary" => "400",
    ],
    [
    "name" => "Laura",
    "age" => "19",
    "post_quantity" => 12,
    "salary" => "700",
    ],
    [
    "name" => "Sunny",
    "age" => "13",
    "post_quantity" => 9,
    "salary" => "700",
    ],
    [
    "name" => "Lisa",
    "age" => "21",
    "post_quantity" => 34,
    "salary" => "300",
    ],
    [
    "name" => "Land",
    "age" => "23",
    "post_quantity" => 45,
    "salary" => "300",
    ],
    ];
?>
<html>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">post_quantity</th>
      <th scope="col">salary</th>
    </tr>
  </thead>
  <tbody>
    <?php
        for($i=0;$i<5;$i++){
            ?>
            <tr>
                <th scope="row"><?php echo $i+1 ?></th>
                <td><?php echo $authors[$i]['name'] ?></td>
                <td><?php echo $authors[$i]['age'] ?></td>
                <td><?php echo $authors[$i]['post_quantity']?></td>
                <td><?php 

                if($authors[$i]['post_quantity'] > 10) {
                     echo $authors[$i]['salary']=$authors[$i]['post_quantity']*1000;
                 }
                else 
                {
                    echo $authors[$i]['salary']=0;
                }
                ?>
                </td>
                </tr>


        <?php
        }
    ?>
   
    
  </tbody>
</table>
<html>
