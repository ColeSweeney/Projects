<?php
$conn = new PDO("mysql:host=db.luddy.indiana.edu;dbname=i494f23_team21", "i494f23_team21", "my+sql=i494f23_team21");

if(isset($_POST["rating_data"]))
{
  $data = array(
    ':user_name'    => $_POST["user_name"],
    ':user_rating'  => $_POST["rating_data"],
    ':user_review'  => $_POST["user_review"],
    ':datetime'     => time(),
    ':location_id'  => $_POST["location_id"]
  );

  $query = "INSERT INTO review_table (user_name, user_rating, user_review, datetime, location_id)
            VALUES (:user_name, :user_rating, :user_review, :datetime, :location_id)";

  $statement = $conn->prepare($query);
  $statement->execute($data);

  echo "Your Review & Rating Successfully Submitted";
}

if(isset($_POST["action"]) && $_POST["action"] == 'load_data')
{
  $location_id = $_POST["location_id"];

  $query = "SELECT * FROM review_table WHERE location_id = :location_id ORDER BY review_id DESC";
  $statement = $conn->prepare($query);
  $statement->bindParam(':location_id', $location_id);
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);

  $average_rating = 0;
  $total_review = 0;
  $five_star_review = 0;
  $four_star_review = 0;
  $three_star_review = 0;
  $two_star_review = 0;
  $one_star_review = 0;
  $total_user_rating = 0;
  $review_content = array();

  foreach($result as $row)
  {
    $review_content[] = array(
      'user_name'   => $row["user_name"],
      'user_review' => $row["user_review"],
      'rating'      => $row["user_rating"],
      'datetime'    => date('l jS, F Y h:i:s A', $row["datetime"])
    );

    if($row["user_rating"] == '5')
    {
      $five_star_review++;
    }

    if($row["user_rating"] == '4')
    {
      $four_star_review++;
    }

    if($row["user_rating"] == '3')
    {
      $three_star_review++;
    }

    if($row["user_rating"] == '2')
    {
      $two_star_review++;
    }

    if($row["user_rating"] == '1')
    {
      $one_star_review++;
    }

    $total_review++;
    $total_user_rating = $total_user_rating + $row["user_rating"];
  }

  $average_rating = $total_user_rating / $total_review;

  $output = array(
    'average_rating'    => number_format($average_rating, 1),
    'total_review'      => $total_review,
    'five_star_review'  => $five_star_review,
    'four_star_review'  => $four_star_review,
    'three_star_review' => $three_star_review,
    'two_star_review'   => $two_star_review,
    'one_star_review'   => $one_star_review,
    'review_data'       => $review_content
  );

  echo json_encode($output);
}
?>