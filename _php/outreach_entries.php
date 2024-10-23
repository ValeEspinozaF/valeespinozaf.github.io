<?php
    require_once('bibtex2html_outreach.php');
    echo bibfile2html(dirname(__DIR__) . '/_data/outreach_activities.bib', NULL, NULL, false, NULL, NULL, NULL, NULL, ['year', 'month']);
?> 