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
    $this->open("http://dringo.dbc.dk/content/da/");
    $this->assertEquals("Information | bibliotek.dk", $this->getTitle());
    $this->click("link=Hjælp");
    $this->waitForPopUp("PopUpWindow", "30000");
    $this->selectWindow("name=PopUpWindow");
    $this->click("link=Indhold");
    $this->click("link=Indhold i bibliotek.dk");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Hjælp | bibliotek.dk", $this->getTitle());
    $this->verifyText("link=Indhold", "Indhold");
    $this->type("id=edit-search-help", "Udenlandske");
    $this->click("id=edit-submit");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Hjælp | bibliotek.dk", $this->getTitle());
    $this->verifyTextPresent("Søgeresultater");
    $this->close();
    $this->selectWindow("null");
  }
}
?>