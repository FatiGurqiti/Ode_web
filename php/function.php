<?php 

function englishSelected()
{
  if($_GET["lang"] == "EN") echo "selected='selected' ";
}

function turkishSelected()
{
  if($_GET["lang"] == "TR") echo "selected='selected' ";
}

function selectLanguange($EN,$TR)
{
  if($_GET["lang"] == "EN") echo $EN;

  if($_GET["lang"] == "TR") echo $TR;
}
?>