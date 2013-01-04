<?php

class Blanq_Bootstrap_Nav_Options_Page extends scbAdminPage {

	function setup() {
		$this->args = array(
			'page_title' => 'Blanq Bootstrap Nav',
		);
	}

	function page_content() {
		
		echo html( 'h3', 'Bootstrap Nav Options' );
		
		echo $this->form_table( array(
			array(
				'title' => 'Enable Bootstrap Nav (recommended)',
				'type' => 'checkbox',
				'name' => 'enable_bootstrap_nav'
			),
			array(
				'title' => 'Select which menu to use with Bootstrap Nav',
				'type' => 'select',
				'name' => 'select_bootstrap_nav',
				'value' => array( 'green', 'blue', 'white' ),
				'text' => '&ndash; Please Select &ndash;'
			),
		) );
	}

	function page_footer() {
		parent::page_footer();

		// Reset all forms
?>
		<script type="text/javascript">
		(function() {
			var forms = document.getElementsByTagName('form');
			for (var i = 0; i < forms.length; i++) {
				forms[i].reset();
			}
		}());
		</script>
<?php
	}
}