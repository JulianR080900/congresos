<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Calificar ponencias</title>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/utils/Draggable.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>
    <style>
        /* BASIC */
        :root {
            --Releem: #4f30b3;
            --ReleemLigero: #6b42ed;
            --Relayn: #FF9015;
            --RelaynLigero: #FB9E36;
        }

        body {
            background-color: var(--Relayn);
        }


        .box {
            background: white;
            height: 100%;
            width: 70%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /*Button*/
        input[type=button],
        input[type=submit] {
            background-color: var(--Relayn);
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        input[type=button]:hover,
        input[type=submit]:hover {
            background-color: var(--RelaynLigero);
            cursor: pointer;
        }

        input[type=button]:active,
        input[type=submit]:active {
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }

        .order {
            color: var(--Relayn)
        }



        /*Diseño pagina*/

        form {
            position: relative;
        }

        .box-list {
            position: absolute;
            left: 50%;
            width: 100%;
            height: 300px;
            opacity: 1;
            visibility: inherit;
            transform: translate(-50%, -50%);
            cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/106114/cursor.png") 32 32, move;
        }

        .list-item {
            position: absolute;
            top: 0;
            left: 25%;
            height: 90px;
            width: 60%;
        }

        .item-content {
            height: 100%;
            border: 0px solid rgba(123, 123, 123, 0.498039);
            border-radius: 4px;
            color: rgb(103 58 183);
            line-height: 90px;
            padding-left: 32px;
            font-size: 24px;
            font-weight: 400;
            background-color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px 0px;
        }



        /*============== RESPONSIVO ================*/
        @media screen and (max-width: 720px) {
            body {
                background-color: white;
            }

            .box {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                background: white;
                /*height: 100%;*/
                width: 100%;
            }

            form {
                width: 95%;
                height: 100%;
            }

            .box-list {
                margin-top: 30%;
                /*Se da la el margin al la lista de las ponencias para celulares*/
            }
        }

        @media screen and (min-width: 720px) and (max-width: 1280px) {

            .box {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                background: white;
                /*height: 100%;*/
                width: 80%;
            }

            form {
                width: 60%;
                margin: auto;
            }

            .box-list {
                margin-top: 30%;
                /*Se da la el margin al la lista de las ponencias para tablets*/
            }

        }

        @media screen and (min-width: 1280px) {
            .box {
                background: white;
                /*height: 100%;*/
                width: 80%;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }

            .box-list {
                margin-top: 20%;
                /*Se da la el margin al la lista de las ponencias para computadoras*/
            }
        }
        
    </style>
</head>

<body>
    <?php
        $px = ((count($res)+1)*100);
        $margin = ((count($res)+1)*7.5);
        $marginTop = $px+250;
        $height = 100+(count($res)*10);
      ?>
    <div>
        <!--<div class="row justify-content-md-center box">-->
        <div class="row justify-content-md-center">
            <div class="box" style="height: <?php echo $height;?>%"></div>

            <form action="<?php echo base_url('ponencia_calificada');?>" method="POST" class="form"
                id='formularioOrdenamiento'>

                <div class="col-md-auto">
                    <br>

                    <table class="table">
                        <tbody>
                            <div align="center">
                                <p><b>Ordena las ponencias que has evaluado de acuerdo al grado en el que aportan
                                        conocimiento de frontera a su ciencia respectiva:</b></p>
                            </div>

                            <section class="container box-list" style="">
                                <?php
        $i = 1;
        $num_ponencia = 0;
        foreach($res as $r){
            $nombre = $r['nombre'];
            ?>
                                <div class="list-item" style="">
                                    <div class="item-content" style="">
                                        <span class="order"><?php echo $i ?></span><input
                                            style="border: 0;height: 30%; width:90%; font-size: initial;" readonly
                                            type="text" value="<?php echo $nombre; ?>" name="posiciones[]">
                                    </div>
                                </div>
                                <?php
            $i++;
        }
        ?>
                                <?php
                $nombre = session('nombre_ponencia');
        ?>

                                <div class="list-item" style="">
                                    <div class="item-content" style="">
                                        <span class="order"><?php echo $i ?></span><input
                                            style="border: 0;height: 30%; width:90%; font-size: initial;" readonly
                                            type="text" value="<?php echo $nombre; ?>" name="posiciones[]">
                                    </div>
                                </div>
                            </section>

                            <div class="box-comment"
                                style="position:absolute;top:<?php echo $marginTop;?>px;width: 100%;">
                                <div align="center">
                                    <p><b>Escribe un comentario, el cual ayudar&aacute; para calificar de una mejor
                                            manera esta ponencia</b></p>
                                    <textarea name="comentario" id='comentario' rows="4" cols="50" class="form-control"
                                        minlength="20" required></textarea>
                                </div><br>
                                <div class="d-flex justify-content-center">

                                    <!--<button id='submit' class="btn btn-lg btn-block" onclick="confirmarDatos()">Calificar</button>-->
                                    <input type="submit" id='submit' class="btn btn-lg btn-block fadeIn fourth"
                                        value="Siguiente" onclick="confirmarDatos()">


                                </div>
                            </div>
                </div>
            </form>

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script type="text/javascript">
    function confirmarDatos() {
        txt = document.getElementById('comentario').value;
        n = txt.length;
        if (n <= 20) {
            alert('Agradecemos que coloque una retroalimentación breve. (Al menos 20 caracteres)');
            //   e.preventDefault();
            console.log("llenar");
        } else {
            console.log("completo");
            // $("#formularioOrdenamiento").submit();
            // document.getElementById("formularioOrdenamiento").submit();
        }
    }

    var rowSize = 100; // => container height / number of items
    var container = document.querySelector(".container");
    var listItems = Array.from(document.querySelectorAll(".list-item")); // Array of elements
    var sortables = listItems.map(Sortable); // Array of sortables
    var total = sortables.length;

    TweenLite.to(container, 0.5, {
        autoAlpha: 1
    });

    function changeIndex(item, to) {

        // Change position in array
        arrayMove(sortables, item.index, to);

        // Change element's position in DOM. Not always necessary. Just showing how.
        if (to === total - 1) {
            container.appendChild(item.element);
        } else {
            var i = item.index > to ? to : to + 1;
            container.insertBefore(item.element, container.children[i]);
        }

        // Set index for each sortable
        sortables.forEach((sortable, index) => sortable.setIndex(index));
    }

    function Sortable(element, index) {

        var content = element.querySelector(".item-content");
        var order = element.querySelector(".order");

        var animation = TweenLite.to(content, 0.3, {
            boxShadow: "rgba(0,0,0,0.2) 0px 16px 32px 0px",
            force3D: true,
            scale: 1.1,
            paused: true
        });

        var dragger = new Draggable(element, {
            onDragStart: downAction,
            onRelease: upAction,
            onDrag: dragAction,
            cursor: "inherit",
            type: "y"
        });

        // Public properties and methods
        var sortable = {
            dragger: dragger,
            element: element,
            index: index,
            setIndex: setIndex
        };

        TweenLite.set(element, {
            y: index * rowSize
        });

        function setIndex(index) {

            sortable.index = index;
            order.textContent = index + 1;

            // Don't layout if you're dragging
            if (!dragger.isDragging) layout();
        }

        function downAction() {
            animation.play();
            this.update();
        }

        function dragAction() {

            // Calculate the current index based on element's position
            var index = clamp(Math.round(this.y / rowSize), 0, total - 1);

            if (index !== sortable.index) {
                changeIndex(sortable, index);
            }
        }

        function upAction() {
            animation.reverse();
            layout();
        }

        function layout() {
            TweenLite.to(element, 0.3, {
                y: sortable.index * rowSize
            });
        }

        return sortable;
    }

    // Changes an elements's position in array
    function arrayMove(array, from, to) {
        array.splice(to, 0, array.splice(from, 1)[0]);
    }

    // Clamps a value to a min/max
    function clamp(value, a, b) {
        return value < a ? a : (value > b ? b : value);
    }
</script>

</html>