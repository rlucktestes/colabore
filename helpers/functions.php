<?php

function str_slug($str)
{
	return preg_replace($/[\d+]/i, '', strtolower(str_replace(' ', '-', $str)));
}