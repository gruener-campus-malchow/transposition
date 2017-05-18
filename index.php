<?php
session_start();

class transposition
{
	public function __construct()
	{
		
		
	}
	
	private function prepareText($text) 
	{
		$text = str_replace(' ','',$text);
		$upper = strtoupper($text);
		
		
	}
	
	private function createForm()
	{
		$html = '
			<html>
				<head>
					 <style>
						table, th, td
						{
							border: 1px solid black;
							border-collapse: collapse;
						}
						.error
						{
							border: 2px solid red;
						}
						.noborder
						{
							border-style: none;
							border-collapse: collapse;
						}
					</style>
					<title>Transposition</title>
			
				</head>
				<body>
				<form action="index.php" method="get">
					<h2>Klartext</h2>
					<textarea>foooooo</textarea>
					<h2>Schlüssel</h2>
					<input type="submit" value="crypt" name="crypt">
					<h2>Matrix</h2>
					fooo
					<h2>Verschlüsselter Text</h2>
					<textarea>foooooo</textarea>
				</form></body></html>';

	}



}