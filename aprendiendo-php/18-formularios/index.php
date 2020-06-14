<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="uft-8"/>
       
        <title>Formularos HTML y PHP</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label> 
            <p><input type="text" name="nombre" autofocus="autofocus" placeholder="Introduce nombre"/></p>
            
            <label for="apellido">Apellido:</label>
            <p><input type="text" name="apellido" required="required" placeholder="Introduce apellido"/></p>
            
          
            <label for="boton">Bóton:</label>
            <p><input type="button" name="boton" value="Click"/></p>
            
            <label for="sexo">Sexo:</label>
            <p>
                Hombre: <input type="checkbox" name="sexo" value="hombre" />
                Mujer: <input type="checkbox" name="sexo" value="mujer" checked=""/>
            </p>
            
            <label for="color">Color:</label>
            <p><input type="color" name="color"/></p>
            
            <label for="fecha">Fecha:</label>
            <p><input type="date" name="fecha"/></p>
            
            <label for="correo">Correo:</label>
            <p><input type="email" name="correo"/></p>
            
            <label for="archivo">Archivo:</label>
            <p><input type="file" name="archivo" multiple="multiple"/></p>
            
            <label for="numero">Numero:</label>
            <p><input type="number" name="numero"/></p>
            
            <label for="pass">Contraseña:</label>
            <p><input type="password" name="pass"/></p>
            
            <label for="continente">Continente:</label>
            <p>
                America: <input type="radio" name="continente" value="America Latina"/>
                Europa: <input type="radio" name="continente" value="Europa"/>
                Asia: <input type="radio" name="continente" value="Asia"/>
            </p>
            
            <label for="web">Pagina web:</label>
            <p><input type="url" name="web"/></p>
            
            <textarea></textarea><br/>
            
            Peliculas:
            <select name="peliculas">
                <option value="spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="LaJungla">La jungla de cristal</option>
                <option value="Gran">Gran torino</option>
            </select> </br>
            
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
         

