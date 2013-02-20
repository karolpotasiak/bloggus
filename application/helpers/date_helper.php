<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function ddmmyyyy_to_mysql($date)
{
	list($day, $month, $year) = explode('/', $date);
	return date("Y-m-d", mktime(0, 0, 0, $month, $day, $year));
}
function mysql_to_ddmmyyyy($date)
{
	list($year, $month, $day) = explode('-', $date);
	return date("d/m/Y", mktime(0, 0, 0, $month, $day, $year));
}