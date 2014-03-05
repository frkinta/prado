<?php

class ActiveButtonTestCase extends PradoGenericSelenium2Test
{
	function test()
	{
		$base='ctl0_Content_';
		$this->url("active-controls/index.php?page=ActiveButtonTest");
		$this->assertContains("TActiveButton Functional Test", $this->source());
		$this->assertText("{$base}label1", "Label 1");
		$this->clickOnElement("{$base}button2");
		$this->pause(800);
		$this->assertText("{$base}label1", "Button 1 was clicked using callback!");
	}
}
