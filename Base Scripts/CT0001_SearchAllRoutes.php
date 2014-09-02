<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("http://www.staging.clickbus.com.ph/");
    }

    /**
     * @dataProvider routeProvider
     */
    public function testSomething($departurePlace, $destinationPlace)
    {
        $this->open("/");
        $this->type("id=originPlace", $departurePlace);
        $this->keyPress("id=originPlace", "40");
        $this->keyPress("id=originPlace", "13");
        $this->type("id=destinationPlace", $destinationPlace);
        $this->keyPress("id=destinationPlace", "40");
        $this->keyPress("id=destinationPlace", "13");
        $this->type("id=departureDate", "29/08/2014");
        $this->keyPress("departureDate", "13");
        $this->select("id=destinationPassengers", "label=1");
        $this->click("id=btn-search");
        $this->waitForPageToLoad("10000");
        $this->assertFalse($this->isElementPresent("css=img[alt=\"Sorry, we do not offer this route yet.\"]"));
        $this->click("css=img.logo");
        $this->waitForPageToLoad("10000");
    }

    public function routeProvider()
    {
        return [
            ["Cubao, JAC Liner","Lucena, JAC Liner"],
            ["Cubao, JAC Liner","SM City Lucena - Dalahican Pier, JAC Liner"],
            ["Cubao, JAC Liner","Santa Rosa Complex, JAC Liner"],
            ["Buendia, JAC Liner","Binan, JAC Liner"],
            ["Buendia, JAC Liner","Marinduque, JAC Liner"],
            ["Buendia, JAC Liner","Marinduque, JAC Liner"],
            ["Buendia, JAC Liner","Marinduque, JAC Liner"],
            ["Buendia, JAC Liner","Marinduque, JAC Liner"],
            ["Buendia, JAC Liner","Marinduque, JAC Liner"],
            ["Buendia, JAC Liner","Marinduque, JAC Liner"],
            ["Cubao, JAC Liner","Marinduque, JAC Liner"],
            ["Cubao, JAC Liner","Marinduque, JAC Liner"],
            ["Cubao, JAC Liner","Marinduque, JAC Liner"],
            ["Cubao, JAC Liner","Marinduque, JAC Liner"],
            ["Cubao, JAC Liner","Marinduque, JAC Liner"],
            ["Cubao, JAC Liner","Marinduque, JAC Liner"],
            ["Buendia, JAC Liner","Lucena, JAC Liner"],
            ["Buendia, JAC Liner","SM City Lucena - Dalahican Pier, JAC Liner"],
            ["Buendia, JAC Liner","Santa Rosa Complex, JAC Liner"],
            ["Buendia, JAC Liner","Binan, JAC Liner"],
            ["Cubao, Solid North","San Carlos, Solid North"],
            ["Cubao, Solid North","Mauban, Solid North"],
            ["Cubao, Solid North","Binalonan, Solid North"],
            ["Cubao, Solid North","San Miguel, Solid North"],
            ["Cubao, Isarog","Naga, Isarog"],
            ["Cubao, Isarog","Naga, Isarog"],
            ["Cubao, Isarog","Naga, Isarog"],
            ["Buhi, Isarog","Cubao, Isarog"],
            ["Legazi, Isarog","Cubao, Isarog"],
            ["Legazi, Isarog","Cubao, Isarog"],
            ["Legazi, Isarog","Cubao, Isarog"],
            ["Naga, Isarog","Cubao, Isarog"],
            ["Naga, Isarog","Cubao, Isarog"],
            ["Naga, Isarog","Cubao, Isarog"],
            ["Naga, Isarog","Cubao, Isarog"],
            ["Naga, Isarog","Cubao, Isarog"],
            ["Naga, Isarog","Cubao, Isarog"],
            ["Sorsogon, Isarog","Cubao, Isarog"],
            ["Cubao, Isarog","Legazi, Isarog"],
            ["Cubao, Isarog","Legazi, Isarog"],
            ["Cubao, Isarog","Legazi, Isarog"],
            ["Cubao, Isarog","Sorsogon, Isarog"],
            ["Cubao, Isarog","Naga, Isarog"],
            ["Cubao, Isarog","Naga, Isarog"],
            ["Cubao, Isarog","Naga, Isarog"],
            ["Cubao, Isarog","Naga, Isarog"],
            ["Cubao, Isarog","Naga, Isarog"],
            ["Cubao, Isarog","Naga, Isarog"],
            ["Cubao, Isarog","Buhi, Isarog"],
            ["Cubao, RSL","Catanduanes, RSL"],
            ["Cubao, RSL","Catanduanes, RSL"],
            ["Cubao, RSL","Irosin, RSL"],
            ["Cubao, RSL","Irosin, RSL"],
            ["Cubao, RSL","Irosin, RSL"],
            ["Cubao, RSL","Irosin, RSL"],
            ["Cubao, RSL","Irosin, RSL"],
            ["Cubao, RSL","Irosin, RSL"],
            ["Catanduanes, RSL","Cubao, RSL"],
            ["Naga, RSL","Cubao, RSL"],
            ["Tabaco, RSL","Cubao, RSL"],
            ["Catanduanes, RSL","Cubao, RSL"],
            ["Legazpi, RSL","Cubao, RSL"],
            ["Irosin, RSL","Cubao, RSL"],
            ["San Andres, RSL","Cubao, RSL"],
            ["Irosin, RSL","Cubao, RSL"],
            ["Bulan, RSL","Cubao, RSL"],
            ["Naga, RSL","Cubao, RSL"],
            ["Cubao, Penafrancia","Legazpi, Penafrancia"],
            ["Cubao, Penafrancia","Legazpi, Penafrancia"],
            ["Cubao, Penafrancia","Gubat, Penafrancia"],
            ["Cubao, Penafrancia","Legazpi, Penafrancia"],
            ["Cubao, Penafrancia","Calabanga, Penafrancia"],
            ["Cubao, Penafrancia","Lagonoy, Penafrancia"],
            ["Cubao, Penafrancia","Naga, Penafrancia"],
            ["Cubao, Penafrancia","Naga, Penafrancia"],
            ["Cubao, Penafrancia","Naga, Penafrancia"],
            ["Calabanga, Penafrancia","Cubao, Penafrancia"],
            ["Legazpi, Penafrancia","Cubao, Penafrancia"],
            ["Legazpi, Penafrancia","Cubao, Penafrancia"],
            ["Legazpi, Penafrancia","Cubao, Penafrancia"],
            ["Naga, Penafrancia","Cubao, Penafrancia"],
            ["Naga, Penafrancia","Cubao, Penafrancia"],
            ["Naga, Penafrancia","Cubao, Penafrancia"],
            ["Naga, Penafrancia","Cubao, Penafrancia"]
        ];
    }
}
