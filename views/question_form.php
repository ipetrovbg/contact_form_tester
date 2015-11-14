<?php
echo form_open('question/add_question_info');
?>

<div>
	<?php 	
//input type=text
	//INSERT

	echo form_label('from');

	$data_sender = array(
		'name' => 'sender',	
		'value' => set_value('sender'),
		'placeholder' => 'from',			

		);
	echo '<p>'.form_error('sender').'</p>';
	echo '<p>'.form_input($data_sender).'</p>';
	?>
</div>
<div>
<?php 	
//input type=text
	//INSERT

	echo form_label('email');

	$data_email = array(
		
		'name' => 'email',	
		'value' => set_value('email'),
		'placeholder' => 'email',			

		);
	echo '<p>'.form_error('email').'</p>';
	echo '<p>'.form_input($data_email).'</p>';
	?>
</div>
<div>
	<?php 	
//
	echo form_label('select category');

	foreach ($all_topics as $topic) {
		$topic_options[$topic['topic_id']] = $topic['topic'];
			}
			/*echo "<pre>";
			var_dump($topic_options);
			echo "</pre>";*/
			$topic_value = $this->input->post('topic');
	echo '<p>'.form_error('topic').'</p>';
	echo form_dropdown('topic', $topic_options, set_value('test', ( ( !empty($topic_value) ) ? "$topic_value" : 0 ) ));
	?>
</div>
<div>
	<?php 	
//input type=text
	//INSERT d%

	echo form_label('topic');

	$data_topic = array(
		'class' => 'form-control',	
		'name' => 'theme',
		'value' => set_value('theme'),	
		'placeholder' => 'topic',			

		);
	echo '<p>'.form_error('theme').'</p>';
	echo '<p>'.form_input($data_topic).'</p>';
	?>
</div>
<div class="form-group">
	<?php 	

	echo form_label('content');

	$data_content = array(
		'class' => 'form-control',	
		'name' => 'content',
		'value' => set_value('content'),	
		'placeholder' => 'content',			

		);
	echo '<p>'.form_error('content').'</p>';
	echo '<p>'.form_input($data_content).'</p>';

	echo form_hidden('string', random_string('alnum', 8));
	?>
</div>
<div class="form-group">

<?php

//submit button
$test_btn = array(
	'class' => 'btn btn-info', 
	'name' => 'submit',
	'value' => 'submit'
	);

echo form_submit($test_btn);
?>
</div>
<?php

echo form_close();