<?php
/*  Copyright 2013-2015 Renzo Johnson (email: renzojohnson at gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function wpcf7_mch_add_mailchimp($args) {
	$cf7_mch_defaults = array();
	$cf7_mch = get_option( 'cf7_mch_'.$args->id(), $cf7_mch_defaults );
?>

<div class="metabox-holder">

	<h3>MailChimp Extension v.<?php echo SPARTAN_MCE_VERSION ?></h3>

	<div class="mce-main-fields">

		<p class="mail-field">
		<label for="wpcf7-mailchimp-name"><?php echo esc_html( __( 'Subscriber Name:', 'wpcf7' ) ); ?>  <a href="http://renzojohnson.com/contributions/contact-form-7-mailchimp-extension" class="helping-field" target="_blank" title="get help with Subscriber Name">Help?</a></label><br />
		<input type="text" id="wpcf7-mailchimp-name" name="wpcf7-mailchimp[name]" class="wide" size="70" placeholder="[your-name] <= Make sure this the name of your form field" value="<?php echo (isset ($cf7_mch['name'] ) ) ? esc_attr( $cf7_mch['name'] ) : ''; ?>" />
		</p>


		<p class="mail-field">
			<label for="wpcf7-mailchimp-email"><?php echo esc_html( __( 'Subscriber Email:', 'wpcf7' ) ); ?>  <a href="http://renzojohnson.com/contributions/contact-form-7-mailchimp-extension" class="helping-field" target="_blank" title="get help with Subscriber Email:">Help?</a></label><br />
			<input type="text" id="wpcf7-mailchimp-email" name="wpcf7-mailchimp[email]" class="wide" size="70" placeholder="[your-email] <= Make sure this the name of your form field" value="<?php echo (isset ( $cf7_mch['email'] ) ) ? esc_attr( $cf7_mch['email'] ) : ''; ?>" />
		</p>


		<p class="mail-field">
		<label for="wpcf7-mailchimp-accept"><?php echo esc_html( __( 'Required Acceptance Field:', 'wpcf7' ) ); ?>  <a href="http://renzojohnson.com/contributions/contact-form-7-mailchimp-extension/mailchimp-opt-in-checkbox" class="helping-field" target="_blank" title="get help with Required Acceptance Field - Opt-in">Help?</a></label><br />
		<input type="text" id="wpcf7-mailchimp-accept" name="wpcf7-mailchimp[accept]" class="wide" size="70" placeholder="[opt-in] <= Leave Empty if you are not using the checkbox or read the link above" value="<?php echo (isset($cf7_mch['accept'])) ? $cf7_mch['accept'] : '';?>" />
		</p>


		<p class="mail-field">
		<label for="wpcf7-mailchimp-api"><?php echo esc_html( __( 'MailChimp API Key:', 'wpcf7' ) ); ?>  <a href="http://renzojohnson.com/contributions/contact-form-7-mailchimp-extension/mailchimp-api-key" class="helping-field" target="_blank" title="get help with MailChimp API Key">Help?</a></label><br />
		<input type="text" id="wpcf7-mailchimp-api" name="wpcf7-mailchimp[api]" class="wide" size="70" placeholder="6683ef9bdef6755f8fe686ce53bdf73a-us4" value="<?php echo (isset($cf7_mch['api']) ) ? esc_attr( $cf7_mch['api'] ) : ''; ?>" />
		</p>

		<p class="mail-field">
		<label for="wpcf7-mailchimp-list"><?php echo esc_html( __( 'MailChimp List ID:', 'wpcf7' ) ); ?>  <a href="http://renzojohnson.com/contributions/contact-form-7-mailchimp-extension/mailchimp-list-id" class="helping-field" target="_blank" title="get help with MailChimp List ID">Help?</a></label><br />
		<input type="text" id="wpcf7-mailchimp-list" name="wpcf7-mailchimp[list]" class="wide" size="70" placeholder="5d4e8a6072" value="<?php echo (isset( $cf7_mch['list']) ) ?  esc_attr( $cf7_mch['list']) : '' ; ?>" />
		</p>

		<p class="mail-field">
		<input type="checkbox" id="wpcf7-mailchimp-resubscribeoption" name="wpcf7-mailchimp[resubscribeoption]" value="1"<?php echo ( isset($cf7_mch['resubscribeoption']) ) ? ' checked="checked"' : ''; ?> />
		<label for="wpcf7-mailchimp-resubscribeoption"><?php echo esc_html( __( 'Allow Users to Resubscribe after being Deleted or Unsubscribed? (checked = true)', 'wpcf7' ) ); ?></label>
		</p>

		<p class="mail-field">
		<input type="checkbox" id="wpcf7-mailchimp-cf-active" name="wpcf7-mailchimp[cfactive]" value="1"<?php echo ( isset($cf7_mch['cfactive']) ) ? ' checked="checked"' : ''; ?> />
		<label for="wpcf7-mailchimp-cfactive"><?php echo esc_html( __( 'Use Custom Fields', 'wpcf7' ) ); ?>  <a href="http://renzojohnson.com/contributions/contact-form-7-mailchimp-extension" class="helping-field" target="_blank" title="get help with Custom Fields">Help?</a></label>
		</p>

	</div>

	<div class="mailchimp-custom-fields">
		<?php for($i=1;$i<=12;$i++){ ?>

		<div class="col-6">
			<label for="wpcf7-mailchimp-CustomValue<?php echo $i; ?>"><?php echo esc_html( __( 'Contact Form Value '.$i.':', 'wpcf7' ) ); ?></label><br />
			<input type="text" id="wpcf7-mailchimp-CustomValue<?php echo $i; ?>" name="wpcf7-mailchimp[CustomValue<?php echo $i; ?>]" class="wide" size="70" placeholder="[your-example-value]" value="<?php echo (isset( $cf7_mch['CustomValue'.$i]) ) ?  esc_attr( $cf7_mch['CustomValue'.$i] ) : '' ;  ?>" />
		</div>


		<div class="col-6">
			<label for="wpcf7-mailchimp-CustomKey<?php echo $i; ?>"><?php echo esc_html( __( 'MailChimp Custom Field Name '.$i.':', 'wpcf7' ) ); ?></label><br />
			<input type="text" id="wpcf7-mailchimp-CustomKey<?php echo $i; ?>" name="wpcf7-mailchimp[CustomKey<?php echo $i; ?>]" class="wide" size="70" placeholder="example-field" value="<?php echo (isset( $cf7_mch['CustomKey'.$i]) ) ?  esc_attr( $cf7_mch['CustomKey'.$i] ) : '' ;  ?>" />
		</div>

		<?php } ?>

	</div>

	<hr class="p-hr">
	<p class="p-author">This <a href="http://renzojohnson.com/contributions/contact-form-7-mailchimp-extension" title="This FREE WordPress plugin" alt="This FREE WordPress plugin">FREE WordPress plugin</a> is currently developed in Orlando, Florida by <a href="//renzojohnson.com" target="_blank" title="Front End Developer: Renzo Johnson" alt="Front End Developer: Renzo Johnson">Renzo Johnson</a>. Feel free to contact with your comments or suggestions.</p>

</div>

<?php

}


function wpcf7_mch_save_mailchimp($args) {

	if (!empty($_POST)){
		update_option( 'cf7_mch_'.$args->id, $_POST['wpcf7-mailchimp'] );

	}

}
add_action( 'wpcf7_after_save', 'wpcf7_mch_save_mailchimp' );



function show_mch_metabox ( $panels ) {

	$new_page = array(
		'MailChimp-Extension' => array(
			'title' => __( 'MailChimp', 'contact-form-7' ),
			'callback' => 'wpcf7_mch_add_mailchimp'
		)
	);

	$panels = array_merge($panels, $new_page);

	return $panels;

}
add_filter( 'wpcf7_editor_panels', 'show_mch_metabox' );



function cf7_mch_tag_replace( $pattern, $subject, $posted_data, $html = false ) {

	if( preg_match($pattern,$subject,$matches) > 0)
	{

		if ( isset( $posted_data[$matches[1]] ) ) {
			$submitted = $posted_data[$matches[1]];

			if ( is_array( $submitted ) )
				$replaced = join( ', ', $submitted );
			else
				$replaced = $submitted;

			if ( $html ) {
				$replaced = strip_tags( $replaced );
				$replaced = wptexturize( $replaced );
			}

			$replaced = apply_filters( 'wpcf7_mail_tag_replaced', $replaced, $submitted );

			return stripslashes( $replaced );
		}

		if ( $special = apply_filters( 'wpcf7_special_mail_tags', '', $matches[1] ) )
			return $special;

		return $matches[0];
	}
	return $subject;

}


function wpcf7_mch_subscribe($obj) {
	$cf7_mch = get_option( 'cf7_mch_'.$obj->id() );
	$submission = WPCF7_Submission::get_instance();

	if( $cf7_mch )
	{
		$subscribe = false;

		$regex = '/\[\s*([a-zA-Z_][0-9a-zA-Z:._-]*)\s*\]/';
		$callback = array( &$obj, 'cf7_mch_callback' );

		$email = cf7_mch_tag_replace( $regex, $cf7_mch['email'], $submission->get_posted_data() );
		$name = cf7_mch_tag_replace( $regex, $cf7_mch['name'], $submission->get_posted_data() );

		$lists = cf7_mch_tag_replace( $regex, $cf7_mch['list'], $submission->get_posted_data() );
		$listarr = explode(',',$lists);

		$merge_vars=array('FNAME'=>$name);//By default the key label for the name must be FNAME

		if( isset($cf7_mch['accept']) && strlen($cf7_mch['accept']) != 0 )
		{
			$accept = cf7_mch_tag_replace( $regex, $cf7_mch['accept'], $submission->get_posted_data() );
			if($accept != $cf7_mch['accept'])
			{
				if(strlen($accept) > 0)
					$subscribe = true;
			}
		}
		else
		{
			$subscribe = true;
		}

		for($i=1;$i<=20;$i++){

			if( isset($cf7_mch['CustomKey'.$i]) && isset($cf7_mch['CustomValue'.$i]) && strlen(trim($cf7_mch['CustomValue'.$i])) != 0 )
			{
				$CustomFields[] = array('Key'=>trim($cf7_mch['CustomKey'.$i]), 'Value'=>cf7_mch_tag_replace( $regex, trim($cf7_mch['CustomValue'.$i]), $submission->get_posted_data() ) );
				$NameField=trim($cf7_mch['CustomKey'.$i]);
				$NameField=strtr($NameField, "[", "");
				$NameField=strtr($NameField, "]", "");
				$merge_vars=$merge_vars + array($NameField=>cf7_mch_tag_replace( $regex, trim($cf7_mch['CustomValue'.$i]), $submission->get_posted_data() ) );
			}

		}

		if( isset($cf7_mch['resubscribeoption']) && strlen($cf7_mch['resubscribeoption']) != 0 )
		{
			$ResubscribeOption = true;
		}
			else
		{
			$ResubscribeOption = false;
		}

		if($subscribe && $email != $cf7_mch['email'])
		{

			if (!class_exists('Mailchimp'))
			{
    		require_once( SPARTAN_MCE_PLUGIN_DIR .'/api/Mailchimp.php');
			}

			$wrap = new Mailchimp($cf7_mch['api']);
			$Mailchimp = new Mailchimp( $cf7_mch['api'] );
			$Mailchimp_Lists = new Mailchimp_Lists($Mailchimp);
			// check if subscribed
			try {
					foreach($listarr as $listid)
					{
		        		$listid = trim($listarr[0]);
		        		$result = $wrap->lists->subscribe($listid, array('email'=>$email), $merge_vars, false, false, false, false);
					}
			 	} catch (Exception $e)
			 	{
        		//echo 'Error, check your error log file for details';
			 			error_log($e->getMessage(), 0);
			 			error_log($e->getMessage(), 1);
    			}
		}
	}

}
add_action( 'wpcf7_before_send_mail', 'wpcf7_mch_subscribe' );



function spartan_mce_class_attr( $class ) {

  $class .= ' mailchimp-ext-' . SPARTAN_MCE_VERSION;
  return $class;

}
add_filter( 'wpcf7_form_class_attr', 'spartan_mce_class_attr' );


