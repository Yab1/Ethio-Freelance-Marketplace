<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/add-skill.php";


if(isset($_POST['save']))
{
$skill=$_POST['skill'];




$skill=new Skill($skill);
$add_skill = $skill->addskill();
}
?>

