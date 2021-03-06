<?php
/**
 * The User Account template wrapper.
 *
 * Displays the user account page.
 *
 * @package WPSC
 * @since WPSC 3.8
 */
global $current_tab; ?>

<div class="wrap">
	<?php if ( is_user_logged_in() ) : ?>
        <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php _e('Logout','sp'); ?>" class="account_logout">
            <div class="logout-div">
                ログアウトする
            </div>
        </a>
		<div class="user-profile-links">

			<?php $default_profile_tab = apply_filters( 'wpsc_default_user_profile_tab', 'purchase_history' ); ?>
			<?php $current_tab = isset( $_REQUEST['tab'] ) ? $_REQUEST['tab'] : $default_profile_tab; ?>

			<?php wpsc_user_profile_links(); ?>

			<?php do_action( 'wpsc_additional_user_profile_links', '|' ); ?>

		</div>

		<?php do_action( 'wpsc_user_profile_section_' . $current_tab ); ?>

	<?php else : ?>

		<?php _e( 'You must be logged in to use this page. Please use the form below to login to your account.', 'wpsc' ); ?>

		<form name="loginform" id="loginform" action="<?php echo esc_url( wp_login_url() ); ?>" method="post">
			<p>
				<label><?php _e( 'Username:', 'wpsc' ); ?><br /><input type="text" name="log" id="log" value="" size="20" tabindex="1" /></label>
			</p>

			<p>
				<label><?php _e( 'Password:', 'wpsc' ); ?><br /><input type="password" name="pwd" id="pwd" value="" size="20" tabindex="2" /></label>
			</p>

			<p>
				<label>
					<input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="3" />
					<?php _e( 'Remember me', 'wpsc' ); ?>
				</label>
			</p>

			<p class="submit">
				<input type="submit" name="submit" id="submit" value="<?php _e( 'Login &raquo;', 'wpsc' ); ?>" tabindex="4" />
				<input type="hidden" name="redirect_to" value="<?php echo esc_url( get_option( 'user_account_url' ) ); ?>" />
			</p>
		</form>

	<?php endif; ?>

</div>
