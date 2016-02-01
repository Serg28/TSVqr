<?php
/* ������� ��������� QR-����
*
*  @Author: ������������ ����� ��� �������� QR - Omar Eduardo Ortiz Garza <oortiz@tbanc.com>
*  @Author: Serg28 (������� ������) <privat_tel@mail.ru>, http://tsvshop.xyz
*
*  ���������:
*  &text - �����, ������� ����� ������������ � QR-���
*  &format - ������ ��������������� �����������: GIF|PNG|JPG �� ��������� GIF
*/
if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}
$text=(!empty($text)) ? $text : 'http://tsvshop.xyz';
$format=(!empty($format)) ? $format : 'GIF';
require_once(MODX_BASE_PATH."assets/snippets/TSVqr/cQRCode.php");
$qr = new cQRCode($text,ECL_L);
$qr->getQRImg(strtoupper($format),md5($text));
echo "/assets/snippets/TSVqr/tmp/".md5($text).".".strtolower($format);
?>