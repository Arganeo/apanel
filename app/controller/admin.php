<?php
if (Auth::islog()) {

}else{
	header('Location:login');
}