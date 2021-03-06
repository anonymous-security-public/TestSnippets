<?php
// Testing Snippets extension for Bolt

namespace Bolt\Extension\Bolt\TestSnippets;

use Bolt\Extensions\Snippets\Location as SnippetLocation;

class Extension extends \Bolt\BaseExtension
{
    public function getName()
    {
        return "Test Snippets";
    }

    public function initialize()
    {
        $this->insertSnippet(SnippetLocation::START_OF_HEAD, 'callback', "startofhead");
        $this->insertSnippet(SnippetLocation::START_OF_HEAD, "<!-- inserted string snippet startofhead -->");

        $this->insertSnippet(SnippetLocation::END_OF_HEAD, 'callback', "endofhead");
        $this->insertSnippet(SnippetLocation::END_OF_HEAD, "<!-- inserted string snippet endofhead -->");

        $this->insertSnippet(SnippetLocation::AFTER_META, 'callback', "aftermeta");
        $this->insertSnippet(SnippetLocation::AFTER_META, "<!-- inserted string snippet aftermeta -->");

        $this->insertSnippet(SnippetLocation::BEFORE_CSS, 'callback', "beforecss");
        $this->insertSnippet(SnippetLocation::BEFORE_CSS, "<!-- inserted string snippet beforecss -->");

        $this->insertSnippet(SnippetLocation::AFTER_CSS, 'callback', "aftercss");
        $this->insertSnippet(SnippetLocation::AFTER_CSS, "<!-- inserted string snippet aftercss -->");

        $this->insertSnippet(SnippetLocation::BEFORE_JS, 'callback', "beforejs");
        $this->insertSnippet(SnippetLocation::BEFORE_JS, "<!-- inserted string snippet beforejs -->");

        $this->insertSnippet(SnippetLocation::AFTER_JS, 'callback', "afterjs");
        $this->insertSnippet(SnippetLocation::AFTER_JS, "<!-- inserted string snippet afterjs -->");

        $this->insertSnippet(SnippetLocation::START_OF_BODY, 'callback', "startofbody");
        $this->insertSnippet(SnippetLocation::START_OF_BODY, "<!-- inserted string snippet startofbody -->");

        $this->insertSnippet(SnippetLocation::END_OF_BODY, 'callback', "endofbody");
        $this->insertSnippet(SnippetLocation::END_OF_BODY, "<!-- inserted string snippet endofbody -->");

        $this->insertSnippet(SnippetLocation::END_OF_HTML, 'callback', "endofhtml");
        $this->insertSnippet(SnippetLocation::END_OF_HTML, "<!-- inserted string snippet endofhtml -->");

        $this->insertSnippet(SnippetLocation::AFTER_HTML, 'callback', "afterhtml");
        $this->insertSnippet(SnippetLocation::AFTER_HTML, "<!-- inserted string snippet afterhtml -->");
    }

    public function callback($var)
    {
        $html = "<!-- snippet inserted via callback with parameter '$var'.. -->";

        return new \Twig_Markup($html, 'UTF-8');

    }

}
