<?php
$helper_config["log"] = true;
$helper_config["intent-function"] = true;
include("PATH/TO/helper.php"); //set path to helper.php

function what_is(){ //will be executed if intent-name = "what_is", because $helper_config["intent-function"] = true;
  global $helper;
  simple_response("Here is your result:");
  basic_card($helper["parameters"]["animal"], $helper["parameters"]["animal"] . "s are beatuiful", "https://example.com/" . $helper["parameters"]["animal"]  . ".jpg", "cat from example.com"); //on this link is no image
  suggestion_chips(["grey " . $helper["parameters"]["animal"], "white " . $helper["parameters"]["animal"] , "brown" . $helper["parameters"]["animal"]]);
}
