<?php
$baseUrl = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

$https = $_SERVER['HTTPS'] ?? '';
$proto = $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? ($https && $https !== 'off' ? 'https' : 'http');
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$siteUrl = $proto . '://' . $host;

$pageUrl = $siteUrl . ($_SERVER['REQUEST_URI'] ?? '/');
$siteName = 'Appareça Comunicação Estratégica';
$siteImage = $siteUrl . $baseUrl . '/images/logo.png';
