<?php
public function index() {
$products = Content::all();
return view('content', compact('content'));
}
?>
