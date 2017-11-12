/*Keeping your copyright notice up to date with PHP by HypnoticHacker

A PHP script that allows you to incorporate a dynamic copyright mark on your website, that automatically changes after each passing year.

THE SCRIPT

The below script is placed at the top of your footer.php file in wordpress
*/

<?php 
$startYear = 2015;
$thisYear = date ('Y');
if ($thisYear > $startYear) {
    $copyright = "$startYear&ndash;$thisYear";
} else {
     $copyright = $startYear;
}
?>

/*Below is how you embed the script into your html within the footer.php file in wordpress


<p>&copy <?php echo $copyright; ?> Joe Doe Business</p>

*/