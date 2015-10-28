<?php
/**
 * Created by PhpStorm.
 * User: Tu TV
 * Date: 22/10/2015
 * Time: 5:35 PM
 */

namespace App\Helpers;

function responseError() {
	echo json_encode( [ 'status' => 'ERROR' ] );
	die();
}

function convertCountTimestamp2String( $timestamp ) {
	$timestamp = intval( $timestamp );
	$string    = '';
	if ( $timestamp >= 86400 ) {
		$days      = intval( $timestamp / 86400 );
		$timestamp = $timestamp % 86400;
		$string .= $days . ' ngày';
	}

	if ( $timestamp >= 3600 ) {
		$hours     = intval( $timestamp / 3600 );
		$timestamp = $timestamp % 3600;
		$string .= ' ' . $hours . ' giờ';
	}

	if ( $timestamp >= 0 ) {
		$minutes = intval( $timestamp / 60 );
		if ( $minutes == 0 ) {
			$minutes = 1;
		}
		$string .= ' ' . $minutes . ' phút';
	}


	return trim( $string );
}