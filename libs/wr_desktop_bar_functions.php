<?php



function wr_deskop_bar_shortcode() {

    global $wr_desktop_bar;


        $align_bar;
        if ($wr_desktop_bar['align'] == 'lewa') { 
            $align_bar = 'left:20px';
        } else if ($wr_desktop_bar['align'] == 'prawa') { 
            $align_bar = 'right:20px';
        }

        $wr_desktop_bar_tel;
        if ($wr_desktop_bar['tel_button'] == '1') {
            $wr_desktop_bar_tel =  'display:block;';
        } else if ($wr_desktop_bar['tel_button'] == '0') {
            $wr_desktop_bar_tel =  'display:none;';
        }

        $wr_desktop_bar_email;
        if ($wr_desktop_bar['email_button'] == '1') {
            $wr_desktop_bar_email = 'display:block;';
        } else if ($wr_desktop_bar['email_button'] == '0') {
            $wr_desktop_bar_email = 'display:none;';
        }          


        if ($pd_google_map['scroll_wheel'] == '1') { echo 'true'; }

    $string ='<a style="' . $wr_desktop_bar_tel . $align_bar . ';" href="' . $wr_desktop_bar['tel_href'] . '" class="wr-desktop-bar-btn wr-desktop-bar-btn--phone">';
    $string .='<button style="background-color:' . $wr_desktop_bar['tel_btn_color'] . ';" class="fixedButton ring-btn" id="zamow-rozmowe-btn">';
    $string .='<i class="' . $wr_desktop_bar['tel_ikona'] . '"></i>';
    $string .='</button>';                   
    $string .='<span style="border:4px solid ' . $wr_desktop_bar['tel_btn_color'] . ';" class="pulse-ring"></span>';
    $string .='</a>';
    $string .='<a style="' . $wr_desktop_bar_email . $align_bar . ';" href="' . $wr_desktop_bar['email_href'] . '" class="wr-desktop-bar-btn wr-desktop-bar-btn--email">';
    $string .='<button style="background-color:' . $wr_desktop_bar['email_btn_color'] . ';" class="fixedButton ring-btn" id="zamow-rozmowe-btn">';
    $string .='<i class="' . $wr_desktop_bar['email_ikona'] . '"></i>';
    $string .='</button>';                   
    $string .='<span style="border:4px solid ' . $wr_desktop_bar['email_btn_color'] . ';" class="pulse-ring"></span>';
    $string .='</a>';    

    return $string;

}

add_shortcode('wr_desktop_bar', 'wr_deskop_bar_shortcode');
