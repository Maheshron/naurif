<?php

include ("./includes/db.php");

include("../functions/functions.php");

// Sub-Categories based on Main Category

if(isset($_POST['categoryId'])) {
    
    $categoryId = $_POST['categoryId'];
    
    echo "<option>Select Sub Category</option>";
    
    $res = mysqli_query($con, "select * from " . product_categories . " WHERE catid = $categoryId and parent=0 order by catid asc");
    
    while ($data = mysqli_fetch_array($res)) {
        
        echo "<option value='" . $data['p_cat_id'] . "'>" . $data['p_cat_title']. "</option>";
    }
    
}else{
    
    // Parent-Categories based on Main Category
    
    $subcategoryId = $_POST['subcategoryId'];
    
    echo "<option>Select Product Category </option>";
    
    $res = mysqli_query($con, "select * from " . product_categories . " WHERE catid = $subcategoryId and parent!=0   ");
    
    while ($data = mysqli_fetch_array($res)) {
        
        echo "<option value='" . $data['p_cat_id'] . "'>" . $data['p_cat_title'] . "</option>";
    }
    
}

?>