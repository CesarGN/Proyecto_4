
<script>
    addEvent(window, 'load', inicializa, true);
    var db;
    var proyecto;
    var ListaProyectos;
    var conexion;


    function inicializa() {

        if (!window.openDatabase)
        {
            alert('Tu navegador no soporta Web SQL....');
            return;
        }

        db = window.openDatabase('BD_Proyectos',
                '1.0',
                'BD de Proyectos',
                5 * 1024 * 1024);
        db.transaction(function(tx)
        {
            tx.executeSql('create table if not exists Proyectos(id integer primary key autoincrement,proyecto String,NoId String, Nombre String, feI String, feT String, Estatus String )',
                    [],
                    function()
                    {
                        console.log('Tabla Creada')
                    },
                    function(t, e)
                    {
                        console.log('Error al Crear la tabla' + e.message)
                    }

            );
        });

        var sincro = document.getElementById('sincroniza');
        document.getElementById('imprimir').innerHTML = '<span class="+nombre+">SIMON</span>';
        sincro.addEventListener('click', function()
        {
            db.transaction(function(tx)
            {

                tx.executeSql('Select * from Proyectos', [],
                        function(tx, results) {
                            var arreglo = array();
                            var len = results.rows.length, i;

                            for (i = 0; i < len; i++) {
                                arreglo[i]['nombre'] = results.rows.item(i).proyecto;
                                var nombre = results.rows.item(i).proyecto;
                                arreglo[i]['estatus'] = results.rows.item(i).Estatus;
                                var estatus = results.rows.item(i).Estatus;
                                arreglo[i]['id_usuario'] = results.rows.item(i).NoId;
                                var id_usuario = results.rows.item(i).NoId;
                                arreglo[i]['fechai'] = results.rows.item(i).feI;
                                var fechai = results.rows.item(i).feI;
                                arreglo[i]['fechaf'] = results.rows.item(i).feT;
                                var fechaf = results.rows.item(i).feT;
                                arreglo[i]['materia'] = results.rows.item(i).Nombre;
                                var materia = results.rows.item(i).Nombre;
                                alert(id_usuario + "  " + nombre + " " + materia + "" + fechai + "" + fechaf + "" + estatus);


                            }
                            print_r(arreglo);


                        },
                        function(t, e)
                        {
                            console.log('Error al obtener datos: ' + e.message);
                        }

                );
            });
        });





    }








//___________________________________________________
    function addEvent(elemento, nomevento, funcion, captura)
    {

        if (elemento.attachEvent)
        {
            elemento.attachEvent('on' + nomevento, funcion);


            return true;
        }
        else {

            if (elemento.addEventListener)
            {
                elemento.addEventListener(nomevento, funcion, captura);
                return true;
            }
            else
                return false;
        }
    }


</script>

