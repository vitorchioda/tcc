<?php
ini_set("display_errors",0);
error_reporting(0);
if(!$_COOKIE["logado"]){
echo '<script type="text/javascript"> alert ("logue-se para vizualizar esta página");
</script>
';
}


?>