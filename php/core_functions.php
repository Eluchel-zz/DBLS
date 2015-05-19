<?php
require_once("/../../CAS.php");

function check_auth()
{
	if (!isset($GLOBALS['PHPCAS_CLIENT'])) //check to make sure you haven't initlized a client already
	{		
		phpCAS::client(CAS_VERSION_2_0, 'cas.byu.edu', 443, 'cas'); 
		//phpCAS::setCasServerCACert("../CAS/cas_ca.pem");
		phpCAS::setNoCasServerValidation();
		phpCAS::setDebug("cas_error.txt");

		phpCAS::handleLogoutRequests(true, array('cas.byu.edu','cas1.byu.edu','cas2.byu.edu','cas3.byu.edu'));			
	}	
	return phpCAS::isAuthenticated();
}

/*--------------------------------
	Force a Logon to CAS
*/
function force_login()
{
	if (!isset($GLOBALS['PHPCAS_CLIENT'])) {
        check_auth();
    }
	phpCAS::forceAuthentication();
}

?>