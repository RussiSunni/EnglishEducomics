<?php
    include "../partials/header.php";
?>

    <div class="main container">
        <div class="row justify-content-center mt-3">
            <img src="../../images/my-family/my-family.svg" class="img-fluid">
        </div>

        <div class="row mt-3">
            <div class="col">
                <img src="../../images/my-family/exercise-04.png" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <p>When I was reading, my sister</p>

            <select class="mr-2 ml-2" id="question">
                <option selected>Choose...</option>
                <option value="1">assailed me</option>
                <option value="2">confronted me</option>
                <option value="3">interrupted me</option>
                <option value="4">mentioned me</option>
            </select>


            <p>, asking me to help her with her homework.</p>
        </div>


        <div class="row mt-2">
            <div id="result" class="ml-auto text-white p-2"></div>
        </div>

        <div class="row mt-2" id="q-4">
            <input class="btn btn-outline-info" type="submit" value="Submit" id="submit4"><a
                class="btn btn-outline-dark ml-auto" href="05.php" role="button">next</a>
        </div>
    </div>

 
<?php
    include "../partials/footer.php";
?>

