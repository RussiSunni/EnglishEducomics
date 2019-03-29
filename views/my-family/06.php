<?php
    include "../partials/header.php";
?>

<div class="content">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <img src="../../images/my-family/my-family.svg" class="img-fluid">
        </div>

        <div class="row mt-3">
            <div class="col">
                <img src="../../images/my-family/exercise-05.png" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <p>I was</p>

            <select class="mr-2 ml-2" id="question">
                <option selected>Choose...</option>
                <option value="1">brought up</option>
                <option value="2">brought down</option>
                <option value="3">brought back</option>
                <option value="4">brought foward</option>
            </select>


            <p>in a humble small family.</p>
        </div>


        <div class="row mt-2">
            <div id="result" class="ml-auto text-white p-2"></div>
           
        </div>


        <div class="row mt-2" id="q-5">
            <input class="btn btn-outline-info" type="submit" value="Submit" id="submit5"><a
                class="btn btn-outline-dark ml-auto" href="07.php" role="button">next</a>
        </div>

        
    </div>
</div>

 
<?php
    include "../partials/footer.php";
?>

