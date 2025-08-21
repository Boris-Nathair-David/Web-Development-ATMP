<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title></title>
    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="Css/inicio_style.css">
    <link rel="stylesheet" type="text/css" href="Css/media_1440.css">
    <link rel="stylesheet" type="text/css" href="Css/media_800.css">
    <link rel="stylesheet" type="text/css" href="Css/media_768.css">
    <link rel="stylesheet" type="text/css" href="Css/media_576.css">
    <link rel="shortcut icon" href="Images/Logos/logo atmp(sin_fondo1).png"/>

    <!-- Conexion del css de fullcalendar --> 

    <link rel="stylesheet" type="text/css" href='Fullcalendar/packages/core/main.css' />
    <link rel="stylesheet" type="text/css" href='Fullcalendar/packages/daygrid/main.css'/>
    <link rel="stylesheet" type="text/css" href='Fullcalendar/packages/list/main.css' />
    <link rel="stylesheet" type="text/css" href='Fullcalendar/packages/bootstrap/main.css' />

    <!-- Conexion del css de DataTable --> 

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css"> 
    
</head>
<body>
    <section class="banner1 container-fluid">
        <header>
            <nav id="main_nav" class="navbar navbar-expand-xl">
               <?= $headerNav; ?>
            </nav>
        </header>
    
                <?= $mensajePre; ?>
                
        
    </section>
</body>
</html>