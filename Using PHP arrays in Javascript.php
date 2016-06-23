<?php
// PHP array
$mArray = array("superman","batman","flash","shazam");
?>
<script type="text/javascript">
//Passing PHP array to a JavaScript Variable
var mArray=<?php echo json_encode($mArray)?>;
//Result is as Following:
mArray=["superman","batman","flash","shazam"];
alert(mArray[0]+" "+mArray[3]); 
</script>