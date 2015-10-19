<?php

function url($url){
	return dirname($_SERVER['PHP_SELF']).'/'.$url;
}
