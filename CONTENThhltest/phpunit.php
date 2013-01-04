<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://dringo.dbc.dk/");
  }

  public function testMyTestCase()
  {
    // Kontakt
    $this->click("link=Kontakt");
    $this->waitForPopUp("PopUpWindow", "30000");
    $this->selectWindow("name=PopUpWindow");
    $this->assertEquals("Kontakt", $this->getText("link=Kontakt"));
    $this->assertEquals("English", $this->getText("link=English"));
    $this->click("link=Indhold");
    $this->click("link=Indhold i bibliotek.dk");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Hjælp | bibliotek.dk", $this->getTitle());
    $this->close();
  }
}
?>