<?php

function check_status($item, $status)
{
	if (key_exists($status, STATUS_LIST)) {
		if ($item === $status) {
			return 'selected';
		} else {
			return '';
		}
	} else {
		return '';
	}
}


function encrypt($value)
{
	$enc = \Config\Services::encrypter();
	return bin2hex($enc->encrypt($value));
}

function decrypt($value)
{
	$enc = \Config\Services::encrypter();
	return $enc->decrypt(hex2bin($value));
}
