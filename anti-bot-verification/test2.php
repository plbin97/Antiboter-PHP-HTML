<!DOCTYPE HTML>
<html>
<head>
    <style>
        .droptarget {
            float: left;
            width: 100px;
            height: 35px;
            margin: 15px;
            padding: 10px;
            border: 1px solid #aaaaaa;
        }
    </style>
</head>
<body>

<p>Drag the p element back and forth between the two rectangles:</p>

<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
    <p ondragstart="dragStart(event)" ondragend="dragEnd(event)" draggable="true" id="dragtarget">Drag me!</p>
</div>

<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<p style="clear:both;"><strong>Note:</strong> drag events are not supported in Internet Explorer 8 and earlier versions or Safari 5.1 and earlier versions.</p>

<p id="demo"></p>

<script>
    function dragStart(event) {
        event.dataTransfer.setData("Text", event.target.id);
        document.getElementById("demo").innerHTML = "Started to drag the p element";
        document.getElementById("dragtarget").setAttribute("style","opacity: 0");
    }

    function dragEnd(event) {
        document.getElementById("demo").innerHTML = "Finished dragging the p element.";
        document.getElementById("dragtarget").setAttribute("style","opacity: 1");
    }

    function allowDrop(event) {
        event.preventDefault();
    }

    function drop(event) {
        event.preventDefault();
        var data = event.dataTransfer.getData("Text");
        event.target.appendChild(document.getElementById(data));
    }
</script>

</body>
</html>