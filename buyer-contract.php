<?php
header("Content-disposition: attachment; filename=buyer-contract.pdf");
header("Content-type: application/pdf");
readfile("buyer-contract.pdf");
?>