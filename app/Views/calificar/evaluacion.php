<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Evaluación de ponencia - REDESLA</title>
    <link href="<?= base_url("public/css/calificar/index.css") ?>" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/utils/Draggable.min.js"></script>
</head>

<body class="body_<?= $red ?>">
    <style>
        section {
            max-width: 80% !important;
        }
    </style>
    <div class="outter">
        <section id="section_logos">
            <div class="row img">
                <?php
                if ($red != 'Relen_Relep') {
                ?>
                    <div class="col-md-6 col-sm-12">
                        <img class="w-50" src="<?= base_url('public/img/logos_redes/' . $red . '.png') ?>" alt="Logo <?= $red ?>">

                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img class="w-50" src="<?= base_url('public/img/calificar/' . $sede . '.png') ?>" alt="Logo <?= $sede ?>">

                    </div>
                <?php
                } else {
                ?>

                <?php
                }
                ?>
            </div>
            <hr>
            <div class="row img">
                <h2 class="text-center">Evaluación de ponencia</h2>
            </div>
            <div class="row img">
                La constancia de asistencia será dirigida a:
            </div>

            <div class="row img">
                <u><?= $nombre_gafete ?></u>
            </div>
        </section>
    </div>
    <form action="" method="post" id="frmEvaluacion">
        <div class="outter" id="part_1">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <h2>Informacion de la ponencia</h2>
                            <div class="col-md-8">
                                <ul class="infoPonencia">
                                    <li>Nombre de la ponencia:</li>
                                    <li class="val"><?= $ponencia_actual['nombre'] ?></li>
                                    <li>Ponente:</li>
                                    <li class="val"><?= $ponencia_actual['ponente'] ?></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url('public/img/calificar/rate.svg') ?>" alt="" class="w-75">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <h2>Evaluación</h2>
                                </div>

                                <div class="row">
                                    <p>
                                        <b><u>
                                                INSTRUCCIONES: A continuación se presentan las características de la ponencia que deben ser evaluadas.
                                            </u></b>
                                    </p>
                                </div>
                                <div class="row">
                                    <p>Seleccione el tipo de metodología que fue utilizada para el análisis de la información.</p>
                                    <select name="" id="tipo_metodologia" class="form-control">
                                        <option value="" selected disabled>Seleccione una opción</option>
                                        <option value="Cuantitativa">Cuantitativa</option>
                                        <option value="Cualitativa">Cualitativa</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <p>
                                        <b><u>
                                                INSTRUCCIONES: Seleccione en una escala de 1 a 10 qué tan de acuerdo está con el cumplimiento de cada uno de los puntos, siendo 1 que la ponencia no cumple y 10 que satisface la característica que está siendo evaluada.
                                            </u></b>
                                    </p>

                                </div>
                                <div class="row">
                                    <p>El objetivo de la investigación está claramente expresado y está enfocado a resolver alguna pregunta de investigación.</p>
                                    <div class="evaluacion"></div>
                                </div>
                                <div class="row">
                                    <p>El investigador sustenta su propuesta en un marco de referencia teórico presentando las fronteras de la ciencia.</p>
                                    <div class="evaluacion"></div>
                                </div>
                                <div class="row">
                                    <p>Realiza un aporte al conocimiento de forma innovadora</p>
                                    <div class="evaluacion"></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <button type="button" class="btn btn-block body_<?= $red ?> text-white" id="sig">Siguiente</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="outter" id="part_2">
            <section id="sectionOrder">
                <div class="row">
                    <h3>Ordenamiento</h3>
                </div>
                <div class="row">
                    <p>
                        <b><u>
                                INSTRUCCIONES: Ordene las ponencias que ha evaluado de acuerdo con su nivel de aportación a su área del conocimiento, en orden descendente. Seleccione con su cursor la ponencia de desea mover
                                de posición, podrá desplazarla hacia arriba y hacia abajo. Por favor no omita este paso, pues su evaluación es fundamental para la premiación a la mejor ponencia presentada.
                            </u></b>
                    </p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12" style="height: <?= (count($ponencias) * 6.5) + 6.5 ?>rem">
                        <div class="containerBox">
                            <?php
                            $i = 1;
                            $num_ponencia = 0;
                            foreach ($ponencias as $p) {
                                $nombre = $p['nombre_ponencia'];
                            ?>
                                <div class="list-item">
                                    <div class="item-content">
                                        <span class="order font-weight-bold" style="padding-right: 0.3rem;"><?= $i ?></span>
                                        <span><?php echo $nombre; ?></span>
                                        <input readonly hidden type="text" value="<?php echo $nombre; ?>" name="posiciones[]">
                                    </div>
                                </div>
                            <?php
                                $i++;
                            }
                            ?>
                            <div class="list-item">
                                <div class="item-content">
                                    <span class="order font-weight-bold" style="padding-right: 0.3rem;"><?= $i ?></span>
                                    <span><?php echo $ponencia_actual['nombre']; ?></span>
                                    <input readonly hidden type="text" value="<?= $ponencia_actual['nombre']; ?>" name="posiciones[]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3>Comentarios</h3>
                </div>
                <div class="row">
                    <p>
                        <b><u>
                                INSTRUCCIONES: Escriba en el siguiente cuadro de texto las sugerencias de mejora de la ponencia que está siendo evaluada (mínimo 250 caracteres).
                            </u></b>
                    </p>
                    <p class="text-danger">* Esta retroalimentación será visible para los autores de la ponencia, por lo que el comentario deberá realizar un aporte académico. Por favor expréselo de manera respetuosa.</p>
                </div>
                <hr>
                <div class="row">
                    <textarea name="comentarios" id="comentarios" cols="30" rows="10" class="form-control" required minlength="250" placeholder='Escriba un comentario sobre la ponencia: "<?= $ponencia_actual['nombre'] ?>" '></textarea>
                </div>
                <input type="text" hidden id="clavePonencia" value="<?= $clavePonencia ?>">
                <input type="text" hidden id="gafete" value="<?= $gafete ?>">
                <hr>
                <div class="row">
                    <button type="button" class="btn btn-block btn-danger" id="prev">Regresar</button>
                    <button type="submit" class="btn btn-block btn-success">Finalizar evaluación</button>
                </div>
            </section>
        </div>
    </form>

    <script src="<?= base_url('public/js/calificar/evaluacion.js') ?>"></script>


</body>

</html>