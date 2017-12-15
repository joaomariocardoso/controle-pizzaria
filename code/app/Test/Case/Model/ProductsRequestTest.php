<?php
App::uses('ProductsRequest', 'Model');

/**
 * ProductsRequest Test Case
 */
class ProductsRequestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.products_request',
		'app.request',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductsRequest = ClassRegistry::init('ProductsRequest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductsRequest);

		parent::tearDown();
	}

}
