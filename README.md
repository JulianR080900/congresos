# Plataforma VIVE REDESLA

## Que es?

Es una plataforma centrada especificamente en el acceso a los eventos virtuales de los cuales REDESLA es dueño. 
Aqui se estara haciendo el proceso de desarrollo de la plataforma.

## QUE HAY QUE HACER?

Para los desarrolladores nuevos, la estructura principal funciona correctamente, pero hay aspectos en donde se debe mejorar todos los aspectos. 
Actualmente el codigo de la pagina es un CODIGO EPAGUETI, que significa esto, que en archivos hay tanto CSS como JS HTML y demas. Eso debemos removerlo de donde se encuentra y migrarlo a un archivo y mandarlo llamar. Los headers de las paginas se estan mandando llamar dentro de los archivos, y eso no esta correcto. Deben ser llamados desde el controlador. Cuestiones de inicio de sesion que se les estara explicando el Ing. Julian. Si tienen alguna duda no duden en preguntar.

##IMPORTANTE TRABAJAR EN SU RAMA (BRANCH)

# PASOS PARA QUE SU PROYECTO FUNCIONE EN LOCAL

## EN SU SERVIDOR

1.- Se tiene que clonar este repositorio utilizando la herramienta de GITHUB DESKTOP a su carpeta de repositorios de XAMPP
2.- Importar las bases de datos a su base de datos local, estas bases de datos son 2. Se les estara compartiendo los archivos sql por el grupo de Whatsapp

## EN EL REPOSITORIO

1.- en APP/CONFIG/APP modificar el base_url a su ruta del proyecto local
2.- en APP/CONFIG/DATABASE/ redireccionar a sus bases de datos locales

Una vez haciendo todo eso podran visualizar el proyecto y podran trabajar en el. Para saber que se debe se hacer comentarle al Ing. Julian sobre que hacer, dudas o como lo solucionaria de manera mas sencilla. No duden en preguntar.
