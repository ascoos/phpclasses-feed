<?php
/**
 * @package            	: Latest classes from PHPClasses.org
 * @source             	: /phpclasses-feed/libs/libs.php
 * @version            	: 1.0.1
 * @created            	: 2024-10-14 07:00:00 UTC+3
 * @updated            	: 2024-10-15 07:00:00 UTC+3
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 5.6.40
 */


class TPHPClassesLib {

    function diff_days($from, $to = "now")
    {
        // Target date e.g. "Fri, 11 Oct 2024 17:49:23 GMT"
        $targetDate = new DateTime($from);
    
        // Current date and time
        $currentDate = new DateTime("now", new \DateTimeZone("GMT"));
    
        // Calculation of difference
        $interval = $currentDate->diff($targetDate);
    
        // Show difference in days
        return $interval->days;
    }
    
    
    function getSummary($description) {
        // Load the content of description in DOMDocument
        $dom = new DOMDocument;
        $dom->loadHTML($description);
    
        // Find the span with that name
        $spans = $dom->getElementsByTagName('span');
        foreach ($spans as $span) {
            if ($span->getAttribute('name') === 'description') {
                return (string) $span->nodeValue;
            }
        }
    }
}



 ?>