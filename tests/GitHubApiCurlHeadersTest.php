<?php

require_once( __DIR__ . '/IncludesForTests.php' );

use PHPUnit\Framework\TestCase;

final class GitHubApiCurlHeadersTest extends TestCase {
	/**
	 * @covers ::vipgoci_curl_headers
	 */
	public function testCurlHeaders1() {
		/*
		 * Make sure it is empty before starting.
		 */
		vipgoci_curl_headers(
			null,
			null
		);

		/*
		 * Populate headers
		 */
		vipgoci_curl_headers(
			'',
			'Content-Type: text/plain'
		);

		vipgoci_curl_headers(
			'',
			'Date: Mon, 04 Mar 2019 16:43:35 GMT'
		);

		vipgoci_curl_headers(
			'',
			'Location: https://www.ruv.is/'
		);

		vipgoci_curl_headers(
			'',
			'Status: 200 OK'
		);


		$actual_results = vipgoci_curl_headers(
			null,
			null
		);

		$this->assertEquals(
			array(
				'content-type'	=> array( 'text/plain' ),
				'date'		=> array( 'Mon, 04 Mar 2019 16:43:35 GMT' ),
				'location'	=> array( 'https://www.ruv.is/' ),
				'status'	=> array( 200, 'OK' ),
			),
			$actual_results
		);
	}
}
