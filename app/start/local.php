<?php

Form::macro('languageDropDown', function($selected)
{
    //return Form::select('lang', array('ru' => 'Русский', 'et' => 'Eesti'), $selected);
    return
    "<label class=\"radio-inline\"><input type=\"radio\" name=\"lang\" id=\"ru\" value=\"ru\"" . ($selected == 'ru' ? 'checked' : '') . ">Русский</label> " .
    "<label class=\"radio-inline\"><input type=\"radio\" name=\"lang\" id=\"et\" value=\"et\"" . ($selected == 'et' ? 'checked' : '')  . ">Eesti</label>";
});