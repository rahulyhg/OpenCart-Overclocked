<?php
// MaxMind
$_['text_country_match']           	= 'Country Match:<br /><span class="help">Whether country of IP address matches billing address country (mismatch = higher risk).</span>';
$_['text_country_code']             	= 'Country Code:<br /><span class="help">Country Code of the IP address.</span>';
$_['text_high_risk_country']      		= 'High Risk Country:<br /><span class="help">Whether IP address or billing address country is in Ghana, Nigeria, or Vietnam.</span>';
$_['text_distance']                		= 'Distance:<br /><span class="help">Distance from IP address to Billing Location in kilometers (large distance = higher risk).</span>';
$_['text_ip_region']                 		= 'IP Region:<br /><span class="help">Estimated State/Region of the IP address.</span>';
$_['text_ip_city']                  		= 'IP City:<br /><span class="help">Estimated City of the IP address.</span>';
$_['text_ip_latitude']            		= 'IP Latitude:<br /><span class="help">Estimated Latitude of the IP address.</span>';
$_['text_ip_longitude']            		= 'IP Longitude:<br /><span class="help">Estimated Longitude of the IP address.</span>';
$_['text_ip_isp']                   		= 'ISP:<br /><span class="help">ISP of the IP address.</span>';
$_['text_ip_org']                   		= 'IP Organization:<br /><span class="help">Organization of the IP addres.</span>';
$_['text_ip_asnum']                		= 'ASNUM:<br /><span class="help">Estimated Autonomous System Number of the IP address.</span>';
$_['text_ip_user_type']           		= 'IP User Type:<br /><span class="help">Estimated user type of the IP address.</span>';
$_['text_ip_country_confidence']  	= 'IP Country Confidence:<br /><span class="help">Representing our confidence that the country location is correct.</span>';
$_['text_ip_region_confidence']    	= 'IP Region Confidence:<br /><span class="help">Representing our confidence that the region location is correct.</span>';
$_['text_ip_city_confidence']       	= 'IP City Confidence:<br /><span class="help">Representing our confidence that the city location is correct.</span>';
$_['text_ip_postal_confidence']     	= 'IP Postal Confidence:<br /><span class="help">Representing our confidence that the postal code location is correct.</span>';
$_['text_ip_postal_code']           	= 'IP Postal Code:<br /><span class="help">Estimated Postal Code of the IP address.</span>';
$_['text_ip_accuracy_radius']      	= 'IP Accuracy Radius:<br /><span class="help">The average distance between the actual location of the end user using the IP address and the location returned by the GeoIP City database, in miles.</span>';
$_['text_ip_net_speed_cell']      		= 'IP Net Speed Cell:<br /><span class="help">Estimated network type of the IP address.</span>';
$_['text_ip_metro_code']           	= 'IP Metro Code:<br /><span class="help">Estimated Metro Code of the IP address.</span>';
$_['text_ip_area_code']            		= 'IP Area Code:<br /><span class="help">Estimated Area Code of the IP address.</span>';
$_['text_ip_time_zone']            		= 'IP Time Zone:<br /><span class="help">Estimated Time Zone of the IP address.</span>';
$_['text_ip_region_name']         		= 'IP Region Name:<br /><span class="help">Estimated Region name of the IP address.</span>';
$_['text_ip_domain']              		= 'IP Domain:<br /><span class="help">Estimated domain of the IP address.</span>';
$_['text_ip_country_name']       		= 'IP Country Name:<br /><span class="help">Estimated Country name of the IP address.</span>';
$_['text_ip_continent_code']     		= 'IP Continent Code:<br /><span class="help">Estimated Continent code of the IP address.</span>';
$_['text_ip_corporate_proxy']      	= 'IP Corporate Proxy:<br /><span class="help">Whether the IP is an Corporate Proxy in the database or not.</span>';
$_['text_anonymous_proxy']        	= 'Anonymous Proxy:<br /><span class="help">Whether IP address is Anonymous Proxy (anonymous proxy = very high risk).</span>';
$_['text_proxy_score']               	= 'Proxy Score:<br /><span class="help">Likelihood of IP Address being an Open Proxy.</span>';
$_['text_is_trans_proxy']        		= 'Is Transparent Proxy:<br /><span class="help">Whether IP address is in our database of known transparent proxy servers, returned if forwardedIP is passed as an input.</span>';
$_['text_free_mail']                		= 'Free Mail:<br /><span class="help">Whether e-mail is from free e-mail provider (free e-mail = higher risk).</span>';
$_['text_carder_email']             		= 'Carder Email:<br /><span class="help">Whether e-mail is in database of high risk e-mails.</span>';
$_['text_high_risk_username']   		= 'High Risk Username:<br /><span class="help">Whether usernameMD5 input is in database of high risk usernames. Only returned if usernameMD5 is included in inputs.</span>';
$_['text_high_risk_password']      	= 'High Risk Password:<br /><span class="help">Whether passwordMD5 input is in database of high risk passwords. Only returned if passwordMD5 is included in inputs.</span>';
$_['text_bin_match']               		= 'Bin Match:<br /><span class="help">Whether country of issuing bank based on BIN number matches billing address country.</span>';
$_['text_bin_country']            		= 'Bin Country:<br /><span class="help">Country Code of the bank which issued the credit card based on BIN number.</span>';
$_['text_bin_name_match']          	= 'Bin Name Match:<br /><span class="help">Whether name of issuing bank matches inputted  BIN name. A return value of Yes provides a positive indication that cardholder is in possession of credit card.</span>';
$_['text_bin_name']                 		= 'Bin Name:<br /><span class="help">Name of the bank which issued the credit card based on BIN number. Available for approximately 96% of BIN numbers.</span>';
$_['text_bin_phone_match']        	= 'Bin Phone Match:<br /><span class="help">Whether customer service phone number matches inputed BIN Phone. A return value of Yes provides a positive indication that cardholder is in possession of credit card.</span>';
$_['text_bin_phone']                		= 'Bin Phone:<br /><span class="help">Customer service phone number listed on back of credit card. Available for approximately 75% of BIN numbers. In some cases phone number returned may be outdated.</span>';
$_['text_customer_phone_in_billing_location'] = 'Customer Phone Number in Billing Location:<br /><span class="help">Whether the customer phone number is in the billing zip code. A return value of Yes provides a positive indication that the phone number listed belongs to the cardholder. A return value of No indicates that the phone number may be in a different area, or may not be listed in our database. NotFound is returned when the phone number prefix cannot be found in our database at all. Currently we only support US Phone numbers.</span>';
$_['text_ship_forward']             	= 'Shipping Forward:<br /><span class="help">Whether shipping address is in database of known mail drops.</span>';
$_['text_city_postal_match']     		= 'City Postal Match:<br /><span class="help">Whether billing city and state match zipcode. Currently available for US addresses only, returns empty string outside the US.</span>';
$_['text_ship_city_postal_match']  	= 'Shipping City Postal Match:<br /><span class="help">Whether shipping city and state match zipcode. Currently available for US addresses only, returns empty string outside the US.</span>';
$_['text_score']                       	= 'Score:<br /><span class="help">Overall fraud score based on outputs listed above. This is the original fraud score, and is based on a simple formula. It has been replaced with risk score (see below), but is kept for backwards compatibility.</span>';
$_['text_explanation']             		= 'Explanation:<br /><span class="help">A brief explanation of the score, detailing what factors contributed to it, according to our formula. Please note this corresponds to the score, not the riskScore.</span>';
$_['text_risk_score']               		= 'Risk Score:<br /><span class="help">New fraud score representing the estimated probability that the order is fraud, based off of analysis of past minFraud transactions. Requires an upgrade for clients who signed up before February 2007.</span>';
$_['text_queries_remaining']       	= 'Queries Remaining:<br /><span class="help">Number of queries remaining in your account, can be used to alert you when you may need to add more queries to your account.</span>';
$_['text_maxmind_id']              		= 'Maxmind ID:<br /><span class="help">Unique identifier, used to reference transactions when reporting fraudulent activity back to MaxMind. This reporting will help MaxMind improve its service to you and will enable a planned feature to customize the fraud scoring formula based on your chargeback history.</span>';
$_['text_error']                      		= 'Error:<br /><span class="help">Returns an error string with a warning message or a reason why the request failed.</span>';

// Button
$_['button_maxmind'] 					= 'MaxMind Settings';
?>