<?php
    include "../partials/header.php";
?>


    <div class="main container">
        <div class="row justify-content-center mt-3">
            <img src="../../images/my-family/my-family.svg" class="img-fluid">
        </div>

        <div class="row mt-3">
            <div class="col">
                <img src="../../images/my-family/exercise-01.png" class="img-fluid mx-auto d-block">
            </div>
        </div>
    </div>


<div class="footer-questions">
    <div class="row justify-content-center mt-4">
        <p>When I</p>
        <select class="mr-2 ml-2" id="question">
            <option selected>Choose...</option>
            <option value="1">look at</option>
            <option value="2">see at</option>
            <option value="3">look</option>
            <option value="4">watch</option>
        </select>
        <p>the old tree with nine branches in our yard, I remember the members of my family.</p>
    </div>
    <div class="row mt-2">
        <div id="result" class="ml-auto text-white p-2"></div>
    </div>
    <div class="row mt-2">
        <input class="btn btn-outline-info" type="submit" value="Submit" id="submit1"><a
            class="btn btn-outline-dark ml-auto" href="03.php" role="button">next</a>
    </div>

 
</div>



