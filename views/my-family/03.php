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
                <img src="../../images/my-family/exercise-02.png" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <p>Sometimes, I</p>

            <select class="mr-2 ml-2" id="question">
                <option selected>Choose...</option>
                <option value="1">Look up</option>
                <option value="2">Look after</option>
                <option value="3">Look for</option>
                <option value="4">Look forward</option>
            </select>


            <p>serenity by reading books.</p>
        </div>

        <div class="row mt-2">
            <div id="result" class="ml-auto text-white p-2"></div>
        </div>

        <div class="row mt-2" id="q-2">
            <input class="btn btn-outline-info" type="submit" value="Submit" id="submit2"><a
                class="btn btn-outline-dark ml-auto" href="04.php" role="button">next</a>
        </div>
    </div>
</div>

<?php
    include "../partials/footer.php";
?>

