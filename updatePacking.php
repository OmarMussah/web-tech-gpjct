<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "./UpdateInventory.css" />
	<title>Inventory</title>
</head>
<body>
	<!-- register form -->
	<form class = "add-packing-form" action="updatePacking_proc.php" method="GET">
		<h1>Add Packing</h1>
        <!-- packing (, , , ) -->
	  <input class = "input-fields" type = "hidden" id = "uname" name = "packingID" value = <?php echo $_GET['packingID'];?>><br>
	  <input class = "input-fields" type = "hidden" id = "pID" name = "warehouseID" value = <?php echo $_GET['warehouseID'];?>><br>
      <label>packingArea</label><br>
	  <input class = "input-fields" type = "text" id = "pID" name = "packingArea" value = <?php echo $_GET['packingArea'];?>><br>
      <label>packingZone</label><br>
	  <input class = "input-fields" type = "text" id = "plot" name = "packingZone" value = <?php echo $_GET['packingZone'];?>><br><br>
	  <input class = "submit-form" type = "submit" id = "btn" name = "register" value="Add">
	  <div>
            </div>
    </form>
</body>
</html>
