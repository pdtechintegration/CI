<?php

// Include the functions for the theme
include_once('../functions.php');
 
class Test_Basic_Theme extends WP_UnitTestCase {
     
	function setUp() {

	    parent::setUp();
	    switch_theme( 'Integration', 'Integration' );

	} // end setup
	
	function testActiveTheme() {
		
		$current_theme = wp_get_theme();
	    $this->assertTrue( 'Integration' == $current_theme->get( 'Name' ) );

	} // end testThemeInitialization

	function testInactiveTheme() {
		$current_theme = wp_get_theme();
	    $this->assertFalse( 'Twenty Fourteen' == $current_theme->get( 'Name' ) );

	} // end testInactiveTheme
	
	function testSomeotherTest() {
		$this->assertTrue( 'some result' == function_that_does_not_exist() );
	}
	
	function testNewAdCodes() {
		$this->assertEquals( 'id=9510&pr=hshahs', pn_get_ad_code( 9510, 'hshahs' ) );
		$this->assertEquals( 'id=8715&pr=lala', pn_get_ad_code( 8715, 'lala' ) );
		$this->assertEquals( 'id=9510&pr=hsiwiwihahs', pn_get_ad_code( 9510, 'hsiwiwihahs' ) );
		$this->assertEquals( 'error', pn_get_ad_code( null, 'hsiwiwihahs' ) );
		$this->assertEquals( 'error', pn_get_ad_code( 9510, null ) );
		$this->assertEquals( 'error', pn_get_ad_code( null, null ) );
		
		
	}
} // end class