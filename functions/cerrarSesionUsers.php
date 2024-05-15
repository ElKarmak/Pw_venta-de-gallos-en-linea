<?php

session_start();
session_destroy();

header("Location: ../loginUsers.php");
