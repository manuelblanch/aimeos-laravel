<?php


class ViewTest extends AimeosTestAbstract
{
	public function testCreateNoLocale()
	{
		$i18n = $this->getMockBuilder( '\Aimeos\Shop\Base\I18n' )
			->disableOriginalConstructor()
			->getMock();

		$support = $this->getMockBuilder( '\Aimeos\Shop\Base\Support' )
			->disableOriginalConstructor()
			->getMock();

		$context = new \Aimeos\MShop\Context\Item\Standard();
		$context->setConfig( new \Aimeos\MW\Config\PHPArray() );

		$object = new \Aimeos\Shop\Base\View( $i18n, $support );

		$this->assertInstanceOf( '\Aimeos\MW\View\Iface', $object->create( $context, array() ) );
	}
}
