<?php

//submit_rating.php
date_default_timezone_set("Asia/Kuala_Lumpur");


$connect = new PDO("mysql:host=localhost;dbname=messages", "root", "");

if(isset($_POST["rating_data"]))
{

	$data = array(
		':pusername'		=>	$_POST["pusername"],
		':rating'		=>	$_POST["rating_data"],
		':comment'		=>	$_POST["comment"],
		':first_name'		=>	$_POST["first_name"],
		':last_name'		=>	$_POST["last_name"],
		':datetime'			=>	time()
	);

	$query = "
	INSERT INTO feedback_service 
	(pusername, rating, comment,first_name, last_name, datetime) 
	VALUES (:pusername, :rating, :comment,:first_name,:last_name, :datetime)
	";

	$statement = $connect->prepare($query);

	$statement->execute($data);

	echo "Your Review & Rating Successfully Submitted";

}

if(isset($_POST["action"]))
{
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();

	$query = "
	SELECT * FROM feedback_service 
	ORDER BY id DESC
	";

	$result = $connect->query($query, PDO::FETCH_ASSOC);

	foreach($result as $row)
	{
		$review_content[] = array(
			'pusername'		=>	$row["pusername"],
			'comment'	=>	$row["comment"],
			'rating'		=>	$row["rating"],
			'first_name'		=>	$row["first_name"],
			'last_name'		=>	$row["last_name"],
			'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
		);

		if($row["rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["rating"];

	}

	$average_rating = $total_user_rating / $total_review;

	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);

	echo json_encode($output);

}

?>