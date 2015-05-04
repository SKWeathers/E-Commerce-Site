<?php

include("../php/check_login.php");
include("../php/listing_class.php");

$listing_id = $_GET['listing_id'];
$listing = NEW Listing();
$listing->getFixedListingData($listing_id);

?>

<html>
<head><title>Congratulations! You just purchased <?php echo $listing->title ?></title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php include("../header_sidebar.php"); ?>

<div id="content">

	<h1>Congratulations! You just purchased "<?php echo $listing->title ?>"</h1><hr />


</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>