<?php

require_once __DIR__ . '/../../config.php';

if (isloggedin()) {
    redirect(new moodle_url($CFG->httpswwwroot . '/my'));
}

$CFG->additionalhtmlhead .= '<meta name="robots" content="noindex" />';

$PAGE->https_required();

$context = context_system::instance();
$PAGE->set_url("$CFG->httpswwwroot/local/login/index.php");
$PAGE->set_context($context);
$PAGE->set_pagelayout('login');

$PAGE->set_title("HCPSS Staff Hub: login");
$PAGE->set_heading("HCPSS Staff Hub");

echo $OUTPUT->header();

?>
<div class="loginbox clearfix onecolumn">
	<div class="loginpanel">
		<h2>Login</h2>
		<div class="subcontent loginsub">
			<form action="<?php echo $CFG->httpswwwroot; ?>/login/index.php" method="post" id="login">
				<div class="loginform">
					<div class="form-label"><label for="username">Username</label></div>
                    <div class="form-input">
                      	<input type="text" name="username" id="username" size="30" />
                    </div>

                    <div class="clearer"><!-- --></div>

                    <div class="form-label"><label for="password">Password</label></div>
                    <div class="form-input">
                      	<input type="password" name="password" id="password" size="30" value="" />
                    </div>

                    <div class="clearer"><!-- --></div>

					<div class="form-input">
						<input type="hidden" name="logintoken" value="<?php echo s(\core\session\manager::get_login_token()); ?>" />
						<input type="submit" id="loginbtn" value="Login" />
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php

echo $OUTPUT->footer();
