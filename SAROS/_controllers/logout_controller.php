<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08/04/2019
 * Time: 14:21
 */
session_unset();
session_destroy();
header("location:login");