<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestion de Academia</title>
    <link href="app.css " rel="stylesheet" type="text/css">
    <style>

        .contenido {
                padding-top: 5%;
                padding-right: 20%;
                padding-bottom: 5%;
                padding-left: 20%;
                background-color: #FFFFFF;
                }


        .menu {
                line-height: 100%;
                text-align: center;
                color: rgb(4, 3, 3);
                vertical-align: middle;
                min-height: 100%;
                width: 100%; 
                background-color: rgb(89, 140, 235);
            }
        
        .footer {
            line-height: 100%;
            text-align: center;
            color: #333;
            font-size: 12px;
            vertical-align: middle;
            min-height: 100%;
            width: 100%;
            background-color: rgb(85, 213, 85);;
            }
        .texto {
            color:  #17202a;
           }        

  </style>
</head>
<body>
    <div class="menu"><b>Api de Gestión académica</b></div>

    <div class="contenido">
        <p class="texto"><b>Lista de rutas api para la gestión académia:</b></p>
        
        <a href = "http://localhost:8000/api/cursos"> <h4>http://localhost:8000/api/cursos</h4> </a>
        
        <a href = "http://localhost:8000/api/cursos/{id}"> <h4>http://localhost:8000/api/cursos/{id}</h4> </a>
        
        <a href = "http://localhost:8000/api/instructores"> <h4>http://localhost:8000/api/instructores</h4> </a>
        
        <a href = "http://localhost:8000/api/instructores/{id}"> <h4>http://localhost:8000/api/instructores/{id}</h4> </a>
        
        <a href = "http://localhost:8000/api/cursos_instructores"> <h4>http://localhost:8000/api/cursos_instructores</h4> </a>
        
        <a href = "http://localhost:8000/api/cursos_instructores/{id}"> <h4>http://localhost:8000/api/cursos_instructores/{id}</h4> </a>
    </div>
    <div class="footer"> &copy; Joan Zamora 2021</div>
</body>
</html>