<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}

/*
<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
//require_once 'dompdf/autoload.inc.php';

//require_once 'dompdf/autoload.inc.php';

include_once APPPATH.'libraries\dompdf\src\Dompdf.php';

//use Dompdf\Dompdf;

class Pdf extends Dompdf
{
	public function __construct()
	{
		 parent::__construct();
	} 
}
*/
?>