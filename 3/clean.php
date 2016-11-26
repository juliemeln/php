<?php
function clean($value)
{
    htmlspecialchars($value);
    trim($value);
    stripslashes($value);
    return $value;
}