<?php
session_start();
session_destroy();
header("Location: /boxing-shop1");
exit;
