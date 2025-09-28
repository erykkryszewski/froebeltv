<?php

add_action("woocommerce_register_form", "add_registration_privacy_policy", 11);

function add_registration_privacy_policy()
{
    woocommerce_form_field("privacy_policy_reg", [
        "type" =>
"checkbox", "class" => ["form-row privacy"], "label_class" => ["my-account__checkbox-label"], "input_class" => ["my-account__checkbox-input"], "required" => true, "label" => 'Akceptuję &nbsp;
<a href="/polityka-prywatnosci">politykę prywatności</a>
', ]); woocommerce_form_field("terms_reg", [ "type" => "checkbox", "class" => ["form-row privacy"], "label_class" => ["my-account__checkbox-label"], "input_class" => ["my-account__checkbox-input"], "required" => true, "label" =>
'Akceptuję&nbsp;
<a href="/regulamin">regulamin</a>
', ]); } add_filter("woocommerce_registration_errors", "validate_privacy_registration", 10, 3); function validate_privacy_registration($errors, $username, $email) { if (!is_checkout()) { if (!(int) isset($_POST["privacy_policy_reg"]) ||
!(int) isset($_POST["terms_reg"])) { $errors->add( "privacy_policy_reg_error", __("Zaakceptuj politykę prywatności i regulamin, aby przejść dalej", "woocommerce"), ); } } return $errors; }
