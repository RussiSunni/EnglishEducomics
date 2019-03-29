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
                <img src="../../images/my-family/exercise-03.png" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <p>Many people say I</p>

            <select class="mr-2 ml-2" id="question">
                <option selected>Choose...</option>
                <option value="1">take down</option>
                <option value="2">take away</option>
                <option value="3">take back</option>
                <option value="4">take after</option>
            </select>


            <p>my mom in terms of appearance.</p>
        </div>

        <div class="row mt-2">
            <div id="result" class="ml-auto text-white p-2"></div>
        </div>

        <div class="row mt-2" id="q-3">
            <input class="btn btn-outline-info" type="submit" value="Submit" id="submit3"><a
                class="btn btn-outline-dark ml-auto" href="05.php" role="button">next</a>
        </div>
    </div>
</div>

<?php
    include "../partials/footer.php";
?>

