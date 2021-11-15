<script>
$(function(){
    $('.selectpicker').selectpicker();
});

function langEN()
{
  location.replace("./index.php?lang=<?php echo "EN" ?>");
}
function langTR()
{
  location.replace("./index.php?lang=<?php echo "TR" ?>");
}
  </script>