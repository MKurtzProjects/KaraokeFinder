<html>
<head>
<title>Insert Data Into Database Using CodeIgniter Form</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/css/styles.css"/>
</head>
<body>

<div id="container">
<?php ini_set('display_errors', 1); $this->load->helper('form'); echo form_open('new_event'); ?>
<h1>Insert Data Into Database Using CodeIgniter</h1>
<?php echo form_label('Event Type :'); ?> <?php echo form_error('dname'); ?>
<?php echo form_input(array('id' => 'dname', 'event_type' => 'dname')); ?>
<?php echo form_label('Student Email :'); ?> <?php echo form_error('demail'); ?>
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?>
<?php echo form_label('Student Mobile No. :'); ?> <?php echo form_error('dmobile'); ?>
<?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile','placeholder'=>'10 Digit Mobile No.')); ?>
<?php echo form_label('Student Address :'); ?> <?php echo form_error('daddress'); ?>
<?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit'));?>
<?php echo form_close(); ?>
</div>
</body>
</html>