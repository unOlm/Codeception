<?php 
namespace Codeception\Lib\Interfaces;

interface ElementLocator
{
    /**
     * Locates element using available Codeception locator types:
     *
     * * XPath
     * * CSS
     * * Strict Locator
     *
     * Use it in Helpers or GroupObject or Extension classes:
     *
     * ```php
     * $els = $this->getModule('{{MODULE_NAME}}')->_findElements('.items');
     * $els = $this->getModule('{{MODULE_NAME}}')->_findElements(['name' => 'username']);
     * ```
     *
     * WebDriver module returns `Facebook\WebDriver\Remote\RemoteWebElement` instances
     * PhpBrowser and Framework modules return `Symfony\Component\DomCrawler\Crawler` instances
     *
     * @api
     * @param $locator
     * @return array of interactive elements
     */
    public function _findElements($locator);

}