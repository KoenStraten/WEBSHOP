<?php

class Review
{

    private $text;
    private $rating;
    private $title;
    private $customer;
    private $product_id;
    
    function __construct($dbReview)
    {
        $this->text = $dbReview->text;
        $this->rating = $dbReview->rating;
        $this->title = $dbReview->title;
        $this->customer = $dbReview->text;
        // find customer by id
        $this->product_id = $dbReview->product_id;  
    }
}
?>