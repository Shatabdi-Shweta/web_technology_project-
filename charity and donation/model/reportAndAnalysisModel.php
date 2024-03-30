<?php
    require_once('db.php');

function show_donor_details(){
    $conn = dbConnection();
    $sql = "select * from donor_details";
    $result = mysqli_query($conn,$sql);
    
    $donors= [];

    while($donor = mysqli_fetch_assoc($result)){
        array_push($donors, $donor);
    }

    return $donors;
}

function show_campaign_list(){
    $conn = dbConnection();
    $sql = "select * from campaign_performances";
    $result = mysqli_query($conn,$sql);
    $campaigns = [];
    while($campaign = mysqli_fetch_assoc($result)){
        array_push($campaigns,$campaign);
    }
    return $campaigns;
}
?>