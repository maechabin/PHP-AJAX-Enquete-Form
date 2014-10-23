<?php
header("content-type: text/plain; charset=utf-8");

class Enquete {

	const TO = "example@sample.com";
	const SUBJECT = "××××アンケート";
	const HEADER = "from: example@sample.com";

	private $answer;

	private function get_answer() {

		$date = date("Y/n/j H:i:s");
		$answer1 = (isset($_POST["answer1"]) && $_POST["answer1"] != "") ? $_POST["answer1"] : "---";
		$answer2 = (isset($_POST["answer2"]) && $_POST["answer2"] != "") ? $_POST["answer2"] : "---";
		$answer3 = (isset($_POST["answer3"]) && $_POST["answer3"] != "") ? $_POST["answer3"] : "---";
		$this->answer = $date . "\n＜質問1＞\n" . $answer1 . "\n＜質問2＞\n" . $answer2 . "\n＜質問3＞\n" . $answer3. "\n\n";

		$this->put_file();

	}

	private function put_file() {

		$fp = fopen("answer.txt", "a");

		fwrite($fp, $this->answer);
		fclose($fp);

		$this->send_mail();

	}

	private function send_mail() {

		mb_language("Japanese");
		mb_internal_encoding("utf-8");
		mb_send_mail(
			self::TO,
			self::SUBJECT,
			$this->answer,
			self::HEADER
		);

	}

	public function init() {

		$this->get_answer();

	}

}

$enquete = new Enquete();
$enquete->init();
?>