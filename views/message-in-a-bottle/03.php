
<?php
include "../partials/header.php";
?>



<div class="main container">
    <div class="row justify-content-center mt-3">
        <img src="../../images/message-in-a-bottle/message-in-a-bottle.svg" class="img-fluid">
    </div>

    <div class="row mt-3">
        <div class="col">
            <img src="../../images/message-in-a-bottle/lesson-page-2.png" class="img-fluid mx-auto d-block">
        </div>
        <div class="col">
             <div class="placeholder" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="placeholder" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="placeholder" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="placeholder" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="placeholder" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <div class="placeholder" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        </div>
        <div class="col">
            <img src="../../images/message-in-a-bottle/answer-01.jpg" id="drag1" draggable="true" ondragstart="drag(event)" width="336" height="69">
        </div>
    </div>

    <div class="row mt-2">
        <a class="btn btn-outline-dark mx-auto" href="04.php" role="button">next</a>
    </div>
</div>




<?php
    include "../partials/footer.php";
?>

<script>
    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }
</script>

