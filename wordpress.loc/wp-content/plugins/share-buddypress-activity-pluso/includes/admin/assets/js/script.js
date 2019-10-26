jQuery( document ).ready( function( $ ){

	$( '#mxsbap_form_update' ).on( 'submit', function( e ){

		e.preventDefault();

		var nonce = $( '#mxsbap_wpnonce' ).val();
		var script_string = $( '#mxsbap_script_body' ).val();
		var block_string = $( '#mxsbap_block_body' ).val();
		var is_checked_restore = $( '#mxsbap_restore_data' ).prop( 'checked' );
		var start_restore = is_checked_restore === true ? 'restore' : '0';
		var current_url = $( '#mxsbap_current_url' ).val();

		var data = {

			'action': 'mxsbap_update',
			'nonce': nonce,
			'script_string': script_string,
			'block_string': block_string,
			'is_checked_restore': start_restore,
			'current_url': current_url

		};

		jQuery.post( ajaxurl, data, function( response ){


			if( data.is_checked_restore === 'restore' ){

				setTimeout( function(){

					window.location.href = data.current_url;

				}, 100 );
				
			}

			alert( 'Changes saved!' );

		} );		

	} );

} );