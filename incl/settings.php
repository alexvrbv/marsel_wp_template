<?php
class ControlPanel {

var $options;

function ControlPanel() {
	add_action('admin_menu', array(&$this, 'add_menu'));
	if (!is_array(get_option('themadmin')))
	add_option('themadmin', $this->default_settings);
	$this->options = get_option('themadmin');
}

function add_menu() {
	add_theme_page('Настройки контакты', 'Контакты', 8, "themadmin", array(&$this, 'optionsmenu'));
}

 // Сохраняем значения формы с настройками 
function optionsmenu() {
	if ($_POST['ss_action'] == 'save') {
	$this->options["contact1_name"] = $_POST['contact1_name'];
	$this->options["contact1_phone"] = $_POST['contact1_phone'];
	$this->options["contact1_email"] = $_POST['contact1_email'];
	$this->options["contact2_name"] = $_POST['contact2_name'];
	$this->options["contact2_phone"] = $_POST['contact2_phone'];
	$this->options["contact2_email"] = $_POST['contact2_email'];
	$this->options["marsel_vk"] = $_POST['marsel_vk'];
	$this->options["marsel_tw"] = $_POST['marsel_tw'];
	$this->options["marsel_yt"] = $_POST['marsel_yt'];
	$this->options["marsel_fb"] = $_POST['marsel_fb'];
	$this->options["marsel_insta"] = $_POST['marsel_insta'];	
	update_option('themadmin', $this->options);
	echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 400px; margin-left: 17px; margin-top: 17px;"><p>Ваши изменения <strong>сохранены</strong>.</p></div>';
 }
 // Создаем форму для настроек
 echo '<form action="" method="post" class="themeform">';
 echo '<input type="hidden" id="ss_action" name="ss_action" value="save">';

 print '<h1>Настройки контактных данных</h1>
 <br />
<h3>Контакт 1</h3>
<p><label>Название контакта 1</label><br/><input placeholder="Название контакта 1" style="width:300px;" name="contact1_name" id="contact1_name" value="'.$this->options["contact1_name"].'"></p>
<p><label>Телефон контакта 1</label><br/><input placeholder="Телефон контакта 1" style="width:300px;" name="contact1_phone" id="contact1_phone" value="'.$this->options["contact1_phone"].'"></p>
<p><label>Email контакта 1</label><br/><input placeholder="Email контакта 1" style="width:300px;" name="contact1_email" id="contact1_email" value="'.$this->options["contact1_email"].'"></p>
<br/>
<h3>Контакт 2</h3>
<p><label>Название контакта 2</label><br/><input placeholder="Название контакта 2" style="width:300px;" name="contact2_name" id="contact2_name" value="'.$this->options["contact2_name"].'"></p>
<p><label>Телефон контакта 2</label><br/><input placeholder="Телефон контакта 2" style="width:300px;" name="contact2_phone" id="contact2_phone" value="'.$this->options["contact2_phone"].'"></p>
<p><label>Email контакта 2</label><br/><input placeholder="Email контакта 2" style="width:300px;" name="contact2_email" id="contact2_email" value="'.$this->options["contact2_email"].'"></p>
<br/>
<h3>Социальные сети</h3>
<p><label>Ссылка на Вконтакте</label><br/><input placeholder="http://" style="width:300px;" name="marsel_vk" id="marsel_vk" value="'.$this->options["marsel_vk"].'"></p>
<p><label>Ссылка на Twitter</label><br/><input placeholder="http://" style="width:300px;" name="marsel_tw" id="marsel_tw" value="'.$this->options["marsel_tw"].'"></p>
<p><label>Ссылка на YouTube</label><br/><input placeholder="http://" style="width:300px;" name="marsel_yt" id="marsel_yt" value="'.$this->options["marsel_yt"].'"></p>
<p><label>Ссылка на Facebook</label><br/><input placeholder="http://" style="width:300px;" name="marsel_fb" id="marsel_fb" value="'.$this->options["marsel_fb"].'"></p>
<p><label>Ссылка на Instagram</label><br/><input placeholder="http://" style="width:300px;" name="marsel_insta" id="marsel_insta" value="'.$this->options["marsel_insta"].'"></p>
<br />';

 echo '<input type="submit" value="Сохранить" name="cp_save" class="dochanges" />';
 echo '</form>';
 }
}
$cpanel = new ControlPanel();
$settings = get_option('themadmin');
?>