<?php 

function vocterTrimVal($str) {
    return str_replace(' ', '-', strtolower($str));
}