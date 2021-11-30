<?php
/**
 * Created by Edison A.
 * Date: 5/24/16
 */

/** @var $form Form */

echo form_open('Invoice/edison');
echo 'To';
echo '<br />';
echo form_textarea($form->getToData());
echo '<br />';

echo 'From';
echo '<br />';
echo form_textarea($form->getFromData());
echo '<br />';

echo 'Date';
echo '</br >';
echo form_input($form->getDateData());
echo '<br />';

echo 'Due Date';
echo '<br />';
echo form_input($form->getDueDateData());
echo '<br />';

echo 'Item';
echo '<br />';
echo form_input($form->getItemData());
echo '<br />';

echo 'Quantity';
echo '<br />';
echo form_input($form->getQuantityData());
echo '<br />';

echo 'Rate';
echo '<br />';
echo form_input($form->getRateData());
echo '<br />';

echo 'Notes';
echo '<br />';
echo form_textarea($form->getNotesData());
echo '<br />';

echo 'Terms';
echo '<br />';
echo form_textarea($form->getTermsData());
echo '<br />';

echo form_close();
