<?php echo "Silence is golden";


if($update->message->text == '/salutami') {
	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$response = $client->sendMessage(['chat_id' => $update->message->chat->id,
			'text' => "Ciao, come stai?"
	]);
}

?>
