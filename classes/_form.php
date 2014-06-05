<?php 

class form{

	private $form_action;
	private $form_method;
	private $form_ID;
	private $error_msg;
	//SETTERS
	function set_form_action($var){
		$this->action = $var;
	}
	function set_form_method($var){
		$this->method = $var;
	}
	function set_form_ID($var){
		$this->form_ID = $var;
	}
	function set_error_msg($var){
		$this->error_msg = $var;
	}
	//GETTERS
	function get_form_action(){
		return $this->action;
	}
	function get_form_method(){
		return $this->method;
	}
	function get_form_ID(){
		return $this->form_ID;
	}
	function get_error_msg(){
		return $this->error_msg;
	}

	//methods

	function jsCheck(){
		$id = $this->get_form_ID();
		$str = <<<EOD
		<script>
		$(document).ready(function(){

			$('<input>').attr({
    			type: 'hidden',
    			name: 'JQcheck',
  				value: 'hasJQ'})
			.appendTo('form#$id');

			$('#$id').validate();
		});
		</script>
EOD;
		echo $str;
	}

	function jsError(){
		if (isset($_GET)) {
			echo $this->error_msg;
		}
	}

	function start_form(){
		echo '<form action="'.$this->get_action().'" method="'.$this->get_method().'" id="'.$this->get_form_ID().'">';
	}

}//END form class

//---------------process----------
class process_form{

	//form settings
	private $form_page;
	private $next_page;
	private $jsCheck_ok = false;
	private $good_to_go = false;
	//auto set
	private $query_string; 
	private $server_dir;
	//message variables
	private $mail_user_name;
	private $mail_user_email;
	private $mail_to;
	private $mail_cc;
	private $mail_bcc;
	private $mail_subject;
	private $mail_body;
	private $mail_headers;

	function __construct(){
		$this->server_dir = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
		header('HTTP/1.1 303 See Other');
	}
	//SETTERS
	function set_name($var){
		$this->mail_user_name = trim($_POST[$var]);
		$this->query_string = '?name=' . $this->mail_user_name;
	}
	function set_form_page($var){
		$this->form_page = $var;
	}
	function set_next_page($var){
		$this->next_page = $var;
	}
	function set_mail_user_email($var){
		$this->mail_user_email = strip_tags($_POST[$var]);
	}
	function set_mail_to($var){
		$this->mail_to = $_POST[$var];
	}
	function set_mail_cc($var){
		$this->mail_cc = $var;
	}
	function set_mail_bcc($var){
		$this->mail_bcc = $var;
	}
	function set_mail_subject($var){
		$this->mail_subject = $_POST[$var];
	}
	function set_mail_body($var){
		$this->mail_body = $var;
	}
	//GETTERS
	function get_mail_user_name(){
		return $this->mail_user_name;
	}
	function get_query_string(){
		return $this->query_string;
	}
	function get_form_page($var){
		return $this->form_page;
	}
	function get_next_page(){
		return $this->next_page;
	}
	function get_mail_user_email(){
		return $this->mail_user_email;
	}
	function get_mail_to(){
		return $this->mail_to;
	}
	function get_mail_cc(){
		return $this->mail_cc;
	}
	function get_mail_bcc(){
		return $this->mail_bcc;
	}
	function get_mail_subject(){
		return $this->mail_subject;
	}
	function get_mail_body(){
		return $this->mail_body;
	}
	function get_mail_headers(){
		return $this->mail_headers;
	}

//start();
	function parse_jsCheck(){
		if (!isset($_POST['JQcheck'])){
  		$this->query_string .= '&error=nojava';
  		// redirect to contact page
  		header('Location: http://' . $this->get_server_dir() . $this->get_form_page() . $this->get_query_string());
		}else{ $this->jsCheck_ok = true; }
	}

//set_mail_body();
	function mail_body(){
		if (is_array($_POST) && $jsCheck_ok == true) {
			return $this->mail_body;
			$this->good_to_go = true;
		}
	}

//mail_send();
	function mail_send(){
		if ($this->good_to_go == true) {
			$this->mail_headers = "From: " . $this->get_mail_user_name() . "\r\n";
			$this->mail_headers .= "To:" . $this->get_mail_to;
			$this->mail_headers .= "Reply-To: ". $this->get_mail_user_email() . "\r\n";

			if(isset($this->mail_cc)){
				$mail_headers .= "CC: " . $this->get_mail_cc() . "\r\n";
			}
			
			if (isset($this->mail_bcc)) {
				$mail_headers .= "BCC: " . $this->get_mail_bcc() . "\r\n";
			}

			$this->mail_headers .= "MIME-Version: 1.0\r\n";
			$this->mail_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			mail($this->get_mail_to(), $this->get_mail_subject(), $this->get_mail_body(), $this->get_mail_headers());

			header('Location: http://' . $server_dir . $next_page . $query_string);
		}	
	}

}//END process class
?>