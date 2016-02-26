/* Limit donation to a max of $5000 */


function check_donation_amount($valid_data, $posted) {
$donation_value = preg_replace("/[\$,]/", "", $posted['give-amount']);
if ($donation_value > 5000)
give_set_error('donation_amount','The donation amount cannot be more than $5000. Please go back and select a specified amount or enter a smaller donation amount.' ,'give');
}
add_action( 'give_checkout_error_checks', 'check_donation_amount', 10, 2 ); 
