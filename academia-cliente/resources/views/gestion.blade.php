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

        .fieldset { 
            -moz-border-radius:5px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
         }
  </style>
</head>
<body>
<div class="menu"><b>Gestión académica</b></div>

<div class="contenido">
    
    <table border="0">
        <tr>
            <td>
            <form id="form1" method="post" action="/supr">
            @csrf
                <table border="0" style="border:1px solid rgb(228, 86, 54);" >
                <caption ><b>Asociación</b></caption>
                <tr>
                    <th>Curso</th>
                    <th>Instructor</th>
                    <th>Opciones</th>
                </tr>
                    <?php
                    foreach ($cursos as $index=>$curso) {
                        print "<tr><td>";echo $curso->cu_nombre;print "</td><td></td></tr>";
                        foreach ($query as $index=>$item) {
                            if ($curso->cu_nombre === $item->cu_nombre){
                                print "<tr><td></td><td>"; echo $item->in_nombre;
                                print "</td><td><a href='/supr?id=".$item->id."' onclick='javascript:document.form1.submit()'>Supr</a></td></tr>";
                            }
                        }
                        }        
                    ?>
                </table>
            </form> 
            </td>
            <td></td><td></td><td></td>
<!-- <p>*********************************</p> -->
            <td>
            <form method="post" action="/guardar">
            @csrf
            <fieldset class="fieldset" style="border:1px solid rgb(228, 86, 54);" >
            <legend><b> Asignación de cursos</b></legend>
                <p>
                <label> Seleccione el Instructor:
                    <select id="instructores" name="in_id">
                        @foreach ($instructores as $item)
                        <option value="{{ $item->in_id }}">{{ $item->in_id }}->{{ $item->in_nombre }} </option>
                        @endforeach
                    </select>
                </label>
                </p>
                <p>
                <label>Elija un curso:
                    <select id="cursos" name="cu_id">
                        @foreach ($cursos as $item)
                        <option value="{{ $item->cu_id }}">{{ $item->cu_id }}->{{ $item->cu_nombre }} </option>
                        @endforeach
                    </select>
                </label>
                </p>
                <p>
                <input type="submit" value="enviar"/>
                </p>
            </fieldset>
            </form>
            </td>
        </tr>
    </table>
    </div>
    <div class="footer"> &copy; Joan Zamora 2021</div>
</body>
</html>