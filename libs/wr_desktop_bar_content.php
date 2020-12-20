<?php

function wr_desktop_bar_settings() {

    add_options_page(
        'Desktop Bar',
        'Desktop Bar',
        'manage_options',
        'wr_desktop_bar_options',
        'wr_desktop_print_content'
    );

}

add_action('admin_menu', 'wr_desktop_bar_settings');



function wr_desktop_print_content() { ?>


<?php global $wr_desktop_bar; ?>


<form action="options.php" method="post" class="form" id="lte-fn-form-2">
    
    <?php settings_fields('wr_desktop_bar_options_group'); ?>
        
	<h2 style="font-size: 30px;">Desktop Bar</h2>

        
	<table class="form-table" role="presentation">
		<tbody>
			<h3>Ustawienia: </h3>
			<tr>
				<th scope="row">Po której stronie ma być Desktop Bar? :</th>
				<td>
					<fieldset>           
						<label>
							<select name="wr_desktop_bar_options[align]">
								<option value="lewa" <?php if($wr_desktop_bar['align'] == 'lewa') { echo "selected='selected'"; } ?>>Lewa</option>
								<option value="prawa"<?php if($wr_desktop_bar['align'] == 'prawa') { echo "selected='selected'"; } ?>>Prawa</option>
							</select>
						</label><br>
					</fieldset>                    
				</td>
			</tr>
			<tr>
					<th scope="row">Telefon Button: </th>
					<td>
						<fieldset class="tel_button_visibility">
							<input name="wr_desktop_bar_options[tel_button]" type="hidden" value="0">
							<input name="wr_desktop_bar_options[tel_button]" type="checkbox" value="1" <?php checked('1', $wr_desktop_bar['tel_button']); ?>>
						</fieldset>                   
					</td>
				</tr>     
				<tr>
					<th scope="row">E-mail Button :</th>
					<td>
						<fieldset>
							<input name="wr_desktop_bar_options[email_button]" type="hidden" value="0">
							<input name="wr_desktop_bar_options[email_button]" type="checkbox" value="1" <?php checked('1', $wr_desktop_bar['email_button']); ?>>
						</fieldset>                   
					</td>
				</tr>		
		</tbody>		
		<tbody class="wr-phone">
			<tr>
				<td>
					<h3>Telefon Button: </h3>
				</td>
			<tr>
			<tr>
				<th scope="row"><label for="blogname">Ikona :</label></th>
				<td>                        
                    <input class="pd-klucz-api" name="wr_desktop_bar_options[tel_ikona]" type="text" value="<?php echo $wr_desktop_bar['tel_ikona']; ?>">
                </td>
			</tr>
			<tr>
				<th scope="row"><label for="siteurl">Link href :</label></th>
				<td>                        
                    <input name="wr_desktop_bar_options[tel_href]" type="text" value="<?php echo $wr_desktop_bar['tel_href']; ?>">
                </td>
			</tr>
			<tr>
				<th scope="row"><label>kolor buttona :</label></th>
				<td>
                        <input name="wr_desktop_bar_options[tel_btn_color]" type="text" value="<?php echo $wr_desktop_bar['tel_btn_color']; ?>">
				</td>
			</tr>        

		</tbody>

		<tbody>
			<tr>
				<td>
					<h3>E-mail Button: </h3>
				</td>
			<tr>
			<tr>
				<th scope="row"><label>Ikona :</label></th>
				<td>                        
                    <input name="wr_desktop_bar_options[email_ikona]" type="text" value="<?php echo $wr_desktop_bar['email_ikona']; ?>">
                </td>
			</tr>
			<tr>
				<th scope="row"><label>Link href :</label></th>
				<td>                        
                    <input name="wr_desktop_bar_options[email_href]" type="text" value="<?php echo $wr_desktop_bar['email_href']; ?>">
                </td>
			</tr>
			<tr>
				<th scope="row"><label>kolor buttona :</label></th>
				<td>
                        <input name="wr_desktop_bar_options[email_btn_color]" type="text" value="<?php echo $wr_desktop_bar['email_btn_color']; ?>">
				</td>
			</tr>        

		</tbody>		
	</table>   
    
    
    <input type="submit" value="Zapisz">

</form>   



<?php }