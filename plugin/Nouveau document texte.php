<?php
/*
Plugin Name:Contact
Description:This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author:khadija
Version:1.7.2
*/
function form () {
    $info= '';
    $info.= '<form method="post" action="#">';

    $info.= '<input type="text" name="name" placeholder="Name"><br>';

    $info.= '<input type="email" name="email" placeholder="Email">';

    $info.= '<textarea name="message" placeholder="Message"></textarea>';

    $info.= '<input type="submit" name="submit" value="Submit">';

    $info.= '</form>';

    return  $info ; 


}
add_shortcode('example_plugin', 'form');

function example_form_capture()
{
    if (isset($_POST['submit'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_text_field($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'khadijalahmar8@gmail.com';
        $subject = 'Test form submission';
        $mesag = ''.$name.' - '.$email.' - '.$message;

        wp_mail($to,$subject,$mesag);

    }
}
// add_shortcode('hello', 'exampl_form_plugin');
// function form (){
//     $info='';
//     $info.='<h2> contact </h2>';
//     // $info.='<label for="name_">Name </label>';
//     // $info.='<input></>';
   
// }