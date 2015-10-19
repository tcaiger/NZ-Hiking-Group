<?php  

Class boardController {

	public function readBoard(){
		$params = json_decode(file_get_contents('php://input'),true);
		$board = new Board_Collection();
		$board->order_by('id');
		$board->where('deleted', '0');
		$board->get();
		header('Content-Type: application/json');
		echo ($board);
	}
}