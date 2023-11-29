$(document).ready(function () {
  $("#part_2").hide();

  const comentarios = document.getElementById("comentarios");

  comentarios.addEventListener("paste", function (e) {
    e.preventDefault();
  });

  const evaluation = document.getElementsByClassName("evaluacion");

  for (let index = 0; index < evaluation.length; index++) {
    for (let loop = 10; loop >= 1; loop--) {
      evaluation[index].innerHTML += `
            <input type='radio' name='pregunta_${index}' value='${loop}' id='ev_${index}_rate${loop}'>
            <label for='ev_${index}_rate${loop}'>${loop}</label>
            `;
    }
  }
});

function handleClick(event) {
  console.log("Clicked!", event.target.value);
}

window.onload = function () {
  var inputs = document.querySelectorAll('input[name="preguntas[]"]');
  inputs.forEach(function (input) {
    input.addEventListener("click", handleClick);
  });
};

$("#tipo_metodologia").on("change", function () {
  $(this).css("border", "1px solid green");
});

$("#comentarios").on("input", function () {
  validarTexto();
  //contarPalabras();
});

function contarPalabras() {
  var texto = $("#comentarios").val().trim();
  var palabras = texto.split(/\s+/).filter(function (palabra) {
    return palabra.length > 0;
  });
  $("#contador").text(palabras.length);
}

function validarTexto() {
  var texto = $("#comentarios").val();

  // Eliminar múltiples espacios consecutivos, excepto el primer espacio
  texto = texto.replace(/\s{2,}/g, ' ');

  // Eliminar tres caracteres iguales seguidos
  texto = texto.replace(/(.)\1{2,}/g, function (match, p1) {
    return p1;
  });

  // Actualizar el contenido del textarea
  $("#comentarios").val(texto);

  // Contar palabras
  var palabras = texto.split(/\s+/).filter(function (palabra) {
    return palabra.length > 0;
  });

  // Actualizar el contador de palabras
  $("#contador").text(palabras.length);

  if(palabras.length < 35){
    $("#contador").css('color','red')
  }else{
    $("#contador").css('color','green')
  }
}

$("#frmEvaluacion").on("submit", function (e) {
  e.preventDefault();
  let tipo_metodologia = $("#tipo_metodologia").val();

  if (tipo_metodologia === null) {
    Swal.fire({
      icon: "warning",
      title: "Favor de completar todas las evaluaciones.",
    });
    $("#part_2").hide();
    $("#part_1").fadeIn();
    $("#tipo_metodologia").css("border", "1px solid red");
    return;
  }

  const evaluaciones = {
    1: $("input[name=pregunta_0]:checked").val(),
    2: $("input[name=pregunta_1]:checked").val(),
    3: $("input[name=pregunta_2]:checked").val(),
  };

  if (Object.values(evaluaciones).includes(undefined)) {
    Swal.fire({
      icon: "warning",
      title: "Favor de completar todas las evaluaciones.",
    });
    $("#part_2").hide();
    $("#part_1").fadeIn();
    return;
  }

  const ordenamientoNode = document.querySelectorAll(
    'input[name="posiciones[]"]'
  );

  const ordenamiento = Array.from(ordenamientoNode).reduce((acc, curr, i) => {
    acc[i] = curr.value;
    return acc;
  }, {});

  let comentarios = $("#comentarios").val();

  // Contar palabras
  var palabras = comentarios.split(/\s+/).filter(function (palabra) {
    return palabra.length > 0;
  });

  if (palabras.length < 35) {
    Swal.fire({
      icon: "warning",
      title: "La extensión del comentario no debe ser menor a 35 palabras.",
    });
    return;
  }

  let clavePonencia = $("#clavePonencia").val();
  let gafete = $("#gafete").val();

  $.ajax({
    type: "post",
    dataType: "json",
    url: "./insert",
    data: {
      comentarios,
      evaluaciones,
      ordenamiento,
      clavePonencia,
      gafete,
      tipo_metodologia,
    },
    success: function (data) {
      Swal.fire({
        icon: "success",
        title: data.title,
        html: data.mensaje,
      }).then(function () {
        window.location.href = "../inicio";
      });
    },
    error: function (jqXHR) {
      Swal.fire({
        icon: "error",
        title: "Error " + jqXHR.status,
        html: jqXHR.responseText,
        footer:
          "Le recomendamos tomar captura de pantalla para comprobar la información con el equipo REDESLA.",
      });
    },
  });
});

$("#sig").on("click", function () {
  $("#part_1").hide();
  $("#part_2").fadeIn();
});

$("#prev").on("click", function () {
  $("#part_2").hide();
  $("#part_1").fadeIn();
});

var rowSize = 100; // => container height / number of items
var container = document.querySelector(".containerBox");
var listItems = Array.from(document.querySelectorAll(".list-item")); // Array of elements
var sortables = listItems.map(Sortable); // Array of sortables
var total = sortables.length;

TweenLite.to(container, 0.5, {
  autoAlpha: 1,
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
    paused: true,
  });

  var dragger = new Draggable(element, {
    onDragStart: downAction,
    onRelease: upAction,
    onDrag: dragAction,
    cursor: "inherit",
    type: "y",
  });

  // Public properties and methods
  var sortable = {
    dragger: dragger,
    element: element,
    index: index,
    setIndex: setIndex,
  };

  TweenLite.set(element, {
    y: index * rowSize,
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
      y: sortable.index * rowSize,
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
  return value < a ? a : value > b ? b : value;
}
