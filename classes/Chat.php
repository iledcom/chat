<?php

class Chat {
	public function sendHeaders($headersText){
		$headers = array();
		$tmpLine = preg_split("/\r\n/", $headersText);

		foreach ($tmpLine as $line) {
			$line = rtrim($line);
			if (preg_match('/\A(\S+): (.*)\z/', $line, $matches)) {
				$headers[$matches[0]] = $matches[1];
			}
		}

		$key = $headers['Sec-WebSocket-Key'];
		$sKey = base64_encode(pack('H*', sha1($key . '258EAFA5-E914-47DA-95CA-C5AB0DC85B11')));

		$strHeader = "";
	}
}