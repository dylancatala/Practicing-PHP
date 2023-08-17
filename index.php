<!-- <?php
      echo "hello php";
      ?>

<?php
echo "This is my 1st paragraph";
?>

<?php
echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque hic quam, explicabo laboriosam, asperiores, ad ut vero a harum soluta quisquam debitis beatae voluptates aliquid ducimus expedita laudantium architecto modi?";
?>

<?php
echo "Ending of the test";
?> -->



<!-- VARIABLES  -->

<!-- 1st Method w/ double quotes and space -->
<?php
$greeting = "Hello";
echo $greeting . " " . "Everybody!";
?>

<!-- Best method  -->
<?php
$country = "France";
echo "$country is a country!";
?>



<!-- CONDITIONS -->
<?php
$name = "Blossoming flowers";
$read = "true";

if ($read) {
  $message = "You have read $name";
}
?>

<?php echo $message; ?>



<!-- ARRAY, FOREACH -->

<?php
$books =  [
  "Blue book",
  "Bouggy book"
];
?>

<?php foreach ($books as $book) : ?>
  <?php echo $book ?>
<?php endforeach; ?>


<?php
$animals = [
  [
    'name' => 'Blue',
    'color' => 'Gray'
  ],
  [
    'name' => 'Bouggy',
    'color' => 'Gray/White'
  ]
];
?>

<?php foreach ($animals as $animal) : ?>
  <?= $animal['name']; ?>
<?php endforeach; ?>